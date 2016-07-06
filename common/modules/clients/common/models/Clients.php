<?php

namespace common\modules\clients\common\models;

use Yii;
use Gregwar\Image\Image;

/**
 * This is the model class for table "clients".
 *
 * @property integer $id
 * @property string $title
 * @property string $photo
 */
class Clients extends \yii\db\ActiveRecord {

    public $file;
    public $x1;
    public $y1;
    public $x2;
    public $y2;
    public $oldRecord;

    public function afterFind() {
        $this->oldRecord = clone $this;
        return parent::afterFind();
    }

    public function beforeDelete() {
        $this->deletePhoto();
        return parent::beforeDelete();
    }

    public function beforeSave($insert) {
        if ($this->file) {
            self::uploadFile($this);
        }
        return parent::beforeSave($insert);
    }

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title'], 'required', 'on' => ['create', 'update']],
            [['title'], 'string', 'max' => 255, 'on' => ['create', 'update']],
            [['x1', 'y1', 'x2', 'y2'], 'safe', 'on' => ['create', 'update']],
            [
                ['file'],
                'image',
                'extensions' => ['png', 'jpg', 'jpeg', 'gif'],
                'minHeight' => 100,
                'minWidth' => 100,
                'maxSize' => 1024 * 1024 * 10, //10Мб
                'skipOnEmpty' => false,
                'on' => ['create'],
            ],
            [
                ['file'],
                'image',
                'extensions' => ['png', 'jpg', 'jpeg', 'gif'],
                'minHeight' => 100,
                'minWidth' => 100,
                'maxSize' => 1024 * 1024 * 10, //10Мб
                'on' => ['update'],
            ],
        ];
    }

    public function scenarios() {
        return [
            'create' => ['title', 'x1', 'y1', 'x2', 'y2', 'file'],
            'update' => ['title', 'x1', 'y1', 'x2', 'y2', 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'photo' => 'Photo',
        ];
    }

    public function deletePhoto() {
        unlink(\Yii::getAlias(\Yii::$app->controller->module->path) . $this->photo);
    }

    /**
     *
     * @param Comments $obg
     */
    private static function uploadFile($obg) {
        if (!empty($obg->oldRecord->photo)) {
            unlink(\Yii::getAlias(\Yii::$app->controller->module->path) . $obg->oldRecord->photo);
        }
        $obg->photo = Yii::$app->security->generateRandomString() . '.' . $obg->file->extension;
        Image::open($obg->file->tempName)->useFallback(false)->crop($obg->x1, $obg->y1, $obg->x2 - $obg->x1, $obg->y2 - $obg->y1)->save(\Yii::getAlias(\Yii::$app->controller->module->path) . $obg->photo);
    }

    public function getClientsProperty() {
        return $this->hasMany(\common\modules\clients\common\models\Servicesto::className(), ['client_id' => 'id'])->orderBy('sort_order');
    }

}

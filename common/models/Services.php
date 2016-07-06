<?php

namespace common\models;

use Yii;
use Gregwar\Image\Image;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $photo
 */
class Services extends \yii\db\ActiveRecord {

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
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'text'], 'required', 'on' => ['create', 'update']],
            [['text'], 'string', 'on' => ['create', 'update']],
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

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
        ];
    }

    public function getServicesProperty() {
        return $this->hasMany(\common\models\ServicesProperty::className(), ['services_id' => 'id'])->orderBy('sort_order');
    }

    public function deletePhoto() {
        unlink(\Yii::getAlias('@app/web/upload/services/') . $this->photo);
    }

    /**
     *
     * @param Comments $obg
     */
    private static function uploadFile($obg) {
        if (!empty($obg->oldRecord->photo)) {
            unlink(\Yii::getAlias('@app/upload/services/') . $obg->oldRecord->photo);
        }
        $obg->photo = Yii::$app->security->generateRandomString() . '.' . $obg->file->extension;
        Image::open($obg->file->tempName)->useFallback(false)->crop($obg->x1, $obg->y1, $obg->x2 - $obg->x1, $obg->y2 - $obg->y1)->save(\Yii::getAlias('@app/web/upload/services/'). $obg->photo);
    }

}

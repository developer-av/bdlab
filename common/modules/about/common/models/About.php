<?php

namespace common\modules\about\common\models;

use Yii;
use Gregwar\Image\Image;

/**
 * This is the model class for table "about".
 *
 * @property integer $id
 * @property string $name
 * @property string $photo
 * @property string $about
 * @property string $email
 * @property string $vk
 * @property string $facebook
 * @property string $phone
 * @property string $instagram
 */
class About extends \yii\db\ActiveRecord {

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
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'about', 'email', 'vk', 'facebook', 'phone'], 'required', 'on' => ['create', 'update']],
            [['about'], 'string', 'on' => ['create', 'update']],
            [['name', 'email', 'vk', 'facebook'], 'string', 'max' => 255, 'on' => ['create', 'update']],
            [['x1', 'y1', 'x2', 'y2', 'instagram'], 'safe', 'on' => ['create', 'update']],
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
            'create' => ['name', 'about', 'email', 'vk', 'facebook', 'x1', 'y1', 'x2', 'y2', 'phone', 'file', 'instagram'],
            'update' => ['name', 'about', 'email', 'vk', 'facebook', 'x1', 'y1', 'x2', 'y2', 'phone', 'file', 'instagram'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'about' => 'Текст',
            'email' => 'E-mail',
            'vk' => 'VK',
            'facebook' => 'Facebook',
            'phone' => 'Телефон',
            'instagram' => 'Инстаграм',
        ];
    }

    public function deletePhoto() {
        if (file_exists(\Yii::getAlias(\Yii::$app->controller->module->path) . $this->photo) && is_file(\Yii::getAlias(\Yii::$app->controller->module->path) . $this->photo)) {
            unlink(\Yii::getAlias(\Yii::$app->controller->module->path) . $this->photo);
        }
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
        Image::open($obg->file->tempName)->useFallback(false)->crop($obg->x1, $obg->y1, $obg->x2 - $obg->x1, $obg->y2 - $obg->y1)->resize(220, 220)->save(\Yii::getAlias(\Yii::$app->controller->module->path) . $obg->photo);
    }

}

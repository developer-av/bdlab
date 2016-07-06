<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services_property".
 *
 * @property integer $id
 * @property integer $services_id
 * @property integer $sort_order
 * @property string $text
 */
class ServicesProperty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services_property';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['services_id', 'sort_order', 'text'], 'required'],
            [['services_id', 'sort_order'], 'integer'],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'services_id' => 'Services ID',
            'sort_order' => 'Sort Order',
            'text' => 'Text',
        ];
    }
}

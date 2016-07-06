<?php

namespace common\modules\clients\common\models;

use Yii;

/**
 * This is the model class for table "servicesto".
 *
 * @property integer $id
 * @property integer $client_id
 * @property string $text
 * @property integer $sort-order
 */
class Servicesto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicesto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id', 'text', 'sort_order'], 'required'],
            [['client_id', 'sort_order'], 'integer'],
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
            'client_id' => 'Client ID',
            'text' => 'Название услуги',
            'sort_order' => 'Сортировка',
        ];
    }
}

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('comments', 'Отзывы');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-index">

    <p>
        <?= Html::a(Yii::t('comments', 'Создать отзыв'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'author',
            [
                'attribute' => 'text',
                'value' => function ($model) {
                    return StringHelper::truncate($model->text, 60);
                }
            ],
            'created_at:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

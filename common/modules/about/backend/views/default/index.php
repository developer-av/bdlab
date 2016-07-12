<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\about\backend\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <p>
        <?= Html::a('Добавить человека', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModeratorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Модераторы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <p>
        <?= Html::a('Зарегистрировать модератора', ['create'], ['class' => 'btn btn-success', 'id' => 'create']) ?>
    </p>
    <?php
    Pjax::begin([
        'id' => 'gridview',
        'enablePushState' => false,
    ]);
    ?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'email:email',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'buttonOptions' => ['data-pjax' => 1],
            ],
        ],
    ]); ?>
    <?php Pjax::end();
    yii\bootstrap\Modal::begin([
        'id' => 'createModal',
        'footer' => Html::a('Отменить', '#', ['class' => 'btn btn-danger', 'data-dismiss' => 'modal']) . Html::submitButton('Создать', [
            'class' => 'btn btn-success', 'form' => 'createForm']),
    ]);
    yii\bootstrap\Modal::end();
    ?>

</div>

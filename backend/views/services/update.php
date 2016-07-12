<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Services */

$this->title = 'Обновление услуги: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="services-update">

    <div class="text-center"><?= Html::img(\Yii::getAlias('@web/upload/services/') . $model->photo, ['class' => 'img-circle']) ?></div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

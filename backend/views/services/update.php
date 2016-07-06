<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Services */

$this->title = 'Update Services: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="services-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="text-center"><?= Html::img(\Yii::getAlias('@web/upload/services/') . $model->photo, ['class' => 'img-circle']) ?></div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

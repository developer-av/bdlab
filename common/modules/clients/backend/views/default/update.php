<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\clients\common\models\Clients */

$this->title = 'Update Clients: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clients-update">

    <div class="text-center"><?= Html::img(\Yii::getAlias('@web/' . \Yii::$app->controller->module->path) . $model->photo, ['class' => 'img-circle']) ?></div>


    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>

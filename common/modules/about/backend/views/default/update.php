<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\about\common\models\About */

$this->title = 'Изменить О нас: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'О нас', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="about-update">

    <div class="text-center"><?= Html::img(\Yii::getAlias('@web/' . \Yii::$app->controller->module->path) . $model->photo, ['class' => 'img-circle']) ?></div>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\about\common\models\About */

$this->title = 'Добавить человека';
$this->params['breadcrumbs'][] = ['label' => 'О нас', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

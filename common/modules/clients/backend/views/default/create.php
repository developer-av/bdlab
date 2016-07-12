<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\clients\common\models\Clients */

$this->title = 'Добавить клиента';
$this->params['breadcrumbs'][] = ['label' => 'Клиенты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

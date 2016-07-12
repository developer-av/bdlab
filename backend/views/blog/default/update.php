<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model developerav\blog\common\models\Posts */

$this->title = Yii::t('blog', 'Изменение поста: ', [
    'modelClass' => 'Posts',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('blog', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('blog', 'Изменить');
?>
<div class="posts-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

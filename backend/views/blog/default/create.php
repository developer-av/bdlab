<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model developerav\blog\common\models\Posts */

$this->title = Yii::t('blog', 'Создать пост');
$this->params['breadcrumbs'][] = ['label' => Yii::t('blog', 'Посты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

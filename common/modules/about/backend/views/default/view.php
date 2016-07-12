<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\about\common\models\About */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'О нас', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-view">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить запись?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <div class="text-center"><?= Html::img(\Yii::getAlias('@web/' . \Yii::$app->controller->module->path) . $model->photo, ['class' => 'img-circle']) ?></div>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'about:html',
            'email:email',
            'vk',
            'facebook',
            'phone',
            'instagram',
        ],
    ])
    ?>

</div>

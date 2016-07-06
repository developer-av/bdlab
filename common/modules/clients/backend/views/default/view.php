<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\modules\clients\backend\widgets\dynafields\DynaFields;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\clients\common\models\Clients */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Клиенты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
            'title',
        ],
    ])
    ?>

</div>

<?php
Pjax::begin(['id' => 'TariffsProp', 'clientOptions' => ['cache' => false], 'enablePushState' => false]);
?>

<?php $form = ActiveForm::begin(['action' => ['view', 'id' => $model->id], 'enableClientScript' => false, 'id' => 'TariffsPropForm', 'options' => ['data-pjax' => '1']]);
?>
<div class="form-group row">
    <div class="col-md-2">
        <?php
        echo DynaFields::widget([
            'urlAdd' => ['create-property', 'id' => $model->id],
            'urlRemove' => ['delete-property', 'tid' => $model->id],
            'inputMethod' => 'textInput',
            'inputMethodArgs' => [['maxlength' => true]],
            'form' => $form,
            'models' => $model->clientsProperty,
            'attribute' => 'sort_order',
            'inputTemplate' => '{input}',
            'pjax' => false,
        ]);
        ?>
    </div>
    <div class="col-md-10">
        <?php
        echo DynaFields::widget([
            'urlAdd' => ['create-property', 'id' => $model->id],
            'urlRemove' => ['delete-property', 'tid' => $model->id],
            'inputMethod' => 'textInput',
            'inputMethodArgs' => [['maxlength' => true]],
            'form' => $form,
            'models' => $model->clientsProperty,
            'attribute' => 'text',
            'pjax' => false,
        ]);
        ?>
    </div>
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success pull-right']) ?>
</div>
<?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>

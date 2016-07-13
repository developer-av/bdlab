<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\Alert;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\ResetPasswordForm */

$this->title = 'Восстановление пароля';

$fieldOptions = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
        Админ панель
    </div>
    <!-- /.login-logo -->
    <div style="position: absolute; width: 100%; left: 0; top: 0;" class="text-center"><?= Alert::widget(['options' => ['style' => 'display: inline-block;']]) ?></div>
    <div class="login-box-body">
        <p class="login-box-msg">Востановление пароля</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'email', $fieldOptions)
            ->label(false)
            ->textInput(['placeholder' => 'Email']) ?>

        <div class="row">
            <div class="col-xs-7">
            </div>
            <!-- /.col -->
            <div class="col-xs-5">
                <?= Html::submitButton('Востановить', ['class' => 'btn btn-primary btn-block btn-flat']) ?>
            </div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->

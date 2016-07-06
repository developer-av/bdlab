<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Контакты';

?>
<?php \yii\widgets\Pjax::begin(['enablePushState' => false, 'clientOptions' => ['cache' => false], 'timeout' => 5000]); ?>

<?php
if ($send === true) {
    $this->registerJs('
        $("#success-send").modal("show");
');
}
?>
<?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>

<?= $form->field($model, 'name')->textInput(['placeholder' => $model->getAttributeLabel('name')])->label('')->error(false) ?>

<?= $form->field($model, 'phone')->textInput(['placeholder' => $model->getAttributeLabel('phone')])->label('') ?>

<?= $form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email')])->label('')->error(false) ?>

<?= $form->field($model, 'href')->textInput(['placeholder' => $model->getAttributeLabel('href')])->label('') ?>

<?= $form->field($model, 'body')->textInput(['placeholder' => $model->getAttributeLabel('body')])->label('')->error(false) ?>

<div class="form-group">
    <?= Html::submitButton('Отправить заявку', ['class' => 'btn btn-primary pull-right', 'name' => 'contact-button']) ?>
</div>

<?php ActiveForm::end(); ?>

<div id="success-send" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Типа удачная отправка</h4>
            </div>
            <div class="modal-body">
                <p>Спасибо за заявку</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php \yii\widgets\Pjax::end(); ?>
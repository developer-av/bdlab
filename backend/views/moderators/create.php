<?php

use yii\helpers\Html;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Зарегистрировать модератора';

$this->registerJs(
        '$("document").ready(function(){
            jQuery(document).off("submit", "#moderform form[data-pjax]");
            $("#moderform").off("pjax:end");
        });'
);

$this->registerJs('$("document").ready(function(){
    $("#moderform").on("pjax:end", function() {
        $.pjax.reload({container:"#gridview"});
    });
});');

Pjax::begin(['id' => 'moderform', 'enablePushState' => false, 'timeout' => 5000]);
if (!$model->isNewRecord) {
    $this->registerJs("
        $('#createModal').modal('hide');
    ");
}
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php Pjax::end(); ?>
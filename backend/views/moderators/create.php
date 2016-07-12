<?php

use yii\helpers\Html;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Зарегистрировать модератора';
$this->params['breadcrumbs'][] = ['label' => 'Модераторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

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

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php Pjax::end(); ?>
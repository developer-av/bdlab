<?php
/* @var $this yii\web\View */
/* @var $model backend\models\UploadForm */

//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
use common\widgets\Alert;

$this->title = 'Профиль';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$form = ActiveForm::begin();

echo $form->field($model, 'username')->textInput();
echo $form->field($model, 'email')->textInput();
echo $form->field($model, 'oldpassword')->passwordInput();
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'password2')->passwordInput();

echo Html::submitButton('Сохранить', ['class' => 'btn btn-success']);

ActiveForm::end();

?>
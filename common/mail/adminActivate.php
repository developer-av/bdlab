<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['moderators/activate', 'token' => $user->password_reset_token]);
?>
<div class="password-reset">
    <p>Вас назначили модератором.</p>

    <p>Ваш лгин: <?= Html::encode($user->username) ?>,</p>

    <p>Перейдите по ссылке чтобы активировать учетную запись:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>

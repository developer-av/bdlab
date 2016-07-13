<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">ЛРБ</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="user user-menu">
                        <?=
                        Html::a(
                                \Yii::$app->user->identity->username, ['/profile/index']
                        )
                        ?>
                </li>
                <li>
                    <?=
                    Html::a(
                            '<i class="fa fa-sign-out"></i>', ['/site/logout'], ['data-method' => 'post']
                    )
                    ?>
                </li>
            </ul>
        </div>
    </nav>
</header>

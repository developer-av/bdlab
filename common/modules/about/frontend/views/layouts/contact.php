<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="page-wrapper about-us">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="logo">
                                <a href="<?= Url::to(['/']); ?>">
                                    <img src="/img/logo-small.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1">
                            <nav>
                                <ul class="nav">
                                    <li><a href="<?= Url::to(['/']); ?>">Главная</a></li>
                                    <li><a href="<?= Url::to(['/about/default/index']); ?>">О нас</a></li>
                                    <li><a href="<?= Url::to(['/site/services']); ?>">Услуги</a></li>
                                    <li><a href="<?= Url::to(['/clients/default/index']); ?>">Клиенты</a></li>
                                    <li><a href="<?= Url::to(['/blog/default/index']); ?>">Блог</a></li>
                                    <li><a href="<?= Url::to(['/about/default/contact']); ?>">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <?= $content ?>

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    Время работы: <br>
                                    с 9:00 до 19:00,  <br>
                                    без выходных
                                </div>
                                <div class="col-md-6">
                                    Мы в социальных сетях: <br>
                                    <a href="#"><img src="/img/VK.png" alt=""></a><a href="#"><img src="/img/facebook.png" alt=""></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    Контактные номера: <br>
                                    +38 093 763 00 39,<br>
                                    +38 067 838 09 71
                                </div>
                                <div class="col-md-6">
                                    Email: <br>
                                    Ira_F2@mail.ru
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <div class="slogan">
                                Если Вы пришли с идеей – мы сделаем <br>
                                всё необходимое, чтобы оформить <br>
                                и подать её миру ярко и результативно! <br>
                            </div>
                            <div class="copyright">
                                Лаборатория развития бизнеса 2016  <br>
                                &copy; Все права защищены
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
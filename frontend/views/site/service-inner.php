<?php
/* @var $this yii\web\View */

$this->title = 'Услуги - '.$model['title'];

use yii\helpers\Html;
?>

<section class="about_service">
    <div class="container">
        <div class="row">
            <div class="col-md-3 serv-photo">
                <img src="<?= \Yii::getAlias('@web/upload/services/') . $model['photo'] ?>" alt="">
            </div>
            <div class="col-md-3 serv-description">
                <h4><?= $model['title'] ?></h4>
                <ul>
                    <?php
                    foreach ($model['servicesProperty'] as $servicesProperty):
                        ?>
                        <li><?= $servicesProperty['text'] ?></li>
                        <?php
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p>
                    <?= $model['text'] ?>
                </p>
                <?= Html::a('Вернуться к остальным услугам', ['services'], ['class' => 'btn']) ?>
            </div>
        </div>
    </div>
</section>
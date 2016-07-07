<?php
/* @var $this yii\web\View */
/* @var $model common\modules\about\common\models\About */

use yii\helpers\Html;
use app\components\ContactWidget;

?>

<section class="block-form fix">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                foreach ($models as $model):
                    ?>
                    <div class="block-irina">
                        <div class="row">
                            <div class="col-md-4">
                                <?= Html::img('/' . \yii::$app->params['aboutPath'] . $model->photo, ['class' => 'img-circle']) ?>
                            </div>
                            <div class="col-md-8">
                                <span><?= $model->name ?></span>
                                <ul>
                                    <li><i class="sprite sprite-contact_email"></i><?= $model->email ?></li>
                                    <li><i class="sprite sprite-contact_vk"></i><?= $model->vk ?></li>
                                    <li><i class="sprite sprite-contact_fb"></i><?= $model->facebook ?></li>
                                    <li><img src="/img/phone.png" alt="phone"><?= $model->phone ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <?= ContactWidget::widget() ?>
            </div>
        </div>
    </div>
</section>

<section class='map' style="position: relative;">
    <div style="width: 100%; height: 100%; position: absolute; background-color: #000; opacity: 0.5;"></div>
    <div style="position: absolute; padding: 30px; top: 20%; left: 30%; background-color: #F1F1F1;">
        <h3 style="font-weight: bold; margin-bottom: 30px;">Киев</h3>
        <h4 style="color: #A7A7A7;">
        ул. Ивана Пуля 2,<br/>
        Киев, 84936<br/>
        3 этаж, 10 офис
        </h4>
        <h2 style="color: #76B55D;">407.296.4100</h2>
    </div>
</section>
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

<section class='map'></section>
<?php
/* @var $this yii\web\View */
/* @var $model common\modules\about\common\models\About */

use yii\helpers\Html;
$this->title = 'О нас';
?>

<section class="about-description">
    <div class="container">
        <?php
        $i = 0;
        foreach ($models as $model):
            if ($i % 2 == 0):
                ?>

                <div class="about-irina">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-1 about-img">
                            <?= Html::img('/' . \yii::$app->params['aboutPath'] . $model->photo, ['class' => 'img-circle']) ?>
                        </div>
                        <div class="col-md-4 irina-description">
                            <p class='about-name'><strong><?= $model->name ?></strong></p>
                            <?= $model->about ?>
                        </div>
                        <div class="col-md-4">
                            <ul class="about-contants">
                                <li><i class="sprite sprite-contact_email"></i><a href="mailto:<?= $model->email ?>" target="_top"><?= $model->email ?></a></li>
                                <li><i class="sprite sprite-contact_vk"></i><a href="https://new.vk.com/<?= $model->vk ?>" target="_blank"><?= $model->vk ?></a></li>
                                <li><i class="sprite sprite-contact_fb"></i><a href="https://www.facebook.com/<?= $model->facebook ?>" target="_blank"><?= $model->facebook ?></a></li>
                                <?= (!empty($model->instagram)? '<li><i class="sprite sprite-contact_in"></i><a href="https://www.instagram.com/'.$model->instagram.'" target="_blank">'.$model->instagram.'</li></a>' : ''); ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php
            else:
                ?>
                <div class="about-vladimir">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-1">
                            <ul class="about-contants">
                                <li><i class="sprite sprite-contact_email"></i><a href="mailto:<?= $model->email ?>" target="_top"><?= $model->email ?></a></li>
                                <li><i class="sprite sprite-contact_vk"></i><a href="https://new.vk.com/<?= $model->vk ?>" target="_blank"><?= $model->vk ?></a></li>
                                <li><i class="sprite sprite-contact_fb"></i><a href="https://www.facebook.com/<?= $model->facebook ?>" target="_blank"><?= $model->facebook ?></a></li>
                                <?= (!empty($model->instagram)? '<li><i class="sprite sprite-contact_in"></i><a href="https://www.instagram.com/'.$model->instagram.'" target="_blank">'.$model->instagram.'</li></a>' : ''); ?>
                            </ul>
                        </div>
                        <div class="col-md-4 vladimir-description">
                            <p class='about-name'><strong><?= $model->name ?></strong></p>
                            <?= $model->about ?>
                        </div>
                        <div class="col-md-4 about-img">
                            <?= Html::img('/' . \yii::$app->params['aboutPath'] . $model->photo, ['class' => 'img-circle']) ?>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            echo ($i+1 != count($models)? '<hr>' : '');
            $i++;
        endforeach;
        ?>
    </div>
</section>
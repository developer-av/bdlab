<?php
/* @var $this yii\web\View */
/* @var $model common\modules\about\common\models\About */

use yii\helpers\Html;
?>

<!--<div class="container">
<?php
foreach ($models as $model):
    ?>
                                <div class="row">
                                    <div class="col-xs-4">
    <?= Html::img('/' . \yii::$app->params['aboutPath'] . $model->photo, ['class' => 'img-circle']) ?>
                                    </div>
                                    <div class="col-xs-4"><?= $model->name ?><?= $model->about ?></div>
                                    <div class="col-xs-4">
                                        <ul>
                                            <li><?= $model->email ?></li>
                                            <li><?= $model->vk ?></li>
                                            <li><?= $model->facebook ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr/>
    <?php
endforeach;
?>
</div>-->

<section class="about-description">
    <div class="container">
        <!--				<div class="about-irina">
                            <div class="row">
                                <div class="col-md-3 col-md-offset-1 about-img">
                                    <img src="img/photo-irina.png" alt="">
                                </div>
                                <div class="col-md-4 irina-description">
                                    <p class='about-name'><strong>Ирина Горбунова</strong></p>
                                    <p>Основатель, идеолог проекта.</p>
                                    <p>Маркетолог, эксперт по разработке и внедрению <br>
                                    маркетинговых стратегий для малого и среднего бизнеса. </p>
                                    <p>Выступает в роли консультанта для первых лиц компаний, <br>
                                    помогая настроить маркетинговые процессы в их бизнесе. </p>
                                    <p>Выступает в качестве спикера на мероприятиях <br>
                                    для предпринимателей и владельцев бизнеса.</p>
                                    <p>Работает над кандидатской диссертацией <br>
                                    и пишет книгу по маркетингу микробизнеса. </p>
                                </div>
                                <div class="col-md-4">
                                    <ul class="about-contants">
                                    <li><i class="sprite sprite-contact_email"></i>Ira_F2@mail.ru</li>
                                    <li><i class="sprite sprite-contact_vk"></i>irina_gorbnova</li>
                                    <li><i class="sprite sprite-contact_fb"></i>Irina7Gorbunova</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="about-vladimir">
                            <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                    <ul class="about-contants">
                                    <li><i class="sprite sprite-contact_email"></i>deftime@gmail.com</li>
                                    <li><i class="sprite sprite-contact_vk"></i>deftime</li>
                                    <li><i class="sprite sprite-contact_fb"></i>volodymyr.gorbunov</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 vladimir-description">
                                        <p class='about-name'><strong>Владимир Горбунов</strong></p>
                                        <p>Основатель, соавтор проекта.</p>
                                        <p>Интернет-маркетолог, IT-технолог. </p>
                                        <p>Специализируется на продвижении бизнеса <br>
                                            в социальных сетях (SMM).</p>
                                        <p>Разрабатывает и внедряет коммуникационные <br>
                                            стратегии брендов. </p>
                                </div>
                                <div class="col-md-4 about-img">
                                    <img src="img/photo-vladimir.png" alt="">
                                </div>
                            </div>
                        </div>-->
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
                                <li><i class="sprite sprite-contact_email"></i><?= $model->email ?></li>
                                <li><i class="sprite sprite-contact_vk"></i><?= $model->vk ?></li>
                                <li><i class="sprite sprite-contact_fb"></i><?= $model->facebook ?></li>
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
                                <li><i class="sprite sprite-contact_email"></i><?= $model->email ?></li>
                                <li><i class="sprite sprite-contact_vk"></i><?= $model->vk ?></li>
                                <li><i class="sprite sprite-contact_fb"></i><?= $model->facebook ?></li>
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
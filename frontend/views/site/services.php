<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>

<section class="services-list">
    <div class="container">
        <?php
        $i = 0;
        foreach ($models as $model):
            ?>
            <?= ($i % 4 == 0 ? '<div class="row">' : ''); ?>
            <div class="col-md-3">
                <div class="service-box">
                    <div class="serv-img"><img src="<?= \Yii::getAlias('@web/upload/services/') . $model['photo'] ?>" alt=""></div>
                    <div class="serv-description">
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
                    <?= Html::a('Подробнее', ['service-inner', 'id' => $model['id']], ['class' => 'btn']) ?>
                </div>
            </div>
            <?= ($i % 4 == 3 ? '</div>' . (count($models) - $i > 4 ? '<hr/>' : '') : '') ?>
            <?php
            $i++;
        endforeach;
        echo ($i % 4 != 0 ? '</div>' : '');
        ?>
    </div>
</section>
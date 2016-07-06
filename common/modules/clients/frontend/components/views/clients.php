<?php
/* @var $this yii\web\View */
/* @var $model \common\modules\clients\common\models\Clients */
/* @var $property \common\modules\clients\common\models\Servicesto */

use yii\helpers\Html;
?>

<section class="client-list">
    <div class="container">
        <?php
        $i = 0;
        foreach ($models as $model):
            ?>
            <?= ($i % 2 == 0? '<div class="row'.($i % 4 == 2? ' space-between' : '').'">' : ''); ?>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="clients-logo"><?= Html::img('/' . \yii::$app->params['clientsPath'] . $model->photo) ?></div>
                        </div>
                        <div class="col-md-7">
                            <div class="clients-description">
                                <h4><?= $model->title ?></h4>
                                <ul>
                                    <?php
                                    foreach ($model->clientsProperty as $property):
                                        ?>
                                        <li><?= $property->text ?></li>
                                        <?php
                                    endforeach;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?= ($i % 2 == 1? '</div>' : '') ?>
            <?php
            $i++;
        endforeach;
        echo ($i % 2 != 0 ? '</div>' : '');
        ?>
    </div>
</section>
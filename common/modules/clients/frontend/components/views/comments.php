<?php
/* @var $this yii\web\View */
/* @var $model developerav\comments\models\Feedback */

use yii\helpers\Html;

$first = true;

use developerav\comments\WidgetAsset;

$test = WidgetAsset::register($this);
?>

<section class="slider client-slider">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <?php foreach ($models as $model): ?>
                <div class="item <?php if ($first === true) {
                            echo 'active';
                            $first = false;
                        } ?>">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-4"><?= Html::img('/'.\yii::$app->params['feedbackPath'] . $model->photo, ['alt' => 'Ecso для ' . $model->author]) ?></div>
                            <div class="col-md-8 feedback-description">
                                <h3><?= $model->author ?></h3>
                                <p><?= $model->text ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
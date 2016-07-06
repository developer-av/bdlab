<?php
/*
 * $this yii\web\View
 * $model developerav\blog\common\models\Posts
 */

$this->title = $model['title'];

use yii\helpers\Html;
?>

<section class="blog-recover">
    <div class="container">
        <div class="blog-description">
            <?php
            if (!empty($model['img'])):
                ?>
                <img style="display: inline-block;" src="/upload/blog/<?= $model['img'] ?>" alt="">
            <?php endif; ?>
            <h3><?= $model['title'] ?></h3>
        <?= $model['text'] ?>
        </div>
        <?php
        if ($models[0] != null || $models[1] != null):
            ?>
            <div class="blog-selector-box">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 blog-selector">
                        <div class="row">
                            <?php
                            if ($models[0] != NULL):
                                ?>
                                <div class="col-md-6 prev-section">
                                    <?= Html::a('
                            <div class="prev-blog">Предыдущая</div>
                                    <div class="prev-blog-title">' . $models[0]['title'] . '</div>', ['view', 'id' => $models[0]['id']]) ?>
                                </div>
                                <?php
                            else:
                                ?>
                                <div class="col-md-6 prev-section">
                                </div>
                            <?php
                            endif;
                            ?>
                            <?php
                            if ($models[1] != NULL):
                                ?>
                                <div class="col-md-6 next-section">
                                    <?= Html::a('
                            <div class="prev-blog">Следующая</div>
                                    <div class="prev-blog-title">' . $models[1]['title'] . '</div>', ['view', 'id' => $models[1]['id']]) ?>
                                </div>
                                <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endif;
        ?>
    </div>
</section>
<?php
/*
 * $this yii\web\View
 * $model developerav\blog\common\models\Posts
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = yii::t('blog', 'Блог');
?>

<section class="blog-list">
    <div class="container">
        <div class="row">
            <?php
            $i = 0;
            foreach ($models as $model):
                echo ($i % 3 == 0 && $i != 0 ? '<div class="clearfix"></div>' : '');
                ?>
                <div class="col-md-4">
                    <div class="blog-box">
                        <?= Html::a('
                            <div class="blog-preview"><img src="/upload/blog/'.$model['img'].'" alt=""></div>
                            <div class="blog-title">'.$model['title'].'</div>', ['view', 'id' => $model['id']]) ?>
                    </div>
                </div>
                <?php
                $i++;
            endforeach;
            ?>
        </div>
        <div class = "row center">
            <div class = "col-md-6 col-md-offset-3 text-center">
                <nav>
                    <?php
                    echo LinkPager::widget([
                        'options' => ['class' => 'pagination pagination-lg'],
                        'nextPageLabel' => '<img src="/img/arrows/arrow-right-gray.png" alt="">',
                        'prevPageLabel' => '<img src="/img/arrows/arrow-left-gray.png" alt="">',
                        'pageCssClass' => 'page-item',
                        'linkOptions' => ['class' => 'page-link'],
                        'pagination' => $pages,
                    ]);
                    ?>
                </nav>
            </div>
        </div>
    </div>
</section>
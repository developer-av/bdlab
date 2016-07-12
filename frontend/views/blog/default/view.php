<?php
/* @var $this yii\web\View */
/* @var $model developerav\blog\common\models\Posts */

$this->title = $model['title'];

use yii\helpers\Html;
?>
<div id="fb-root"></div>
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

            <?php
            $this->registerJsFile('//vk.com/js/api/openapi.js?122', ['position' => \yii\web\View::POS_HEAD]);
            $this->registerJs('
                    (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));
VK.init({apiId: '.\Yii::$app->params['apiId'].', onlyWidgets: true});
                        ', \yii\web\View::POS_HEAD);
            ?>
            <script type="text/javascript">
                VK.Widgets.Like("vk_like", {type: "button"});
            </script>
            <div class="pull-right">
                <div class="fb-like pull-left" data-href="<?= \yii\helpers\Url::to('', true) ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                <div class="pull-left" style="width: 20px; height: 1px;"></div>
                <div style="display: inline-block;"><div class="pull-left" id="vk_like"></div></div>
            </div>
            <div class="clearfix"></div>
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
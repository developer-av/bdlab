<?php
$first = true;
?>

<section class="slider">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!--                                <div class="item active">
                                                    <div class="carousel-caption">
                                                        <h3>Почему Вам стоит работать с нами?</h3>
                                                        <p>Просто сайт не сделает Ваш бизнес успешным.
                                                            Даже красивый сайт – всего лишь элемент формулы успеха.
                                                            Вести корпоративные страницы в социальных сетях не просто тренд или дань времени.
                                                            Это одна из важных составляющих клиентоориентированного бизнеса.
                                                            Хаотичные рекламные активности работают непредсказуемо,
                                                            ситуативный маркетинг – не всегда уместен. </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="carousel-caption">
                                                        <h3>Почему Вам стоит работать с нами?</h3>
                                                        <p>Просто сайт не сделает Ваш бизнес успешным.
                                                            Даже красивый сайт – всего лишь элемент формулы успеха.
                                                            Вести корпоративные страницы в социальных сетях не просто тренд или дань времени.
                                                            Это одна из важных составляющих клиентоориентированного бизнеса.
                                                            Хаотичные рекламные активности работают непредсказуемо,
                                                            ситуативный маркетинг – не всегда уместен. </p>
                                                    </div>
                                                </div>-->
                <?php
                foreach ($models as $model):
                    ?>
                    <div class="item <?= ($first === true? 'active' : '') ?>">
                        <div class="carousel-caption">
                            <h3><?= $model['title'] ?></h3>
                            <p><?= $model['text'] ?></p>
                        </div>
                    </div>
                    <?php
                    $first = false;
                endforeach;
                ?>
            </div>

            <!--Left and right controls -->
            <a class = "left carousel-control" href = "#myCarousel" role = "button" data-slide = "prev">
                <span class = "glyphicon glyphicon-chevron-left" aria-hidden = "true"></span>
                <span class = "sr-only">Previous</span>
            </a>
            <a class = "right carousel-control" href = "#myCarousel" role = "button" data-slide = "next">
                <span class = "glyphicon glyphicon-chevron-right" aria-hidden = "true"></span>
                <span class = "sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
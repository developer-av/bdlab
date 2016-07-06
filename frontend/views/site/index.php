<?php

/* @var $this yii\web\View */

use app\components\SliderWidget;

$this->title = 'My Yii Application';
?>

            <?= SliderWidget::widget() ?>

            <section class='specifics'>
                <div class="container">
                    <div class="specific-title">
                        <h2>Как мы работаем?</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="specific-icon"><img src="/img/icons/specific_icon-1.png" alt=""></div>
                            <div class="description">
                                <p> 1. Если Вы хотите обсудить
                                    свой проектс нами – оставьте заявку
                                    в формеобратной связи
                                    или сразу звоните.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="specific-icon"><img src="/img/icons/specific_icon-2.png" alt=""></div>
                            <div class="description">
                                <p>2. Вместе мы выберем
                                    удобное время
                                    и место для встречи.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="specific-icon"><img src="/img/icons/specific_icon-3.png" alt=""></div>
                            <div class="description">
                                <p>3. При личном общении
                                    Вы получите подробную бесплатную
                                    консультацию по вопросам,
                                    связанным с Вашим проектом.
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <div class="specific-icon"><img src="/img/icons/specific_icon-4.png" alt=""></div>
                            <div class="description">
                                <p>4. Как только определимся
                                    с необходимыми для Вашего
                                    проектауслугами – Вы получите
                                    на заполнение техническое задание.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="specific-icon"><img src="/img/icons/specific_icon-5.png" alt=""></div>
                            <div class="description">
                                <p>5. После получения заполненного
                                    технического задания мы начинаем
                                    работу над Вашим проектом,
                                    информируя Вас на всех этапах
                                    о проделанной работе.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="specific-icon"><img src="/img/icons/specific_icon-6.png" alt=""></div>
                            <div class="description">
                                <p>6. В установленный срок мы сдаём
                                    отчёт о выполненной работе
                                    и предоставляем ещё одну
                                    бесплатную консультацию.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
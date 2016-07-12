<aside class="main-sidebar">

    <section class="sidebar">

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Меню', 'options' => ['class' => 'header']],
                        ['label' => 'О нас', 'url' => ['/about/default/index']],
                        ['label' => 'Услуги', 'url' => ['/services/index']],
                        ['label' => 'Отзывы', 'url' => ['/feedback/default/index']],
                        ['label' => 'Блог', 'url' => ['/blog/default/index']],
                        ['label' => 'Клиенты', 'url' => ['/clients/default/index']],
                        ['label' => 'Слайдер', 'url' => ['/slider/index']],
                        [
                            'label' => 'Модераторы',
                            'url' => ['/moderators/index'],
                            'visible' => Yii::$app->user->can('Admin'),
                        ],
                        [
                            'label' => 'RBAC',
                            'items' => [
                                ['label' => 'Админы', 'url' => ['/users/user/index']],
                                ['label' => 'Назначения', 'url' => ['/users/assignment/index']],
                                ['label' => 'Роли', 'url' => ['/users/role/index']],
                                ['label' => 'Разрешения', 'url' => ['/users/permission/index']],
                                ['label' => 'Маршруты', 'url' => ['/users/route/index']],
                                ['label' => 'Правила', 'url' => ['/users/rule/index']],
                            ],
                            'visible' => Yii::$app->user->can('Dev'),
                        ],
                    ],
                ]
        )
        ?>

    </section>

</aside>

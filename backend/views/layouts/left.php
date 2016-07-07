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
                    ],
                ]
        )
        ?>

    </section>

</aside>

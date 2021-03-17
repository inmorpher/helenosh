<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
</head>

<body>
    <header id="header" class="header header--show">
        <div class="container">
            <div class="header-logo">
                <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                <?php $image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
                <img src=" <?php echo $image[0]; ?>" class="header-logo__img" draggable="false" alt="Helen Osh - Natural cosmetics" tabindex="0" />
            </div>
            <!-- /.header__logo -->
            <nav class="main-menu">
                <ul class="main-menu__list">
                    <?php $locations = get_nav_menu_locations(); ?>
                    <?php $menu_id = $locations['main-menu']; ?>
                    <?php $menu_items = wp_get_nav_menu_items($menu_id); ?>
                    <?php foreach ($menu_items as $menu_item) : ?>

                        <li class="main-menu__item">
                            <a href="<?php echo $menu_item->url; ?>" class="main-menu__link"><?php echo $menu_item->title; ?></a>
                            <!-- /.main-menu__link -->
                        <?php endforeach; ?>
                </ul>
                <!-- /.main-menu__list -->
            </nav>
            <!-- /.nav main-menu -->
            <a href="#" class="action-btn action-btn--header">Записаться</a>
            <!-- /.action-btn action-btn--header -->
            <div class="menu-burger">
                <span></span>
            </div>
        </div>
        <!-- /.container -->
    </header>
    <!-- /#header.header -->
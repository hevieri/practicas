<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
    <style>
        body {
            background-color: <?php echo esc_attr(get_theme_mod('mi_tema_fondo', '#ffffff')); ?>;
            color: <?php echo esc_attr(get_theme_mod('color_tipografia', '#000000')); ?>;
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?>
        </nav>
    </header>

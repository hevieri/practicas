<?php
// Soporte para características del tema
function mi_tema_setup() {
    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');

    // Soporte para menús
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'mi-tema-profesional'),
    ));

    // Soporte para widgets
    register_sidebar(array(
        'name' => __('Barra lateral', 'mi-tema-profesional'),
        'id' => 'sidebar-1',
        'description' => __('Agrega widgets aquí.', 'mi-tema-profesional'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('after_setup_theme', 'mi_tema_setup');

// Cargar estilos y scripts
function mi_tema_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');

// Personalizador de WordPress
function mi_tema_customizer($wp_customize) {
    // Sección para colores
    $wp_customize->add_section('mi_tema_colores', array(
        'title'    => __('Colores del tema', 'mi-tema-profesional'),
        'priority' => 30,
    ));

    // Definir ajustes y controles de color
    $colores = array(
        'mi_tema_fondo'       => array('label' => __('Color de fondo', 'mi-tema-profesional'), 'default' => '#ffffff'),
        'mi_tema_enlaces'     => array('label' => __('Color de los enlaces', 'mi-tema-profesional'), 'default' => '#0073e6'),
        'mi_tema_btn_fondo'   => array('label' => __('Color de fondo del botón', 'mi-tema-profesional'), 'default' => '#0073e6'),
        'mi_tema_btn_borde'   => array('label' => __('Color del borde del botón', 'mi-tema-profesional'), 'default' => '#005bb5'),
    );

    foreach ($colores as $id => $info) {
        $wp_customize->add_setting($id, array(
            'default'           => $info['default'],
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $id, array(
            'label'    => $info['label'],
            'section'  => 'mi_tema_colores',
            'settings' => $id,
        )));
    }

    // Ajuste para color de tipografía
    $wp_customize->add_setting('color_tipografia', array(
        'default'   => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_tipografia_control', array(
        'label'    => __('Color de Tipografía', 'mi-tema-profesional'),
        'section'  => 'mi_tema_colores',
        'settings' => 'color_tipografia',
    )));
}
add_action('customize_register', 'mi_tema_customizer');

// Aplicar estilos personalizados desde el Personalizador
function mi_tema_custom_styles() {
    $fondo   = get_theme_mod('mi_tema_fondo', '#ffffff');
    $tipografia = get_theme_mod('color_tipografia', '#000000');
    $enlaces = get_theme_mod('mi_tema_enlaces', '#0073e6');
    $btn_fondo = get_theme_mod('mi_tema_btn_fondo', '#0073e6');
    $btn_borde = get_theme_mod('mi_tema_btn_borde', '#005bb5');
    ?>
    <style type="text/css">
        body {
            background-color: <?php echo esc_attr($fondo); ?>;
            color: <?php echo esc_attr($tipografia); ?>;
        }
        a {
            color: <?php echo esc_attr($enlaces); ?>;
        }
        a:hover {
            color: <?php echo esc_attr($enlaces); ?>;
            opacity: 0.8;
        }
        button, .btn {
            background-color: <?php echo esc_attr($btn_fondo); ?>;
            border: 2px solid <?php echo esc_attr($btn_borde); ?>;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        button:hover, .btn:hover {
            opacity: 0.8;
        }
    </style>
    <?php
}
add_action('wp_head', 'mi_tema_custom_styles');

?>

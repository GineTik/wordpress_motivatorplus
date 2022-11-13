<?php

function register_settings_to_site_identity($wp_customize) {
    $wp_customize->add_setting(
        'logotype_image',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'logotype_image',
        array(
            'label'      => __( 'Logotype', 'textdomain' ),
            'settings'   => 'logotype_image',
            'priority'   => 10,
            'section'    => 'title_tagline',
        )
    ));
}

add_action('customize_register', 'register_settings_to_site_identity');
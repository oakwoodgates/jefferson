<?php
/**
 * Kirki Advanced Customizer
 * This is a sample configuration file to demonstrate all fields & capabilities.
 * @package Kirki
 */

// Early exit if Kirki is not installed
if ( ! class_exists( 'Kirki' ) ) {
    return;
}

/**
 * Create panels using the Kirki API
 */
Kirki::add_panel( 'main_panel', array(
    'priority'    => 10,
    'title'       => __( 'My Title', 'textdomain' ),
    'description' => __( 'My Description', 'textdomain' ),
) );

/**
 * Create a config instance that will be used by fields added via the static methods.
 * For this example we'll be defining our options to be serialized in the db, under the 'kirki_demo' option.
 */
Kirki::add_config( 'kirki_demo', array(
    'options_type' => 'option',
    'option_name'  => 'kirki_demo'
) );



/**
 * Typography Section
 *
 */

/**
 * Create sections using the Kirki API
 */
Kirki::add_section( 'theme_typography', array(
    'priority'    => 10,
    'title'       => __( 'Typograpy', 'kirki' ),
    'description' => __( 'This panel contains controls that return true/false Controls', 'kirki' ),
    'panel'          => 'main_panel',
) );


Kirki::add_field( 'kirki_demo', array(
    'type'        => 'select2',
    'settings'    => 'body_font',
    'label'       => __( 'This is the label', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users.', 'kirki' ),
    'section'     => 'theme_typography',
        'default'     => 'option-1',
        'priority'    => 10,
        'choices'     => Kirki_Fonts::get_font_choices(),
        'output'      => array(
            array(
                'element'  => 'body p',
                'property' => 'font-family',
            )
        )
) );

Kirki::add_field( 'kirki_demo', array(
    'type'        => 'select2',
    'settings'    => 'heading_font',
    'label'       => __( 'This is the label', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users.', 'kirki' ),
    'section'     => 'theme_typography',
        'default'     => 'option-1',
        'priority'    => 10,
        'choices'     => Kirki_Fonts::get_font_choices(),
        'output'      => array(
            array(
                'element'  => 'h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6',
                'property' => 'font-family',
                'units'    => ' !important'

            )
        )
) );


/**
 * Typography Section
 */

/**
 * Create sections using the Kirki API
 */
Kirki::add_section( 'color_palette', array(
    'priority'    => 10,
    'title'       => __( 'Standard Colors', 'kirki' ),
    'description' => __( 'Basic colors used on most websites to identify success, info, warning, and error messages/actions, etc. While you can use your brand colors for "info" and "warning", it is usually recommended to use a green for "success" and a red for "danger/error".', 'kirki' ),
    'panel'          => 'main_panel',
) );

Kirki::add_field( 'kirki_demo', array(
    'type'        => 'radio',
    'setting'     => 'radio_demo',
    'label'       => __( 'This is the label', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => 'color_palette',
    'default'     => 'option-1',
    'priority'    => 10,
    'choices'     => array(
        'option-1' => __( 'Select from available', 'kirki' ),
        'option-2' => __( 'Create my own', 'kirki' ),
    ),
) );

Kirki::add_field( 'kirki_demo', array(
    'type'        => 'palette',
    'setting'     => 'default_palette',
    'label'       => __( 'Standard Colors', 'kirki' ),
    'description' => __( 'description', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => 'color_palette',
    'default'     => 'default',
    'priority'    => 10,
    'choices'     => array(
        'default' => array(
            '#5cb85c', //success - green
            '#5bc0de', //info - light blue
            '#f0ad4e', //warning - orange
            '#d9534f', //danger -red
        ),
        'pink' => array(
            '#fce4ec',
            '#f06292',
            '#e91e63',
            '#ad1457',
        ),
        'cyan' => array(
            '#e0f7fa',
            '#80deea',
            '#26c6da',
            '#0097a7',
        ),
    ),
    'required'  => array(
        array(
            'setting'  => 'radio_demo',
            'operator' => '==',
            'value'    => 'option-1',
        ),
    ),
) );

Kirki::add_field( 'kirki_demo', array(
    'type'        => 'color',
    'setting'     => 'color_success',
    'label'       => __( 'Success Color', 'kirki' ),
    'description' => __( '', 'kirki' ),
    'section'     => 'color_palette',
    'default'     => '#5cb85c',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'radio_demo',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );

Kirki::add_field( 'kirki_demo', array(
    'type'        => 'color',
    'setting'     => 'color_info',
    'label'       => __( 'Info Color', 'kirki' ),
    'description' => __( '', 'kirki' ),
    'section'     => 'color_palette',
    'default'     => '#5bc0de',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'radio_demo',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );

Kirki::add_field( 'kirki_demo', array(
    'type'        => 'color',
    'setting'     => 'color_warning',
    'label'       => __( 'Warning Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'section'     => 'color_palette',
    'default'     => '#f0ad4e',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'radio_demo',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );

Kirki::add_field( 'kirki_demo', array(
    'type'        => 'color',
    'setting'     => 'color_danger',
    'label'       => __( 'Danger/Error Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'section'     => 'color_palette',
    'default'     => '#d9534f',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'radio_demo',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );


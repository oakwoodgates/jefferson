<?php




/**
 * Typography Section
 *
 */

/**
 * Create sections using the Kirki API
 */
Kirki::add_section( 'theme_typography', array(
    'priority'    => 10,
    'title'       => __( 'Typography', 'kirki' ),
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



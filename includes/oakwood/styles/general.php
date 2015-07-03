<?php

// Define section
$section = 'general_options';

/**
 * Create sections using the Kirki API
 */


Kirki::add_section( $section, array(
    'priority'    => 10,
    'title'       => __( 'General Styles', 'kirki' ),
    'description' => __( '', 'kirki' ),
    'panel'          => 'main_panel',
) );

Kirki::add_field( '', array(
    'type'        => 'slider',
    'setting'     => 'border_radius',
    'label'       => __( 'Border Radius', 'kirki' ),
    'description' => __( 'Adds round corners to buttons, forms, etc', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => $section,
    'default'     => 0,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 0,
        'max'  => 20,
        'step' => 1
        ),
) );

Kirki::add_field( '', array(
    'type'        => 'slider',
    'setting'     => 'avatar_radius',
    'label'       => __( 'Avatar Roundness', 'kirki' ),
    'description' => __( 'Set to 0 (zero) for square avatars, 100 for circular, and somewhere between for rounded corners.', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => $section,
    'default'     => 0,
    'priority'    => 20,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1
        ),
) );

Kirki::add_field( '', array(
    'type'        => 'radio-image',
    'setting'     => 'button_style',
    'label'       => __( 'Buttons', 'kirki' ),
    'description' => __( 'Sets style for buttons', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => $section,
    'default'     => 'option-1',
    'priority'    => 30,
    'choices'     => array(
        'option-1' => admin_url() . '/images/align-left-2x.png',
        'option-2' => admin_url() . '/images/align-center-2x.png',
        'option-3' => admin_url() . '/images/align-right-2x.png',
    ),
) );


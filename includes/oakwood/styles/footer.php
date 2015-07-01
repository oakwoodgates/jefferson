<?php

Kirki::add_section( 'footer_styles', array(
    'priority'    => 10,
    'title'       => __( 'Footer Styles', 'kirki' ),
    'description' => __( '', 'kirki' ),
    'panel'          => 'main_panel',
) );



/*
Kirki::add_field( '', array(
    'type'        => 'radio-image',
    'setting'     => 'radio_image_demo',
    'label'       => __( 'Bottom Footer Bar', 'kirki' ),
    'description' => __( '1 column centered or 2 columns split?', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => 'footer_styles',
    'default'     => '',
    'priority'    => 10,
    'choices'     => array(
        'option-1' => admin_url() . '/images/align-left-2x.png',
        'option-2' => admin_url() . '/images/align-center-2x.png',
    ),
) );
*/
Kirki::add_field( '', array(
    'type'        => 'radio',
    'setting'     => 'radio_demo',
    'label'       => __( 'Bottom Footer Bar', 'kirki' ),
    'description' => __( '1 column centered or 2 columns split?', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => 'footer_styles',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
        '1' => __( 'Option 1', 'kirki' ),
        '2' => __( 'Option 2', 'kirki' ),
    ),
) );


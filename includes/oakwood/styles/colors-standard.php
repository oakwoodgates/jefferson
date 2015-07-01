<?php

/**
 * Create sections using the Kirki API
 */
Kirki::add_section( 'standard_colors', array(
    'priority'    => 10,
    'title'       => __( 'Standard Colors', 'kirki' ),
    'description' => __( 'Basic colors used on most websites to identify success, info, warning, and error messages/actions, etc. While you can use your brand colors for "info" and "warning", it is usually recommended to use a green for "success" and a red for "danger/error".', 'kirki' ),
    'panel'          => 'main_panel',
) );

Kirki::add_field( $config, array(
    'type'        => 'radio',
    'setting'     => 'standard_colors_option',
    'label'       => __( 'This is the label', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => 'standard_colors',
    'default'     => 'option-1',
    'priority'    => 10,
    'choices'     => array(
        'option-1' => __( 'Select from available', 'kirki' ),
        'option-2' => __( 'Create my own', 'kirki' ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'palette',
    'setting'     => 'standard_colors_palette',
    'label'       => __( 'Standard Colors', 'kirki' ),
    'description' => __( 'description', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => 'standard_colors',
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
            'setting'  => 'standard_colors_option',
            'operator' => '==',
            'value'    => 'option-1',
        ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'color',
    'setting'     => 'standard_colors_1',
    'label'       => __( 'Success Color', 'kirki' ),
    'description' => __( '', 'kirki' ),
    'section'     => 'standard_colors',
    'default'     => '#5cb85c',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'standard_colors_option',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'color',
    'setting'     => 'standard_colors_2',
    'label'       => __( 'Info Color', 'kirki' ),
    'description' => __( '', 'kirki' ),
    'section'     => 'standard_colors',
    'default'     => '#5bc0de',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'standard_colors_option',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'color',
    'setting'     => 'standard_colors_3',
    'label'       => __( 'Warning Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'section'     => 'standard_colors',
    'default'     => '#f0ad4e',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'standard_colors_option',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'color',
    'setting'     => 'standard_colors_4',
    'label'       => __( 'Danger/Error Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'section'     => 'standard_colors',
    'default'     => '#d9534f',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'standard_colors_option',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );


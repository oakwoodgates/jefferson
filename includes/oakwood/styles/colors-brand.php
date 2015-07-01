<?php
/**
 * Create sections using the Kirki API
 */
Kirki::add_section( 'brand_colors', array(
    'priority'    => 10,
    'title'       => __( 'Brand Colors', 'kirki' ),
    'description' => __( '', 'kirki' ),
    'panel'          => 'main_panel',
) );

Kirki::add_field( $config, array(
    'type'        => 'radio',
    'setting'     => 'brand_colors_option',
    'label'       => __( 'This is the label', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => 'brand_colors',
    'default'     => 'option-1',
    'priority'    => 10,
    'choices'     => array(
        'option-1' => __( 'Select from available', 'kirki' ),
        'option-2' => __( 'Create my own', 'kirki' ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'palette',
    'setting'     => 'brand_colors_palette',
    'label'       => __( 'Brand Colors', 'kirki' ),
    'description' => __( 'description', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => 'brand_colors',
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
            'setting'  => 'brand_colors_option',
            'operator' => '==',
            'value'    => 'option-1',
        ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'color',
    'setting'     => 'brand_colors_1',
    'label'       => __( 'Primary Color', 'kirki' ),
    'description' => __( '', 'kirki' ),
    'section'     => 'brand_colors',
    'default'     => '#5cb85c',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'brand_colors_option',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'color',
    'setting'     => 'brand_colors_2',
    'label'       => __( 'Accent Color', 'kirki' ),
    'description' => __( '', 'kirki' ),
    'section'     => 'brand_colors',
    'default'     => '#5bc0de',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'brand_colors_option',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'color',
    'setting'     => 'brand_colors_3',
    'label'       => __( 'Color 3', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'section'     => 'brand_colors',
    'default'     => '#f0ad4e',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'brand_colors_option',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );

Kirki::add_field( $config, array(
    'type'        => 'color',
    'setting'     => 'brand_colors_4',
    'label'       => __( 'Color 4', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'section'     => 'brand_colors',
    'default'     => '#d9534f',
    'priority'    => 10,
    'required'  => array(
        array(
            'setting'  => 'brand_colors_option',
            'operator' => '==',
            'value'    => 'option-2',
        ),
    ),
) );


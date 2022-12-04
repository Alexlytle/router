<?php

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Untitled Field Group', 'online-generator' ),
        'id'         => 'untitled',
        'post_types' => ['example'],
        'context'    => 'normal',
        'fields'     => [
            [
                'type' => 'text',
                'name' => esc_html__( 'Text', 'online-generator' ),
                'id'   => $prefix . 'text_kyt6vyv2ylc',
            ],
        ],
    ];

    return $meta_boxes;
}
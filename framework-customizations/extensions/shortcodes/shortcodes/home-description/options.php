<?php
 if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
$options = array(
   'description' => array(
        'type'  => 'wp-editor',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Описание', '{domain}'),
        'size' => 'large', // small, large
        'editor_height' => 400,
    )

);
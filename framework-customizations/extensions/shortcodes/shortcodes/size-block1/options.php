<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
            'title' => array(
                'type' => 'text',
                'label' => __('Название', '{domain}'),
            ),
            'image' => array(
                'type' => 'upload',
                'images_only' => true,
                'label' => __('Изображение', '{domain}'),
            ),



);
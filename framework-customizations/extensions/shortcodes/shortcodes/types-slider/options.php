<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'slides' => array(
        'type'  => 'addable-box',
        'label' => __('Слайдер', '{domain}'),
        'box-options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Ссылка', '{domain}'),
            ),
            'image' => array(
                'type' => 'upload',
                'images_only' => true,
                'label' => __('Изображение', '{domain}'),
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('Название', '{domain}'),
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => __('Описание', '{domain}'),
            ),

        ),
        'template' => '{{- title}}', // box title
        'box-controls' => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit' => 0, // limit the number of boxes that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
    )
);
<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(

    'title'     => array(
        'label' => __( 'Заголовок', 'unyson' ),
        'desc'  => __( 'Заголовок', 'unyson' ),
        'type'  => 'text',
        'value' => __( 'E-MAIL US', 'unyson' )
    ),
    'desc'     => array(
        'label' => __( 'Описание', 'unyson' ),
        'desc'  => __( 'Описание', 'unyson' ),
        'type'  => 'textarea',
        'value' => __( 'Send us an e-mail, using the form below or at contact@radiance.global', 'unyson' )
    ),

);
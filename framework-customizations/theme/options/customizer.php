<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'panel_site_settings' => array(
        'title'   => __( 'Настройки сайта', '{domain}' ),
        'options' => array(
            'logo'           => array(
                'type'        => 'upload',
                'label'       => __( 'Логоип', '{domain}' ),
                'images_only' => true,
            ),
        ),
    ),
    'panel_social'        => array(
        'title'   => __( 'Социальные сети', '{domain}' ),
        'options' => array(
            'fb_link'     => array(
                'type'  => 'text',
                'label' => __( 'Facebook', '{domain}' ),
                'value' => 'https://www.facebook.com/',
            ),
            'vk_link'     => array(
                'type'  => 'text',
                'label' => __( 'Вконтакте', '{domain}' ),
                'value' => 'https://vk.com/',
            ),

            'ok_link'     => array(
                'type'  => 'text',
                'label' => __( 'Одноклассники', '{domain}' ),
                'value' => 'http://ok.ru',
            ),
            'tw_link'     => array(
                'type'  => 'text',
                'label' => __( 'Twitter', '{domain}' ),
                'value' => 'http://twitter.com',
            ),
            'gp_link'     => array(
                'type'  => 'text',
                'label' => __( 'Google+', '{domain}' ),
                'value' => 'https://plus.google.com/',
            ),
        ),
    ),
);
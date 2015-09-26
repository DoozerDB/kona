<?php
/**
 * kona Theme Customizer.
 *
 * @package kona
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kona_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/*--- Секция для добавления основного изображения ---*/
	$wp_customize->add_section(
			'kona_general',
			array(
					'title' => __('Главное изображение', 'kona'),
					'priority' => 9,
			)
	);
	/*--- Настройки для загрузки изображения ---*/
	$wp_customize->add_setting(
			'main_image',
			array(
					'default-image' => '',
					'sanitize_callback' => 'esc_url_raw',

			)
	);
	/*--- Сам контрол для загрузки изображения ---*/
	$wp_customize->add_control(
			new WP_Customize_Image_Control(
					$wp_customize,
					'main_image',
					array(
						 'label'          => __( 'Загрузите изображение с логотипом', 'umex' ),
						 'type'           => 'image',
						 'section'        => 'kona_general',
						 'settings'       => 'main_image',
						 'priority' => 9,
					)
			)
	);

	/*--- секция для добавления телефонов ---*/
	$wp_customize->add_section(
			'kona_contact_phones',
			array(
					'title' => 'Контактные телефоны',
					'description' => '',
					'priority' => 35,
			)
	);

	/*--- телефоны ---*/
	/*--- начало говнокода. переписать в цикл ---*/
	$wp_customize->add_setting(
			'kona_phone0',
			array('default' => '(4822)XX-XX-XX')
	);

	$wp_customize->add_control(
			'kona_phone0',
			array(
					'label' => '',
					'section' => 'kona_contact_phones',
					'type' => 'text',
			)
	);

	$wp_customize->add_setting(
			'kona_phone1',
			array('default' => '(4822)XX-XX-XX')
	);

	$wp_customize->add_control(
			'kona_phone1',
			array(
					'label' => '',
					'section' => 'kona_contact_phones',
					'type' => 'text',
			)
	);
	$wp_customize->add_setting(
			'kona_phone2',
			array('default' => '(4822)XX-XX-XX')
	);

	$wp_customize->add_control(
			'kona_phone2',
			array(
					'label' => '',
					'section' => 'kona_contact_phones',
					'type' => 'text',
			)
	);

}
add_action( 'customize_register', 'kona_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kona_customize_preview_js() {
	wp_enqueue_script( 'kona_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'kona_customize_preview_js' );

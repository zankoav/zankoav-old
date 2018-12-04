<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 12/4/18
	 * Time: 6:56 PM
	 */

	add_action( 'cmb2_admin_init', 'common_metabox' );
	/**
	 * Hook in and register a metabox to handle a theme options page and adds a menu item.
	 */
	function common_metabox() {

		/**
		 * Registers options page menu item and form.
		 */
		$cmb_options = new_cmb2_box( array(
			'id'           => THEME_NAME . '_theme_options_page',
			'title'        => esc_html__( 'Настройки темы', THEME_NAME ),
			'object_types' => array( 'options-page' ),

			/*
			 * The following parameters are specific to the options-page box
			 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
			 */

			'option_key' => THEME_NAME . '_theme_options',
			// The option key and admin menu page slug.
			'icon_url'   => 'dashicons-palmtree',
			// Menu icon. Only applicable if 'parent_slug' is left empty.
			// 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
			// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
			// 'capability'      => 'manage_options', // Cap required to view options-page.
			// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
			// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
			// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
			// 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
			// 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
			// 'message_cb'      => 'yourprefix_options_page_message_callback',
			// 'tab_group'       => '', // Tab-group identifier, enables options page tab navigation.
			// 'tab_title'       => null, // Falls back to 'title' (above).
			// 'autoload'        => false, // Defaults to true, the options-page option will be autloaded.
		) );


		/**
		 * Options fields ids only need
		 * to be unique within this box.
		 * Prefix is not needed.
		 */

		$cmb_options->add_field(array(
			'name' => esc_html__('Логотип', THEME_NAME),
			'id' => 'logo',
			'type' => 'file'
		));


		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Время работы Ru', THEME_NAME ),
			'id'      => 'work_time_ru',
			'type'    => 'text',
			'default' => 'Понедельник-Суббота : 9:00-18:00',
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Время работы En', THEME_NAME ),
			'id'      => 'work_time_en',
			'type'    => 'text',
			'default' => 'Tusday-Monday : 9:00am-6:00pm',
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Контактный номер', THEME_NAME ),
			'id'      => 'phone',
			'type'    => 'text',
			'default' => '+375292228338',
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Почтовый ящик', THEME_NAME ),
			'id'      => 'email',
			'type'    => 'text_email',
			'default' => 'zankoav@gmail.com',
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Адрес Ru', THEME_NAME ),
			'id'      => 'address_ru',
			'type'    => 'text',
			'default' => 'г. Минск, Беларусь',
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Адрес En', THEME_NAME ),
			'id'      => 'address_en',
			'type'    => 'text',
			'default' => 'Minsk, Belarus',
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Facebook', THEME_NAME ),
			'id'      => 'facebook',
			'type'    => 'text_url',
			'default' => 'http://facebook.com',
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Instagramm', THEME_NAME ),
			'id'      => 'instagramm',
			'type'    => 'text_url',
			'default' => 'http://instagramm.com',
		) );


		//	Banners slider
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Баннер', THEME_NAME ),
			'id'   => 'banner_title',
			'type' => 'title'
		) );

		$group_field_id = $cmb_options->add_field( array(
			'id'      => 'slider_item',
			'type'    => 'group',
			//'description' => __( 'Generates reusable form entries', 'cmb2' ),
			// 'repeatable'  => false, // use false if you want non-repeatable group
			'options' => array(
				'group_title'   => __( 'Слайд {#}', THEME_NAME ),
				// since version 1.1.4, {#} gets replaced by row number
				'add_button'    => __( 'Добавить слайд', THEME_NAME ),
				'remove_button' => __( 'Удалить слайд', THEME_NAME ),
				//'sortable'      => true, // beta
				'closed'        => true,
				// true to have the groups closed by default
			),
		) );

		$cmb_options->add_group_field( $group_field_id, array(
			'name'    => esc_html__( 'Background picture', THEME_NAME ),
			'desc'    => esc_html__( 'реккомендуемы размер (1520x505)', THEME_NAME ),
			'id'      => 'item_picture',
			'type'    => 'file',
			'default' => 'http://via.placeholder.com/1520x505'
		) );

		$cmb_options->add_group_field( $group_field_id, array(
			'name' => esc_html__( 'Заголовок Ru', THEME_NAME ),
			'id'   => 'item_title_ru',
			'type' => 'text',
		) );

		$cmb_options->add_group_field( $group_field_id, array(
			'name' => esc_html__( 'Заголовок En', THEME_NAME ),
			'id'   => 'item_title_en',
			'type' => 'text',
		) );

		$cmb_options->add_group_field( $group_field_id, array(
			'name' => esc_html__( 'Подзаголовок Ru', THEME_NAME ),
			'id'   => 'item_text_ru',
			'type' => 'textarea',
		) );

		$cmb_options->add_group_field( $group_field_id, array(
			'name' => esc_html__( 'Подзаголовок En', THEME_NAME ),
			'id'   => 'item_text_en',
			'type' => 'textarea',
		) );

		$cmb_options->add_group_field( $group_field_id, array(
			'name' => esc_html__( 'Кнопка', THEME_NAME ),
			'id'   => 'item_url',
			'type' => 'text_url',
		) );


//		Partners slider
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Настройки партнеров', THEME_NAME ),
			'id'   => 'partners_title',
			'type' => 'title'
		) );

		$group_field_id = $cmb_options->add_field( array(
			'id'          => 'partners_group',
			'type'        => 'group',
			'description' => __( 'Логотипы парнеров', THEME_NAME ),
			// 'repeatable'  => false, // use false if you want non-repeatable group
			'options'     => array(
				'group_title'   => __( 'Логотип {#}', THEME_NAME ),
				// since version 1.1.4, {#} gets replaced by row number
				'add_button'    => __( 'Добавит Логотип', THEME_NAME ),
				'remove_button' => __( 'Удалить Логотип', THEME_NAME ),
				'sortable'      => true,
				// beta
				'closed'        => true,
				// 'closed'     => true, // true to have the groups closed by default
			),
		) );

		$cmb_options->add_group_field( $group_field_id, array(
			'name'        => 'Логотип',
			'description' => __( 'реккомендуемый размер 220x100', THEME_NAME ),
			'id'          => 'logo',
			'type'        => 'file',
			'default'     => 'http://via.placeholder.com/220x100'

		) );


//		Creative company
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Креативная компания', THEME_NAME ),
			'id'   => 'creative_title',
			'type' => 'title'
		) );

		$cmb_options->add_field( array(
			'name' => esc_html__( 'Заголовок Ru', THEME_NAME ),
			'id'   => 'creative_title_ru',
			'type' => 'text',
		) );
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Заголовок En', THEME_NAME ),
			'id'   => 'creative_title_en',
			'type' => 'text',
		) );

		$cmb_options->add_field( array(
			'name' => esc_html__( 'Подзаголовок №1 Ru', THEME_NAME ),
			'id'   => 'creative_description_1_ru',
			'type' => 'textarea',
		) );

		$cmb_options->add_field( array(
			'name' => esc_html__( 'Подзаголовок №1 En', THEME_NAME ),
			'id'   => 'creative_description_1_en',
			'type' => 'textarea',
		) );

		$cmb_options->add_field( array(
			'name' => esc_html__( 'Подзаголовок №1 Ru', THEME_NAME ),
			'id'   => 'creative_description_2_ru',
			'type' => 'textarea',
		) );

		$cmb_options->add_field( array(
			'name' => esc_html__( 'Подзаголовок №1 En', THEME_NAME ),
			'id'   => 'creative_description_2_en',
			'type' => 'textarea',
		) );

		$cmb_options->add_field( array(
			'name'        => esc_html__( 'Картинка', THEME_NAME ),
			'id'          => 'creative_picture',
			'description' => 'Рекомендуемый размер (360x540)',
			'default'     => 'http://via.placeholder.com/360x540',
			'type'        => 'file',
		) );
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Ссылка', THEME_NAME ),
			'id'   => 'creative_url',
			'type' => 'text_url',
		) );
	}
<?php

if ( ! function_exists( 'qi_addons_for_elementor_get_elementor_instance' ) ) {
	/**
	 * Function that return page builder module instance
	 */
	function qi_addons_for_elementor_get_elementor_instance() {
		return \Elementor\Plugin::instance();
	}
}

if ( ! function_exists( 'qi_addons_for_elementor_get_elementor_widgets_manager' ) ) {
	/**
	 * Function that return page builder widget module instance
	 */
	function qi_addons_for_elementor_get_elementor_widgets_manager() {
		return qi_addons_for_elementor_get_elementor_instance()->widgets_manager;
	}
}

if ( ! function_exists( 'qi_addons_for_elementor_load_elementor_widgets' ) ) {
	/**
	 * Function that include modules into page builder
	 */
	function qi_addons_for_elementor_load_elementor_widgets() {
		include_once QI_ADDONS_FOR_ELEMENTOR_PLUGINS_PATH . '/elementor/class-qiaddonsforelementor-elementor-widget-base.php';

		$widgets = array();

		foreach ( glob( QI_ADDONS_FOR_ELEMENTOR_SHORTCODES_PATH . '/*', GLOB_ONLYDIR ) as $shortcode ) {
			if ( ! qi_addons_for_elementor_is_widget_disabled( $shortcode ) ) {
				foreach ( glob( $shortcode . '/*-elementor.php' ) as $shortcode_load ) {
					$widgets[ basename( $shortcode_load ) ] = $shortcode_load;
				}
			}
		}

		foreach ( glob( QI_ADDONS_FOR_ELEMENTOR_INC_PATH . '/*/shortcodes/*', GLOB_ONLYDIR ) as $shortcode ) {
			if ( ! qi_addons_for_elementor_is_widget_disabled( $shortcode ) ) {
				foreach ( glob( $shortcode . '/*-elementor.php' ) as $shortcode_load ) {
					$widgets[ basename( $shortcode_load ) ] = $shortcode_load;
				}
			}
		}

		foreach ( glob( QI_ADDONS_FOR_ELEMENTOR_PLUGINS_PATH . '/*/shortcodes/*', GLOB_ONLYDIR ) as $shortcode ) {
			if ( ! qi_addons_for_elementor_is_widget_disabled( $shortcode ) ) {
				foreach ( glob( $shortcode . '/*-elementor.php' ) as $shortcode_load ) {
					$widgets[ basename( $shortcode_load ) ] = $shortcode_load;
				}
			}
		}

		if ( ! empty( $widgets ) ) {
			ksort( $widgets );

			foreach ( $widgets as $widget ) {
				include_once $widget;
			}
		}
	}

	add_action( 'elementor/widgets/widgets_registered', 'qi_addons_for_elementor_load_elementor_widgets' );
}

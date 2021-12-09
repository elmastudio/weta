<?php
/**
 * Demo Installer content, One Click Demo Import plugin required
 * See: https://wordpress.org/plugins/one-click-demo-import/
 *
 * @package Weta
 * @since Weta 1.0.5
 * @version 1.0
 */

function ocdi_import_files() {
	return array(

		array(
			'import_file_name'             => 'Demo Weta',
			'categories'                   => array( 'WooCommerce' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/demo/weta-content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/demo/weta-widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'assets/demo/weta-customizer.dat',
			'import_notice'              	=> esc_html__( 'Make sure you have the WooCommerce plugin installed, before importing this demo!', 'weta' ),
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );

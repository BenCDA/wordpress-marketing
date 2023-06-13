<?php
class digitalmarketingagency_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof digitalmarketingagency_import_dummy_data ) ) {
			self::$instance = new digitalmarketingagency_import_dummy_data;
			self::$instance->digitalmarketingagency_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function digitalmarketingagency_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'digitalmarketingagency_import_customize_scripts' ), 0 );

	}
	
	

	public function digitalmarketingagency_import_customize_scripts() {

	wp_enqueue_script( 'digitalmarketingagency-import-customizer-js', DIGITALMARKETINGAGENCY_PARENT_INC_URI . '/customizer/customizer-notify/js/digitalmarketingagency-import-customizer-options.js', array( 'customize-controls' ) );
	}
}

$digitalmarketingagency_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
digitalmarketingagency_import_dummy_data::init( apply_filters( 'digitalmarketingagency_import_customizer', $digitalmarketingagency_import_customizers ) );
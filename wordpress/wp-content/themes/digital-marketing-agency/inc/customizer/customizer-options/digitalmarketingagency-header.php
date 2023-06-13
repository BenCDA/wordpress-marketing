<?php
function digitalmarketingagency_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'digital-marketing-agency'),
		) 
	);

	
	/*=========================================
	Digital Marketing Agency Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','digital-marketing-agency'),
			'panel'  		=> 'header_section',
		)
    );


	// topheader Logo Width
    $wp_customize->add_setting('topheader_logowidth',array(
        'default' => 100,
        'sanitize_callback' => 'digitalmarketingagency_sanitize_float'
    ));
    $wp_customize->add_control(new digitalmarketingagency_Custom_Control( $wp_customize, 'topheader_logowidth',array(
	    'label' => __('Logo Width','digital-marketing-agency'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));

    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#000', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','digital-marketing-agency'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	
	// /*=========================================
	// Sticky Header
	// =========================================*/	
	// $wp_customize->add_section(
 //        'sticky_header_set',
 //        array(
 //        	'priority'      => 4,
 //            'title' 		=> __('Sticky Header','digital-marketing-agency'),
	// 		'panel'  		=> 'header_section',
	// 	)
 //    );
	
	// // Heading
	// $wp_customize->add_setting(
	// 	'sticky_head'
	// 		,array(
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'digitalmarketingagency_sanitize_text',
	// 		'priority' => 1,
	// 	)
	// );

	// $wp_customize->add_control(
	// 'sticky_head',
	// 	array(
	// 		'type' => 'hidden',
	// 		'label' => __('Sticky Header','digital-marketing-agency'),
	// 		'section' => 'sticky_header_set',
	// 	)
	// );



	// $wp_customize->add_setting( 
	// 	'hide_show_sticky' , 
	// 		array(
	// 		'default' => '1',
	// 		'capability'     => 'edit_theme_options',
	// 		'sanitize_callback' => 'digitalmarketingagency_sanitize_checkbox',
	// 		'priority' => 2,
	// 	) 
	// );

	
	// $wp_customize->add_control(
	// 'hide_show_sticky', 
	// 	array(
	// 		'label'	      => esc_html__( 'Hide/Show', 'digital-marketing-agency' ),
	// 		'section'     => 'sticky_header_set',
	// 		'type'        => 'checkbox'
	// 	) 
	// );		



	// // Heading
	// $wp_customize->add_setting(
	// 	'sticky_head1'
	// 		,array(
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'digitalmarketingagency_sanitize_text',
	// 		'priority' => 3,
	// 	)
	// );

	// $wp_customize->add_control(
	// 'sticky_head1',
	// 	array(
	// 		'type' => 'hidden',
	// 		'label' => __('Color','digital-marketing-agency'),
	// 		'section' => 'sticky_header_set',
	// 	)
	// );

	// // topheader Sticky Background Color
	// $topheaderbgcolor = esc_html__('#e9e9e9', 'digital-marketing-agency' );
	// $wp_customize->add_setting(
 //    	'topheader_btnbgcolor',
 //    	array(
	// 		'default' => $topheaderbgcolor,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 4,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'topheader_btnbgcolor',
	// 	array(
	// 	    'label'   		=> __('Sticky Header BG Color','digital-marketing-agency'),
	// 	    'section'		=> 'sticky_header_set',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );

	

	/*=========================================
	Digital Marketing Agency header
	=========================================*/

	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','digital-marketing-agency'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('digitalmarketingagency_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new digitalmarketingagency_Reset_Custom_Control($wp_customize, 'digitalmarketingagency_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'digital-marketing-agency'),
	  'description' => 'digitalmarketingagency_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('digitalmarketingagency_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new digitalmarketingagency_Tab_Control($wp_customize, 'digitalmarketingagency_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
      	array(
	 		'name' => esc_html__('General', 'digital-marketing-agency'),
				'icon' => 'dashicons dashicons-welcome-write-blog',
	        'fields' => array(
	        	'hide_show_sticky',
	        	'topheader_btntxt',
	        	'topheader_btnlink'
	        ),
	        'active' => true,
     	),
      	array(
            'name' => esc_html__('Style', 'digital-marketing-agency'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'topheader_stickybgcolor',
            	'topheader_menucolor',
            	'topheader_menuhovercolor',
            	'topheader_submenucolor',
            	'topheader_submenubgcolor',
            	'topheader_submenuhovercolor',
            	'topheader_submenubghovercolor',
            	'topheader_btnlinktextcolor',
            	'topheader_btngradientcolor1',
            	'topheader_btngradientcolor2',
            	'topheader_btnhovercolor'
            ),
     	)
    	),
	)));



	// General

    // sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'digitalmarketingagency_switch_sanitization'
   	) );
   	$wp_customize->add_control( new digitalmarketingagency_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','digital-marketing-agency' ),
        'section' => 'top_header'
   	)));



	// topheader Button Text
	$topheaderbtntxt = esc_html__('Contact Us', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_btntxt',
    	array(
			'default' => $topheaderbtntxt,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntxt',
		array(
		    'label'   		=> __('Button Text','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader Button Link
	$topheaderbtnlink = esc_html__('#', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_btnlink',
    	array(
			'default' => $topheaderbtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btnlink',
		array(
		    'label'   		=> __('Button Link','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	




	// style
	// // topheader bg color
	// $topheaderbgcolor = esc_html__('#f4f2f3', 'digital-marketing-agency' );
	// $wp_customize->add_setting(
 //    	'topheader_bgcolor',
 //    	array(
	// 		'default' => $topheaderbgcolor,
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'wp_kses_post',
	// 		'priority'      => 4,
	// 	)
	// );	

	// $wp_customize->add_control( 
	// 	'topheader_bgcolor',
	// 	array(
	// 	    'label'   		=> __('Header BG Color','digital-marketing-agency'),
	// 	    'section'		=> 'top_header',
	// 		'type' 			=> 'color',
	// 		'transport'         => $selective_refresh,
	// 	)  
	// );


	// topheader sticky bg color
	$topheaderstickybgcolor = esc_html__('#transparent', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_stickybgcolor',
    	array(
			'default' => $topheaderstickybgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 9,
		)
	);	

	$wp_customize->add_control( 
		'topheader_stickybgcolor',
		array(
		    'label'   		=> __('Sticky Header BG Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader menu color
	$topheadermenucolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_menucolor',
    	array(
			'default' => $topheadermenucolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_menucolor',
		array(
		    'label'   		=> __('Menu Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader menuhover color
	$topheadermenuhovercolor = esc_html__('#744af6', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_menuhovercolor',
    	array(
			'default' => $topheadermenuhovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_menuhovercolor',
		array(
		    'label'   		=> __('Active Menu & Hover','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader submenu color
	$topheadersubmenucolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_submenucolor',
    	array(
			'default' => $topheadersubmenucolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_submenucolor',
		array(
		    'label'   		=> __('Submenu Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader submenubg color
	$topheadersubmenubgcolor = esc_html__('#5267f4', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_submenubgcolor',
    	array(
			'default' => $topheadersubmenubgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_submenubgcolor',
		array(
		    'label'   		=> __('Submenu BG Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader submenuhover color
	$topheadersubmenuhovercolor = esc_html__('#5267f4', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_submenuhovercolor',
    	array(
			'default' => $topheadersubmenuhovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_submenuhovercolor',
		array(
		    'label'   		=> __('Submenu Hover Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader submenubghover color
	$topheadersubmenubghovercolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_submenubghovercolor',
    	array(
			'default' => $topheadersubmenubghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_submenubghovercolor',
		array(
		    'label'   		=> __('Submenu BG Hover Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader Button Text Color
	$topheaderbtnlinktextcolor = esc_html__('#f6f7f4', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_btnlinktextcolor',
    	array(
			'default' => $topheaderbtnlinktextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btnlinktextcolor',
		array(
		    'label'   		=> __('Button Text Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader Button gradient color 1
	$topheaderbtngradientcolor1 = esc_html__('#783afd', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_btngradientcolor1',
    	array(
			'default' => $topheaderbtngradientcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btngradientcolor1',
		array(
		    'label'   		=> __('Button Gradient Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	

	// topheader Button gradient color 2
	$topheaderbtngradientcolor2 = esc_html__('#5267f4', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_btngradientcolor2',
    	array(
			'default' => $topheaderbtngradientcolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btngradientcolor2',
		array(
		    'label'   		=> __('Button Gradient Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader Button hover color
	$topheaderbtnhovercolor = esc_html__('#9151c3', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'topheader_btnhovercolor',
    	array(
			'default' => $topheaderbtnhovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btnhovercolor',
		array(
		    'label'   		=> __('Button Hover Color','digital-marketing-agency'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	


	



	

}
add_action( 'customize_register', 'digitalmarketingagency_header_settings' );






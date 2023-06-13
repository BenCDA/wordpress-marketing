<?php
function digitalmarketingagency_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
			'digitalmarketingagency_frontpage_sections', array(
				'priority' => 32,
				'title' => esc_html__( 'Frontpage Sections', 'digital-marketing-agency' ),
			)
		);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'digital-marketing-agency' ),
			'priority' => 13,
			'panel' => 'digitalmarketingagency_frontpage_sections',
		)
	);


	$wp_customize->add_setting('digitalmarketingagency_reset_slider_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new digitalmarketingagency_Reset_Custom_Control($wp_customize, 'digitalmarketingagency_reset_slider_settings',array(
	  'type' => 'reset_control',
	  'priority' => 1,
	  'label' => __('Reset Slider Settings', 'digital-marketing-agency'),
	  'description' => 'digitalmarketingagency_slider_reset_settings',
	  'section' => 'slider_setting'
	)));
	

	$wp_customize->add_setting('digitalmarketingagency_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new digitalmarketingagency_Tab_Control($wp_customize, 'digitalmarketingagency_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'digital-marketing-agency'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'digital-marketing-agency'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'slider_leftboxbgcolor1',
            	'slider_leftboxbgcolor2',
            	'slider_titlecolor',
            	'slider_descriptioncolor',
            	'slider_buttonbgcolor',
            	'slider_buttontextcolor',
            	'slider_buttonbghovercolor',
            	'slider_buttontexthovercolor',
            	'slider_arrowscolor',
            	'slider_arrowshovercolor',
            	'slider_arrowsbgcolor',
            	'slider_arrowsbghovercolor'

            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'digital-marketing-agency'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'digitalmarketingagency_slider_section_width'
	        ),
     	)
	    
    	),
	))); 
	
	
	// General
	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Style
	// slider leftbox bg color 1
	$sliderleftboxbgcolor1 = esc_html__('#6d48f8', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_leftboxbgcolor1',
    	array(
			'default' => $sliderleftboxbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_leftboxbgcolor1',
		array(
		    'label'   		=> __('Left Box BG Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider leftbox bg color 2
	$sliderleftboxbgcolor2 = esc_html__('#9151c3', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_leftboxbgcolor2',
    	array(
			'default' => $sliderleftboxbgcolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_leftboxbgcolor2',
		array(
		    'label'   		=> __('Left Box BG Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider title  color
	$slidertitlecolor = esc_html__('#fffeff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description  color
	$sliderdescriptioncolor = esc_html__('#e1e2f7', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider buttonbg  color
	$sliderbuttonbgcolor = esc_html__('#fdfdfd', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_buttonbgcolor',
    	array(
			'default' => $sliderbuttonbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_buttonbgcolor',
		array(
		    'label'   		=> __('Button BG Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider buttontext  color
	$sliderbuttontextcolor = esc_html__('#8553b6', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_buttontextcolor',
    	array(
			'default' => $sliderbuttontextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_buttontextcolor',
		array(
		    'label'   		=> __('Button Text Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider buttonbghover  color
	$sliderbuttonbghovercolor = esc_html__('#000', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_buttonbghovercolor',
    	array(
			'default' => $sliderbuttonbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_buttonbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider buttontexthover  color
	$sliderbuttontexthovercolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_buttontexthovercolor',
    	array(
			'default' => $sliderbuttontexthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_buttontexthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider arrows  color
	$sliderarrowscolor = esc_html__('#000', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_arrowscolor',
    	array(
			'default' => $sliderarrowscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_arrowscolor',
		array(
		    'label'   		=> __('Arrows Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider arrowshover  color
	$sliderarrowshovercolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_arrowshovercolor',
    	array(
			'default' => $sliderarrowshovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_arrowshovercolor',
		array(
		    'label'   		=> __('Arrows Hover Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider arrowsbg  color
	$sliderarrowsbgcolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_arrowsbgcolor',
    	array(
			'default' => $sliderarrowsbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_arrowsbgcolor',
		array(
		    'label'   		=> __('Arrows BG Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider arrowsbghover  color
	$sliderarrowsbghovercolor = esc_html__('#000', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'slider_arrowsbghovercolor',
    	array(
			'default' => $sliderarrowsbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider_arrowsbghovercolor',
		array(
		    'label'   		=> __('Arrows BG Hover Color','digital-marketing-agency'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// layout setting

	$wp_customize->add_setting('digitalmarketingagency_slider_section_width',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'digitalmarketingagency_sanitize_choices',
    ));
    $wp_customize->add_control('digitalmarketingagency_slider_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','digital-marketing-agency'),
        'choices' => array (
            'Box Width' => __('Box Width','digital-marketing-agency'),
            'Full Width' => __('Full Width','digital-marketing-agency')
        ),
        'section' => 'slider_setting',
    ));


	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'Service_setting', array(
			'title' => esc_html__( 'Service Section', 'digital-marketing-agency' ),
			'priority' => 15,
			'panel' => 'digitalmarketingagency_frontpage_sections',
		)
	);


	$wp_customize->add_setting('digitalmarketingagency_reset_Service_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new digitalmarketingagency_Reset_Custom_Control($wp_customize, 'digitalmarketingagency_reset_Service_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Service Settings', 'digital-marketing-agency'),
	  'description' => 'digitalmarketingagency_Service_reset_settings',
	  'section' => 'Service_setting'
	)));
	

	$wp_customize->add_setting('digitalmarketingagency_Service_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new digitalmarketingagency_Tab_Control($wp_customize, 'digitalmarketingagency_Service_tabs', array(
	   'section' => 'Service_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'digital-marketing-agency'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'service_disable_section',
            	'Service1',
            	'service_icon1',
            	'Service2',
            	'service_icon2',
            	'Service3',
            	'service_icon3',
            	'Service4',
            	'service_icon4',
            	'Service5',
            	'service_icon5',
            	'Service6',
            	'service_icon6'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'digital-marketing-agency'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'service_titlecolor',
            	'service_descriptioncolor',
            	'service_boxbgcolor',
            	'service_iconbgicon1color',
            	'service_iconbg2color',
            	'service_iconbghovercolor',
            	'service_iconcolor',
            	'service_boxtitlecolorcolor',
            	'service_boxdescriptioncolorcolor',
            	'service_buttonbgcolor',
            	'service_buttontextcolor',
            	'service_buttonhovercolor',
            	'service_buttontexthovercolor',
            	'service_buttoniconcolor',
            	'service_buttoniconbgcolor'

            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'digital-marketing-agency'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'digitalmarketingagency_service_section_width',
	            'digitalmarketingagency_service_padding',
	            'digitalmarketingagency_service_top_padding',
	            'digitalmarketingagency_service_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show service section
	$wp_customize->add_setting(
        'service_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    $wp_customize->add_control(
        new digitalmarketingagency_Toggle_Switch_Custom_Control(
            $wp_customize,
            'service_disable_section',
            array(
                'settings'      => 'service_disable_section',
                'section'       => 'Service_setting',
                'label'         => __( 'Disable Section', 'digital-marketing-agency' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'digital-marketing-agency' ),
                    'off' => __( 'No', 'digital-marketing-agency' )
                ),
            )
        )
    );

	// Service 1
	$wp_customize->add_setting( 
    	'Service1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Service1',
		array(
		    'label'   		=> __('Service 1','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// service icon 1
	$serviceicon1 = esc_html__('fa fa-users', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_icon1',
    	array(
			'default' => $serviceicon1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'service_icon1',
		array(
		    'label'   		=> __('Service Icon 1','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 2
	$wp_customize->add_setting(
    	'Service2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'Service2',
		array(
		    'label'   		=> __('Service 2','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// service icon 2
	$serviceicon2 = esc_html__('fa fa-users', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_icon2',
    	array(
			'default' => $serviceicon2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_icon2',
		array(
		    'label'   		=> __('Service Icon 2','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 3
	$wp_customize->add_setting(
    	'Service3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Service3',
		array(
		    'label'   		=> __('Service 3','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// service icon 3
	$serviceicon3 = esc_html__('fa fa-users', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_icon3',
    	array(
			'default' => $serviceicon3,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'service_icon3',
		array(
		    'label'   		=> __('Service Icon 3','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 4
	$wp_customize->add_setting(
    	'Service4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'Service4',
		array(
		    'label'   		=> __('Service 4','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// service icon 4
	$serviceicon4 = esc_html__('fa fa-users', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_icon4',
    	array(
			'default' => $serviceicon4,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'service_icon4',
		array(
		    'label'   		=> __('Service Icon 4','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	




	// Service 5
	$wp_customize->add_setting(
    	'Service5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service5',
		array(
		    'label'   		=> __('Service 5','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// service icon 5
	$serviceicon5 = esc_html__('fa fa-users', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_icon5',
    	array(
			'default' => $serviceicon5,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'service_icon5',
		array(
		    'label'   		=> __('Service Icon 5','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 6
	$wp_customize->add_setting(
    	'Service6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service6',
		array(
		    'label'   		=> __('Service 6','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


		// service icon 6
	$serviceicon6 = esc_html__('fa fa-users', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_icon6',
    	array(
			'default' => $serviceicon6,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 12,
		)
	);	

	$wp_customize->add_control( 
		'service_icon6',
		array(
		    'label'   		=> __('Service Icon 6','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// layout
	// service titlecolor color
	$servicetitlecolor = esc_html__('#6a49fa', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_titlecolor',
    	array(
			'default' => $servicetitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_titlecolor',
		array(
		    'label'   		=> __('Heading Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service descriptioncolor color
	$servicedescriptioncolor = esc_html__('#0a0133', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_descriptioncolor',
    	array(
			'default' => $servicedescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_descriptioncolor',
		array(
		    'label'   		=> __('Sub Heading Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxbgcolor color
	$serviceboxbgcolor = esc_html__('#fdfdfd', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_boxbgcolor',
    	array(
			'default' => $serviceboxbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxbgcolor',
		array(
		    'label'   		=> __('Box BG Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service iconbgicon1color color
	$serviceiconbgicon1color = esc_html__('#6d46f7', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_iconbgicon1color',
    	array(
			'default' => $serviceiconbgicon1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_iconbgicon1color',
		array(
		    'label'   		=> __('Icon BG Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service iconbgicon2color color
	$serviceiconbg2color = esc_html__('#8b51bf', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_iconbg2color',
    	array(
			'default' => $serviceiconbg2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_iconbg2color',
		array(
		    'label'   		=> __('Icon BG Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service iconbghover color
	$serviceiconbghovercolor = esc_html__('#000', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_iconbghovercolor',
    	array(
			'default' => $serviceiconbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_iconbghovercolor',
		array(
		    'label'   		=> __('Icon BG Hover Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service icon color
	$serviceiconcolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_iconcolor',
    	array(
			'default' => $serviceiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_iconcolor',
		array(
		    'label'   		=> __('Icon Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service boxtitlecolor color
	$serviceboxtitlecolorcolor = esc_html__('#000', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_boxtitlecolorcolor',
    	array(
			'default' => $serviceboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxdescriptioncolor color
	$serviceboxdescriptioncolorcolor = esc_html__('#c8c6c7', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_boxdescriptioncolorcolor',
    	array(
			'default' => $serviceboxdescriptioncolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxdescriptioncolorcolor',
		array(
		    'label'   		=> __('Description Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service buttonbg color
	$servicebuttonbgcolor = esc_html__('#f5f6f8', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_buttonbgcolor',
    	array(
			'default' => $servicebuttonbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttonbgcolor',
		array(
		    'label'   		=> __('Button BG Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service buttontext color
	$servicebuttontextcolor = esc_html__('#050608', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_buttontextcolor',
    	array(
			'default' => $servicebuttontextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttontextcolor',
		array(
		    'label'   		=> __('Button Text Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service buttonhover color
	$servicebuttonhovercolor = esc_html__('#753cfd', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_buttonhovercolor',
    	array(
			'default' => $servicebuttonhovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttonhovercolor',
		array(
		    'label'   		=> __('Button Hover Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service buttontexthover color
	$servicebuttontexthovercolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_buttontexthovercolor',
    	array(
			'default' => $servicebuttontexthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttontexthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service buttonicon color
	$servicebuttoniconcolor = esc_html__('#d8dbfe', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_buttoniconcolor',
    	array(
			'default' => $servicebuttoniconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttoniconcolor',
		array(
		    'label'   		=> __('Button Icon Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service buttoniconbg color
	$servicebuttoniconbgcolor = esc_html__('#753cfd', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'service_buttoniconbgcolor',
    	array(
			'default' => $servicebuttoniconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttoniconbgcolor',
		array(
		    'label'   		=> __('Button Icon BG Color','digital-marketing-agency'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// layout setting

	$wp_customize->add_setting('digitalmarketingagency_service_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'digitalmarketingagency_sanitize_choices',
    ));
    $wp_customize->add_control('digitalmarketingagency_service_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','digital-marketing-agency'),
        'choices' => array (
            'Box Width' => __('Box Width','digital-marketing-agency'),
            'Full Width' => __('Full Width','digital-marketing-agency')
        ),
        'section' => 'Service_setting',
    ));


    // service section padding 
	$wp_customize->add_setting('digitalmarketingagency_service_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('digitalmarketingagency_service_padding',array(
      'label' => __('Section Padding','digital-marketing-agency'),
      'section' => 'Service_setting'
    ));

    $wp_customize->add_setting('digitalmarketingagency_service_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('digitalmarketingagency_service_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','digital-marketing-agency'),
	    'section' => 'Service_setting',
    ));

 	$wp_customize->add_setting('digitalmarketingagency_service_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('digitalmarketingagency_service_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','digital-marketing-agency'),
	    'section' => 'Service_setting',
    ));



	/*=========================================
	Blog Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'digital-marketing-agency' ),
			'priority' => 15,
			'panel' => 'digitalmarketingagency_frontpage_sections',
		)
	);


	$wp_customize->add_setting('digitalmarketingagency_reset_blog_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));

	$wp_customize->add_control(new digitalmarketingagency_Reset_Custom_Control($wp_customize, 'digitalmarketingagency_reset_blog_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Blog Settings', 'digital-marketing-agency'),
	  'description' => 'digitalmarketingagency_blog_reset_settings',
	  'section' => 'blog_setting'
	)));



	$wp_customize->add_setting('digitalmarketingagency_blog_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new digitalmarketingagency_Tab_Control($wp_customize, 'digitalmarketingagency_blog_tabs', array(
	   'section' => 'blog_setting',
	   'priority' => 1,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'digital-marketing-agency'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'blog_disable_section',
            	'blog_section_heading',
            	'blog_section_subheading'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'digital-marketing-agency'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'blog_headingcolor',
            	'blog_subheadingcolor',
            	'blog_subboxbgcolor',
            	'blog_datecolor',
            	'blog_datebg1color',
            	'blog_datebg2color',
            	'blog_titlecolor',
            	'blog_titlehovercolor',
            	'blog_descriptioncolor',
            	'blog_commentcolor',
            	'blog_commentsbordercolor'

            ),
         ),
      	array(
            'name' => esc_html__('Layout', 'digital-marketing-agency'),
            'icon' => 'dashicons dashicons-layout',
            'fields' => array(
                'digitalmarketingagency_blog_section_width',
                'digitalmarketingagency_blog_padding',
                'digitalmarketingagency_blog_top_padding',
                'digitalmarketingagency_blog_bottom_padding'

            ),
         )
	    
    	),
	))); 


	// General tab


	// hide show blog section
	$wp_customize->add_setting(
        'blog_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    $wp_customize->add_control(
        new digitalmarketingagency_Toggle_Switch_Custom_Control(
            $wp_customize,
            'blog_disable_section',
            array(
                'settings'      => 'blog_disable_section',
                'section'       => 'blog_setting',
                'label'         => __( 'Disable Section', 'digital-marketing-agency' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'digital-marketing-agency' ),
                    'off' => __( 'No', 'digital-marketing-agency' )
                ),
            )
        )
    );


	// section heading 
	$blogsectionheading = esc_html__('NEWS & BLOG', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_section_heading',
    	array(
			'default' => $blogsectionheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'blog_section_heading',
		array(
		    'label'   		=> __('Heading','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// section subheading 
	$blogsectionsubheading = esc_html__('Read Our Latest post', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_section_subheading',
    	array(
			'default' => $blogsectionsubheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'blog_section_subheading',
		array(
		    'label'   		=> __('Sub Heading','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// style

	// blog section heading color 
	$blogsecheadingcolor = esc_html__('#6a49fa', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_headingcolor',
    	array(
			'default' => $blogsecheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_headingcolor',
		array(
		    'label'   		=> __('Heading Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog section heading color 
	$blogsecsubheadingcolor = esc_html__('#0a0133', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_subheadingcolor',
    	array(
			'default' => $blogsecsubheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_subheadingcolor',
		array(
		    'label'   		=> __('Sub Heading Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog section boxbg color 
	$blogsecsubboxbgcolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_subboxbgcolor',
    	array(
			'default' => $blogsecsubboxbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_subboxbgcolor',
		array(
		    'label'   		=> __('Box BG Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog section date color 
	$blogdatecolor = esc_html__('#f3fefa', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_datecolor',
    	array(
			'default' => $blogdatecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_datecolor',
		array(
		    'label'   		=> __('Date Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog section datebg1 color 
	$blogdatebg1color = esc_html__('#7b3dff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_datebg1color',
    	array(
			'default' => $blogdatebg1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_datebg1color',
		array(
		    'label'   		=> __('Date BG Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog section datebg2 color 
	$blogdatebg2color = esc_html__('#5267f4', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_datebg2color',
    	array(
			'default' => $blogdatebg2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_datebg2color',
		array(
		    'label'   		=> __('Date BG Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog section title color 
	$blogtitlecolor = esc_html__('#000', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_titlecolor',
    	array(
			'default' => $blogtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_titlecolor',
		array(
		    'label'   		=> __('Title Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog section titlehover color 
	$blogtitlehovercolor = esc_html__('#5267f4', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_titlehovercolor',
    	array(
			'default' => $blogtitlehovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_titlehovercolor',
		array(
		    'label'   		=> __('Title Hover Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog section description color 
	$blogdescriptioncolor = esc_html__('#636365', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_descriptioncolor',
    	array(
			'default' => $blogdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog section comment color 
	$blogcommentcolor = esc_html__('#4a4a4c', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_commentcolor',
    	array(
			'default' => $blogcommentcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_commentcolor',
		array(
		    'label'   		=> __('Comments Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog section commentsborder color 
	$blogcommentsbordercolor = esc_html__('#783bfb', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'blog_commentsbordercolor',
    	array(
			'default' => $blogcommentsbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'blog_commentsbordercolor',
		array(
		    'label'   		=> __('Comments Border Color','digital-marketing-agency'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting

	$wp_customize->add_setting('digitalmarketingagency_blog_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'digitalmarketingagency_sanitize_choices',
    ));
    $wp_customize->add_control('digitalmarketingagency_blog_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','digital-marketing-agency'),
        'choices' => array (
            'Box Width' => __('Box Width','digital-marketing-agency'),
            'Full Width' => __('Full Width','digital-marketing-agency')
        ),
        'section' => 'blog_setting',
    ));


    // blog section padding 
	$wp_customize->add_setting('digitalmarketingagency_blog_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('digitalmarketingagency_blog_padding',array(
      'label' => __('Section Padding','digital-marketing-agency'),
      'section' => 'blog_setting'
    ));

    $wp_customize->add_setting('digitalmarketingagency_blog_top_padding',array(
        'default' => '4',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('digitalmarketingagency_blog_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','digital-marketing-agency'),
	    'section' => 'blog_setting',
    ));

 	$wp_customize->add_setting('digitalmarketingagency_blog_bottom_padding',array(
        'default' => '1',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('digitalmarketingagency_blog_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','digital-marketing-agency'),
	    'section' => 'blog_setting',
    ));



	$wp_customize->register_control_type('digitalmarketingagency_Tab_Control');

}

add_action( 'customize_register', 'digitalmarketingagency_blog_setting' );

// service selective refresh
function digitalmarketingagency_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'digitalmarketingagency_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'digitalmarketingagency_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'digitalmarketingagency_blog_description_render_callback',
	
	) );


	
}

add_action( 'customize_register', 'digitalmarketingagency_blog_section_partials' );

// blog_title
function digitalmarketingagency_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function digitalmarketingagency_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function digitalmarketingagency_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}
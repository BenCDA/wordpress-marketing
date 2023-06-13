<?php
function digitalmarketingagency_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'digital-marketing-agency'),
		) 
	);
	
	// Footer Top // 
	$wp_customize->add_section(
        'footer_background',
        array(
            'title' 		=> __('Footer Top','digital-marketing-agency'),
			'panel'  		=> 'footer_section',
			'priority'      => 1,
		)
    );
	

	// Background color // 
    
	// footer bg color 
	$footerbg = esc_html__('#5267f4', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_bg',
    	array(
			'default' => $footerbg,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 13,
		)
	);	

	$wp_customize->add_control( 
		'footer_bg',
		array(
		    'label'   		=> __('BG Color','digital-marketing-agency'),
		    'section'		=> 'footer_background',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer heading color 
	$footerheadingcolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_heading_color',
    	array(
			'default' => $footerheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 13,
		)
	);	

	$wp_customize->add_control( 
		'footer_heading_color',
		array(
		    'label'   		=> __('Heading Color','digital-marketing-agency'),
		    'section'		=> 'footer_background',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer list color 
	$footerlistcolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_list_color',
    	array(
			'default' => $footerlistcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 13,
		)
	);	

	$wp_customize->add_control( 
		'footer_list_color',
		array(
		    'label'   		=> __('list Color','digital-marketing-agency'),
		    'section'		=> 'footer_background',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer listhover color 
	$footerlisthovercolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_listhover_color',
    	array(
			'default' => $footerlisthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 13,
		)
	);	

	$wp_customize->add_control( 
		'footer_listhover_color',
		array(
		    'label'   		=> __('List Hover Color','digital-marketing-agency'),
		    'section'		=> 'footer_background',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer text color 
	$footertextcolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_text_color',
    	array(
			'default' => $footertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 15,
		)
	);	

	$wp_customize->add_control( 
		'footer_text_color',
		array(
		    'label'   		=> __('Text Color','digital-marketing-agency'),
		    'section'		=> 'footer_background',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer border color 
	$footerbordercolor = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_border_color',
    	array(
			'default' => $footerbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 15,
		)
	);	

	$wp_customize->add_control( 
		'footer_border_color',
		array(
		    'label'   		=> __('Border Color','digital-marketing-agency'),
		    'section'		=> 'footer_background',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	
	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer Bottom','digital-marketing-agency'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	
	
	// Footer Copyright 
	$digitalmarketingagency_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $digitalmarketingagency_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','digital-marketing-agency'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	


	// footer coypright color 
	$footercoyprightcolor = esc_html__('#e9f3fc', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_coypright_color',
    	array(
			'default' => $footercoyprightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 15,
		)
	);	

	$wp_customize->add_control( 
		'footer_coypright_color',
		array(
		    'label'   		=> __('CopyRight Color','digital-marketing-agency'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopcol 
	$footerscrolltotopcol = esc_html__('#fff', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_scrolltotopcol',
    	array(
			'default' => $footerscrolltotopcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 16,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopcol',
		array(
		    'label'   		=> __('Scroll To Top Color','digital-marketing-agency'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopcolbg 
	$footerscrolltotopcolbg = esc_html__('#000', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_scrolltotopcolbg',
    	array(
			'default' => $footerscrolltotopcolbg,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 16,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopcolbg',
		array(
		    'label'   		=> __('Scroll To Top BG Color','digital-marketing-agency'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopcolbghover 
	$footerscrolltotopcolbghover = esc_html__('#8553b6', 'digital-marketing-agency' );
	$wp_customize->add_setting(
    	'footer_scrolltotopcolbghover',
    	array(
			'default' => $footerscrolltotopcolbghover,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 16,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopcolbghover',
		array(
		    'label'   		=> __('Scroll To Top BG Hover Color','digital-marketing-agency'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

}
add_action( 'customize_register', 'digitalmarketingagency_footer' );
// Footer selective refresh
function digitalmarketingagency_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'digitalmarketingagency_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'digitalmarketingagency_footer_partials' );


// copyright_content
function digitalmarketingagency_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}
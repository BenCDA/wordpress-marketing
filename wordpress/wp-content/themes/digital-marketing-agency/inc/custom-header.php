<?php
function digitalmarketingagency_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'digitalmarketingagency_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'digitalmarketingagency_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'digitalmarketingagency_custom_header_setup' );

if ( ! function_exists( 'digitalmarketingagency_header_style' ) ) :

function digitalmarketingagency_header_style() {
	$header_text_color = get_header_textcolor();

	$topheader_logowidth = get_theme_mod('topheader_logowidth','100');
	// $topheader_logoheight = get_theme_mod('topheader_logoheight','70');
	$topheader_btnbgcolor = get_theme_mod('topheader_btnbgcolor','#e9e9e9');

	$topheader_sitetitlecol = get_theme_mod('topheader_sitetitlecol','#000');


	$topheader_menucolor = get_theme_mod('topheader_menucolor','#fff');
	$topheader_menuhovercolor = get_theme_mod('topheader_menuhovercolor','#744af6');
	$topheader_submenucolor = get_theme_mod('topheader_submenucolor','#fff');
	$topheader_submenubgcolor = get_theme_mod('topheader_submenubgcolor','#5267f4');
	$topheader_submenuhovercolor = get_theme_mod('topheader_submenuhovercolor','#5267f4');
	$topheader_submenubghovercolor = get_theme_mod('topheader_submenubghovercolor','#fff');
	$topheader_btnhovercolor = get_theme_mod('topheader_btnhovercolor','#9151c3');
	$topheader_stickybgcolor = get_theme_mod('topheader_stickybgcolor','#transparent');




	$slider_leftboxbgcolor1 = get_theme_mod('slider_leftboxbgcolor1','#6d48f8');
	$slider_leftboxbgcolor2 = get_theme_mod('slider_leftboxbgcolor2','#9151c3');
	$slider_titlecolor = get_theme_mod('slider_titlecolor','#fffeff');
	$slider_descriptioncolor = get_theme_mod('slider_descriptioncolor','#e1e2f7');
	$slider_buttonbgcolor = get_theme_mod('slider_buttonbgcolor','#fdfdfd');
	$slider_buttontextcolor = get_theme_mod('slider_buttontextcolor','#8553b6');
	$slider_buttonbghovercolor = get_theme_mod('slider_buttonbghovercolor','#000');
	$slider_buttontexthovercolor = get_theme_mod('slider_buttontexthovercolor','#fff');
	$slider_arrowscolor = get_theme_mod('slider_arrowscolor','#000');
	$slider_arrowshovercolor = get_theme_mod('slider_arrowshovercolor','#fff');
	$slider_arrowsbgcolor = get_theme_mod('slider_arrowsbgcolor','#fff');
	$slider_arrowsbghovercolor = get_theme_mod('slider_arrowsbghovercolor','#000');



	$service_disable_section = get_theme_mod('service_disable_section','YES');
	$service_titlecolor = get_theme_mod('service_titlecolor','#6a49fa');
	$service_descriptioncolor = get_theme_mod('service_descriptioncolor','#0a0133');
	$service_boxbgcolor = get_theme_mod('service_boxbgcolor','#fdfdfd');
	$service_iconbgicon1color = get_theme_mod('service_iconbgicon1color','#6d46f7');
	$service_iconbg2color = get_theme_mod('service_iconbg2color','#8b51bf');
	$service_iconbghovercolor = get_theme_mod('service_iconbghovercolor','#000');
	$service_iconcolor = get_theme_mod('service_iconcolor','#fff');
	$service_boxtitlecolorcolor = get_theme_mod('service_boxtitlecolorcolor','#000');
	$service_boxdescriptioncolorcolor = get_theme_mod('service_boxdescriptioncolorcolor','#c8c6c7');
	$service_buttonbgcolor = get_theme_mod('service_buttonbgcolor','#f5f6f8');
	$service_buttontextcolor = get_theme_mod('service_buttontextcolor','#050608');
	$service_buttonhovercolor = get_theme_mod('service_buttonhovercolor','#753cfd');
	$service_buttontexthovercolor = get_theme_mod('service_buttontexthovercolor','#fff');
	$service_buttoniconcolor = get_theme_mod('service_buttoniconcolor','#d8dbfe');
	$service_buttoniconbgcolor = get_theme_mod('service_buttoniconbgcolor','#753cfd');

  	$digitalmarketingagency_service_top_padding = esc_attr(get_theme_mod('digitalmarketingagency_service_top_padding','5'));
  	$digitalmarketingagency_service_bottom_padding = esc_attr(get_theme_mod('digitalmarketingagency_service_bottom_padding','2'));


	$blog_disable_section = get_theme_mod('blog_disable_section','YES');
	$blog_headingcolor = get_theme_mod('blog_headingcolor','#6a49fa');
	$blog_subheadingcolor = get_theme_mod('blog_subheadingcolor','#0a0133');
	$blog_subboxbgcolor = get_theme_mod('blog_subboxbgcolor','#fff');
	$blog_datecolor = get_theme_mod('blog_datecolor','#f3fefa');
	$blog_datebg1color = get_theme_mod('blog_datebg1color','#7b3dff');
	$blog_datebg2color = get_theme_mod('blog_datebg2color','#5267f4');
	$blog_titlecolor = get_theme_mod('blog_titlecolor','#000');
	$blog_titlehovercolor = get_theme_mod('blog_titlehovercolor','#5267f4');
	$blog_descriptioncolor = get_theme_mod('blog_descriptioncolor','#636365');
	$blog_commentcolor = get_theme_mod('blog_commentcolor','#4a4a4c');
	$blog_commentsbordercolor = get_theme_mod('blog_commentsbordercolor','#783bfb');
  	$digitalmarketingagency_blog_top_padding = esc_attr(get_theme_mod('digitalmarketingagency_blog_top_padding','4'));
  	$digitalmarketingagency_blog_bottom_padding = esc_attr(get_theme_mod('digitalmarketingagency_blog_bottom_padding','1'));



  	$footer_bg = get_theme_mod('footer_bg','#5267f4');
  	$footer_heading_color = get_theme_mod('footer_heading_color','#fff');
  	$footer_list_color = get_theme_mod('footer_list_color','#fff');
  	$footer_listhover_color = get_theme_mod('footer_listhover_color','#fff');
  	$footer_text_color = get_theme_mod('footer_text_color','#fff');
  	$footer_border_color = get_theme_mod('footer_border_color','#fff');
  	$footer_coypright_color = get_theme_mod('footer_coypright_color','#e9f3fc');
  	$footer_scrolltotopcol = get_theme_mod('footer_scrolltotopcol','#fff');
  	$footer_scrolltotopcolbg = get_theme_mod('footer_scrolltotopcolbg','#000');
  	$footer_scrolltotopcolbghover = get_theme_mod('footer_scrolltotopcolbghover','#8553b6');




	?>
	<style type="text/css">

		<?php 
		
		?>

			.custom-logo {
				width: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_logowidth); ?>%;
				height: 70%;
			}

			.main-header.header-fixed {
			    background: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_btnbgcolor); ?>;
			}

		
			h4.site-title {
				color: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_sitetitlecol); ?> !important;
			}

		

			.main-header .navbar .navbar-menu ul li a {
				color: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_menucolor); ?>;
			}

			.main-header .navbar .navbar-nav > li:hover a, .main-header .navbar .navbar-nav > li.focus a, .main-header .navbar .navbar-nav > li.active a, .main-header .navbar .navbar-nav > li a.active {
				color: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_menuhovercolor); ?>;
			}

			.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
				color: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_submenucolor); ?>;
			}

			.main-header .navbar .navbar-menu ul li.dropdown .sub-menu {
				background: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_submenubgcolor); ?>;
			}

			.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:hover {
				color: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_submenuhovercolor); ?>;
			}

			.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:hover, .main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:focus, .main-header .navbar .navbar-menu ul li.dropdown .sub-menu a.active {
				background: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_submenubghovercolor); ?>;
			}

			.navbar a.contactus:hover {
				background: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_btnhovercolor); ?> !important;
			}

			.main-header.header-fixed {
				background: <?php echo apply_filters('digitalmarketingagency_topheader', $topheader_stickybgcolor); ?> !important;
			}





			.slider-img-overlay {
			    background: linear-gradient(to right, <?php echo apply_filters('digitalmarketingagency_slider', $slider_leftboxbgcolor1); ?> 0%,<?php echo apply_filters('digitalmarketingagency_slider', $slider_leftboxbgcolor2); ?> 20%, <?php echo apply_filters('digitalmarketingagency_slider', $slider_leftboxbgcolor2); ?> 50%, <?php echo apply_filters('digitalmarketingagency_slider', $slider_leftboxbgcolor1); ?> 100%);
			}


			.hero-style .slide-title h2 {
				color: <?php echo apply_filters('digitalmarketingagency_slider', $slider_titlecolor); ?>;
			}

			.hero-style .slide-text p {
				color: <?php echo apply_filters('digitalmarketingagency_slider', $slider_descriptioncolor); ?>;
			}

			.hero-style a.ReadMore {
				background: <?php echo apply_filters('digitalmarketingagency_slider', $slider_buttonbgcolor); ?> !important;
			}

			.hero-style a.ReadMore {
				color: <?php echo apply_filters('digitalmarketingagency_slider', $slider_buttontextcolor); ?> !important;
			}

			.hero-style a.ReadMore:after {
				background: <?php echo apply_filters('digitalmarketingagency_slider', $slider_buttonbghovercolor); ?> !important;
			}

			.hero-style a.ReadMore:hover {
				color: <?php echo apply_filters('digitalmarketingagency_slider', $slider_buttontexthovercolor); ?> !important;
			}
			

			.hero-slider .swiper-button-next:before, .hero-slider .swiper-button-prev:before {
				color: <?php echo apply_filters('digitalmarketingagency_slider', $slider_arrowscolor); ?>;

			}

			.hero-slider .swiper-button-next:before, .hero-slider .swiper-button-prev:before {
				color: <?php echo apply_filters('digitalmarketingagency_slider', $slider_arrowscolor); ?>;

			}

			.hero-slider .swiper-button-prev:hover:before, .hero-slider .swiper-button-next:hover:before {
				color: <?php echo apply_filters('digitalmarketingagency_slider', $slider_arrowshovercolor); ?>;
			}

			.hero-slider .swiper-button-next:before, .hero-slider .swiper-button-prev:before {
				background: <?php echo apply_filters('digitalmarketingagency_slider', $slider_arrowsbgcolor); ?>;

			}

			.hero-slider .swiper-button-prev:hover:before, .hero-slider .swiper-button-next:hover:before {
				background: <?php echo apply_filters('digitalmarketingagency_slider', $slider_arrowsbghovercolor); ?>;
			}






			#service-section .header-section .title {
				color: <?php echo apply_filters('digitalmarketingagency_service', $service_titlecolor); ?>;
			} 

			#service-section .header-section .description {
				color: <?php echo apply_filters('digitalmarketingagency_service', $service_descriptioncolor); ?>;
			}

			#service-section .single-service {
				background-color: <?php echo apply_filters('digitalmarketingagency_service', $service_boxbgcolor); ?>;
			}

			#service-section .single-service .part-1 .imageIcon {
    			background: linear-gradient(to right,<?php echo apply_filters('digitalmarketingagency_service', $service_iconbgicon1color); ?> 0%,<?php echo apply_filters('digitalmarketingagency_service', $service_iconbg2color); ?> 20%,<?php echo apply_filters('digitalmarketingagency_service', $service_iconbg2color); ?> 50%,<?php echo apply_filters('digitalmarketingagency_service', $service_iconbgicon1color); ?> 100%);
			}

			#service-section .single-service:hover .part-1 .imageIcon {
				background: <?php echo apply_filters('digitalmarketingagency_service', $service_iconbghovercolor); ?>;
			}

			#service-section .single-service .part-1 .imageIcon i {
				color: <?php echo apply_filters('digitalmarketingagency_service', $service_iconcolor); ?>;
			}

			#service-section .single-service .part-2 h3.title {
				color: <?php echo apply_filters('digitalmarketingagency_service', $service_boxtitlecolorcolor); ?>;
			}

			#service-section .single-service .part-2 p {
				color: <?php echo apply_filters('digitalmarketingagency_service', $service_boxdescriptioncolorcolor); ?>;
			}

			#service-section .single-service .part-2 a {
				color: <?php echo apply_filters('digitalmarketingagency_service', $service_buttontextcolor); ?>;
			}

			#service-section .single-service .part-2 a {
				background: <?php echo apply_filters('digitalmarketingagency_service', $service_buttonbgcolor); ?>;
			}

			#service-section .single-service .part-2 a:hover {
				background: <?php echo apply_filters('digitalmarketingagency_service', $service_buttonhovercolor); ?>;
			}

			#service-section .single-service .part-2 a:hover {
				color: <?php echo apply_filters('digitalmarketingagency_service', $service_buttontexthovercolor); ?>;
			}

			#service-section .single-service .part-2 a i {
				color: <?php echo apply_filters('digitalmarketingagency_service', $service_buttoniconcolor); ?>;
			}

			#service-section .single-service .part-2 a i {
				background: <?php echo apply_filters('digitalmarketingagency_service', $service_buttoniconbgcolor); ?>;
			}

			#service-section {
				padding-top: <?php echo apply_filters('digitalmarketingagency_service', $digitalmarketingagency_service_top_padding); ?>em;
				padding-bottom: <?php echo apply_filters('digitalmarketingagency_service', $digitalmarketingagency_service_bottom_padding); ?>em;
			}




			#blog-section .header-section .title {
				color: <?php echo apply_filters('digitalmarketingagency_blog', $blog_headingcolor); ?>;
			}

			#blog-section .header-section .description {
				color: <?php echo apply_filters('digitalmarketingagency_blog', $blog_subheadingcolor); ?>;
			}

			.blog-item {
				background: <?php echo apply_filters('digitalmarketingagency_blog', $blog_subboxbgcolor); ?>;
			}

			.blog-item .theme-button {
				color: <?php echo apply_filters('digitalmarketingagency_blog', $blog_datecolor); ?>;
			}

			.blog-item .theme-button {
				background: linear-gradient(to left, <?php echo apply_filters('digitalmarketingagency_blog', $blog_datebg1color); ?> 50%, <?php echo apply_filters('digitalmarketingagency_blog', $blog_datebg2color); ?> 50%);
			}

			#blog-section .blog-content h5 a {
				color: <?php echo apply_filters('digitalmarketingagency_blog', $blog_titlecolor); ?>;
			}

			#blog-section .blog-content h5 a:hover, #blog-section .blog-content h5:hover a, #blog-section .blog-item .blog-content h5.post-title:hover {
				color: <?php echo apply_filters('digitalmarketingagency_blog', $blog_titlehovercolor); ?> !important;
			}

			#blog-section .blog-content p {
				color: <?php echo apply_filters('digitalmarketingagency_blog', $blog_descriptioncolor); ?>;
			}

			.blog-item .comment-timing li a i {
				color: <?php echo apply_filters('digitalmarketingagency_blog', $blog_commentcolor); ?>;
			}

			.blog-item .comment-timing {
				border-color: <?php echo apply_filters('digitalmarketingagency_blog', $blog_commentsbordercolor); ?>;
			}

			#blog-section {
				padding-top: <?php echo apply_filters('digitalmarketingagency_service', $digitalmarketingagency_blog_top_padding); ?>em;
				padding-bottom: <?php echo apply_filters('digitalmarketingagency_service', $digitalmarketingagency_blog_bottom_padding); ?>em;
			}






		.footer-area {
			background: <?php echo apply_filters('digitalmarketingagency_footer', $footer_bg); ?>;
		}

		.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6, .footer-area .footer-widget .w-title {
			color: <?php echo apply_filters('digitalmarketingagency_footer', $footer_heading_color); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo apply_filters('digitalmarketingagency_footer', $footer_list_color); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo apply_filters('digitalmarketingagency_footer', $footer_listhover_color); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta {
			color: <?php echo apply_filters('digitalmarketingagency_footer', $footer_text_color); ?>;
		}

		.copy-right {
			border-top-color: <?php echo apply_filters('digitalmarketingagency_footer', $footer_border_color); ?>;
		}

		.copy-right p, .copy-right p a {
			color: <?php echo apply_filters('digitalmarketingagency_footer', $footer_coypright_color); ?> !important;
		}

		.scroll-top {
			color: <?php echo apply_filters('digitalmarketingagency_footer', $footer_scrolltotopcol); ?>;
		}

		.scroll-top {
			background: <?php echo apply_filters('digitalmarketingagency_footer', $footer_scrolltotopcolbg); ?>;
		}

		.scroll-top:hover {
			background: <?php echo apply_filters('digitalmarketingagency_footer', $footer_scrolltotopcolbghover); ?>;
		}

	




		<?php  ?>
	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}

	<?php endif; ?>




	<?php
        if ($blog_disable_section == 1):
	?>
		.blog-area {
			display: none;
		}
	<?php
		else :
	?>
		.blog-area {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($service_disable_section == 1):
	?>
		#service-section {
			display: none;
		}
	<?php
		else :
	?>
		#service-section {
			display: block;
		}
	<?php endif; ?>

		
	</style>
	<?php
}
endif;

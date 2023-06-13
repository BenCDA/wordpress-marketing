<?php 
	$digitalmarketingagency_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$digitalmarketingagency_breadcrumb_bg_img				= get_theme_mod('breadcrumb_bg_img'); 
	$digitalmarketingagency_breadcrumb_back_attach			= get_theme_mod('breadcrumb_back_attach','scroll');
	
if($digitalmarketingagency_hs_breadcrumb == '1') {	
?>	

<?php $digitalmarketingagency_breadcrumb_bg_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>

	<!-- Slider Area -->   
	<?php if(!empty($digitalmarketingagency_breadcrumb_bg_img)): ?>
    <section class="slider-area breadcrumb-section" style="background: url(<?php echo esc_url($digitalmarketingagency_breadcrumb_bg_img); ?>) center center <?php echo esc_attr($digitalmarketingagency_breadcrumb_back_attach); ?>; background-repeat: no-repeat;
    background-size: cover;">
	<?php else: ?>
	 <section class="slider-area breadcrumb-section">
	 <?php endif; ?>
	 <div class="digital_marketing_agency-innerpage-overlay"></div>
        <div class="container">
            <div class="about-banner-text"> 
            <h1><?php digitalmarketingagency_breadcrumb_title(); ?></h1>  
            	<ol class="breadcrumb-list">
					<?php digitalmarketingagency_breadcrumbs(); ?>
				</ol>
									
            </div>
        </div> 
    </section>
    <!-- End Slider Area -->
<?php }else{  ?>
	<section style="padding: 30px 0 30px;"></section>
<?php } ?>	
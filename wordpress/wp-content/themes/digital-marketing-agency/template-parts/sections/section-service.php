<section id="service-section" class="services-area home-services">
	<div class="<?php if(esc_attr(get_theme_mod('digitalmarketingagency_service_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('digitalmarketingagency_service_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
	<!-- <div class="container">  -->
		<div class="row">
			<div class="col-md-10 col-lg-8">
				<div class="header-section">
					<h2 class="title"><?php esc_html_e( 'OUR SERVICES', 'digital-marketing-agency' ); ?></h2>
					<p class="description"><?php esc_html_e( 'What We Provide To You', 'digital-marketing-agency' ); ?></p>					
				</div>
			</div>
		</div>
		<div class="row">

			<?php for($p=1; $p<7; $p++) { ?>
	        <?php if( get_theme_mod('Service'.$p,false)) { ?>
	        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('Service'.$p,true)); ?>
	        <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
	          $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
	        <?php 
	          if(has_post_thumbnail()){
	            $img = esc_url($image[0]);
	          }
	          if(empty($image)){
	            $img = get_template_directory_uri().'/assets/images/default.png';
	          }
	        ?>

	        <?php  
				$icon = get_theme_mod('service_icon'.$p,'fa fa-users');
	        ?>

			<!-- Start Single Service -->
			<div class="col-md-6 col-lg-4 box-space">


				<div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">       

				<div class="single-service">
					<div class="part-1">
						<div class="imageBox">
	                		<img  src="<?php echo $img; ?>" alt="<?php the_title(); ?>">	
	                		<?php if ( apply_filters('digitalmarketingagency_service', $icon) != "") { ?>
		                		<div class="imageIcon">		
		                			<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
		                		</div>
	 						<?php }?>

	                	</div>		                					
					</div>
					<div class="part-2">
						<h3 class="title"><?php the_title(); ?></h3>
						<p class="description"><?php the_excerpt(); ?></p>
						<a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Learn More', 'digital-marketing-agency' ); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="clearfix"></div>
				</div>

              	</div>


			</div>
			<!-- / End Single Service -->

			<?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
        <div class="clear"></div> 
			
		</div>
	<!-- </div> -->
	</div>
</section>

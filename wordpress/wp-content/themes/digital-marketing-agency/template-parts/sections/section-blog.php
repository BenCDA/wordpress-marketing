<?php  
	$blog_section_heading = get_theme_mod('blog_section_heading','NEWS & BLOG');
	$blog_section_subheading = get_theme_mod('blog_section_subheading','Read Our Latest post');

	$digitalmarketingagency_hs_blog 			= get_theme_mod('hs_blog','1');
	$digitalmarketingagency_blog_title 		= get_theme_mod('blog_title');
	$digitalmarketingagency_blog_subtitle		= get_theme_mod('blog_subtitle'); 
	$digitalmarketingagency_blog_description	= get_theme_mod('blog_description');
	$digitalmarketingagency_blog_num			= get_theme_mod('blog_display_num','3');
	if($digitalmarketingagency_hs_blog=='1'):
?>

<section id="blog-section" class="blog-area home-blog">
	<!-- <div class="container"> -->
		<div class="<?php if(esc_attr(get_theme_mod('digitalmarketingagency_blog_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('digitalmarketingagency_blog_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">

		<div class="row justify-content-center text-center">
			<div class="col-md-10 col-lg-8">
				<div class="header-section">
					<h2 class="title"><?php echo apply_filters('digitalmarketingagency_blog', $blog_section_heading); ?></h2>
					<p class="description"><?php echo apply_filters('digitalmarketingagency_blog', $blog_section_subheading); ?></p>					
				</div>
			</div>
		</div>
		
		<?php if(!empty($digitalmarketingagency_blog_title) || !empty($digitalmarketingagency_blog_subtitle) || !empty($digitalmarketingagency_blog_description)): ?>
			<div class="title">
				<?php if(!empty($digitalmarketingagency_blog_title)): ?>
					<h6><?php echo wp_kses_post($digitalmarketingagency_blog_title); ?></h6>
				<?php endif; ?>
				
				<?php if(!empty($digitalmarketingagency_blog_subtitle)): ?>
					<h2><?php echo wp_kses_post($digitalmarketingagency_blog_subtitle); ?></h2>
					<span class="shap"></span>
				<?php endif; ?>
				
				<?php if(!empty($digitalmarketingagency_blog_description)): ?>
					<p><?php echo wp_kses_post($digitalmarketingagency_blog_description); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?> 
		<div class="row">
			<?php 	
				$digitalmarketingagency_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $digitalmarketingagency_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$digitalmarketingagency_blog_wp_query = new WP_Query($digitalmarketingagency_blogs_args);
				if($digitalmarketingagency_blog_wp_query)
				{	
				while($digitalmarketingagency_blog_wp_query->have_posts()):$digitalmarketingagency_blog_wp_query->the_post(); ?>
				<div class="col-lg-4 col-md-6">


					<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="blog-thumb"><?php the_post_thumbnail(); ?>
								<h6 class="theme-button"><?php echo esc_html(get_the_date('j')); ?>, <?php echo esc_html(get_the_date('M')); ?> <br> <?php echo esc_html(get_the_date(' Y')); ?></h6>	
							</div>
						<?php endif; ?>		
						
						<div class="blog-content">
							<?php 
								if ( is_single() ) :
									
								the_title('<h5 class="post-title">', '</h5>' );
								
								else:
								
								the_title( sprintf( '<h5 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );
								
								endif; 
 								?> 
								<p>
							 		<?php echo wp_trim_words(get_the_content(), 45);	?>
							 	</p>
								
								
						</div>
						<ul class="comment-timing">
							<li><a href="javascript:void(0);"><i class="fa fa-comment"></i> <?php echo esc_html(get_comments_number($post->ID)); ?></a></li>
						</ul>
					</div>


				</div>
			<?php 
				endwhile; 
				}
				wp_reset_postdata();
			?>
		</div>
		</div>
	<!-- </div> -->
</section>
<?php endif; ?>
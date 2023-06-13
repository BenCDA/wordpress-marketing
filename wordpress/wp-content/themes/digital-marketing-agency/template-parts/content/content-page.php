<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Digital Marketing Agency
 */

?>
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
			
			the_content( 
					sprintf( 
						__( 'Read More', 'digital-marketing-agency' ), 
						'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
					) 
				);
		?>
	</div>
	<ul class="comment-timing">
		<li><a href="javascript:void(0);"><i class="fa fa-comment"></i> <?php echo esc_html(get_comments_number($post->ID)); ?></a></li>
	</ul>
</div>
</div>
<footer class="footer-area">  
   <div class="container"> 
		<?php do_action('digitalmarketingagency_footer_above'); 
		 if ( is_active_sidebar( 'digitalmarketingagency-footer-widget-area' ) ) { ?>	
			<div class="row footer-row"> 
				<?php  dynamic_sidebar( 'digitalmarketingagency-footer-widget-area' ); ?>
			</div>  
		<?php } ?>
			<?php 
		$footer_copyright = get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');
	?>
	<div class="copy-right"> 
			<?php 
			if ( ! empty( $footer_copyright ) ): ?>
			<?php 	
				$digitalmarketingagency_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="#">Digital Marketing Agency</a>', 'digital-marketing-agency')),
				);
			?>                          
			<p class="copyright-text">
				<?php
					echo apply_filters('digitalmarketingagency_footer_copyright', wp_kses_post(digitalmarketingagency_str_replace_assoc($digitalmarketingagency_copyright_allowed_tags, $footer_copyright)));
				?>
			</p>
			<?php endif; ?>
	</div>

	</div>
	

</footer>
<!-- End Footer Area  -->

<button class="scroll-top">
	<i class="fa fa-angle-up"></i>
</button>

</div>		
<?php wp_footer(); ?>
</body>
</html>

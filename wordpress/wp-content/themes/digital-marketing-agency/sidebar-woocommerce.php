<?php
/**
 * side bar template
 *
 * @package Digital Marketing Agency
 */
?>
<?php if ( ! is_active_sidebar( 'digitalmarketingagency-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('digitalmarketingagency-woocommerce-sidebar'); ?>
	</div>
</div>
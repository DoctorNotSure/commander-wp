<?php
/**
 * @package Commander
 */

get_header();
?>

<div class="d-flex align-items-center justify-content-center py-5 my-5">
	<div class="text-center py-5 my-5">
		<h1 class="display-1 fw-bold">
			<?php echo esc_html__(get_theme_mod('404_header', '404'), 'commander'); ?>
		</h1>
		<p class="fs-3">
			<?php echo esc_html__(get_theme_mod('404_sub_title', 'Page not found.'), 'commander'); ?>
		</p>
		<p class="lead">
			<?php echo esc_html__(get_theme_mod('404_message', 'The page you\'re looking for doesn\'t exist.'), 'commander'); ?>
		</p>
		<a href="<?php echo esc_url(home_url('/')); ?>" class="btn" style="<?php echo Commander\get_button_style(); ?>">Home</a>
	</div>
</div>

<?php
get_footer();

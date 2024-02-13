<?php
/**
 * @package Commander
 */
?>
<div class="container mt-5 mb-3">
	<div class="row d-flex justify-content-center align-items-center">
		<div class="col-md-6">
			<form class="d-flex search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
				<meta itemprop="target" content="<?php echo esc_url(home_url('/')); ?>/?s={s}" />
				<input required class="form-control form-control-lg me-2" type="search" placeholder="<?php echo esc_attr_x(get_theme_mod('search_text', 'Search'), 'placeholder', 'commander'); ?>" aria-label="<?php echo esc_attr_x(get_theme_mod('search_text', 'Search'), 'aria-label', 'commander'); ?>" autocomplete="off" value="<?php echo get_search_query(); ?>" name="s">
				<button class="btn btn-lg" type="submit" style="<?php echo Commander\get_button_style(); ?>"><i class="bi bi-search"></i></button>
			</form>
		</div>
	</div>
</div>

<?php
/**
 * @package Commander
 */
?>

<div class="modal fade" id="search-form" tabindex="-1" aria-labelledby="search-form-label" aria-hidden="true">
	<div class="modal-dialog pt-5">
		<div class="modal-content">
			<div class="modal-body">
				<form class="d-flex search-form p-2" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
					<meta itemprop="target" content="<?php echo esc_url(home_url('/')); ?>/?s={s}" />
					<input autofocus required class="form-control form-control-lg me-2" type="search" placeholder="<?php echo esc_attr_x(get_theme_mod('search_text', 'Search'), 'placeholder', 'commander'); ?>" aria-autocomplete="both" aria-label="<?php echo esc_attr_x(get_theme_mod('search_text', 'Search'), 'aria-label', 'commander'); ?>" autocomplete="off" autocorrect="off" autocapitalize="off" enterkeyhint="go" spellcheck="false" autofocus="true" value="<?php echo get_search_query(); ?>" name="s">
					<button class="btn btn-lg" style="<?php echo Commander\get_button_style(); ?>" type="submit">
						<i class="bi bi-search"></i>
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
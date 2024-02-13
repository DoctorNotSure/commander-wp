<?php
/**
 * @package Commander
 */
get_header();

if (!have_posts()):
	get_template_part('template/content', 'none');
else:
?>
	<div class="row align-items-center pt-5" data-masonry='{"percentPosition": true }'>
	<?php
		while (have_posts()) {
			the_post();
			get_template_part('template/content', 'excerpt');
		}
	?>
	</div>
<?php
	get_template_part('template/pagination');
endif;

get_footer();
?>
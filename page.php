<?php
/**
 * @package Commander
 */

get_header();

while (have_posts()) {
	the_post();
	get_template_part('template/content', 'page');
}

get_footer();

<?php
/**
 * @package Commander
 */
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php
		if (has_post_thumbnail())
			the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid shadow-lg mx-auto d-block rounded mb-5']);

		if (!get_theme_mod('page_titles', false))
			the_title('<h1 class="mb-3">', '</h1>');
	?>
	<div class="content-text -3">
		<?php the_content(); ?>
	</div>
</article>
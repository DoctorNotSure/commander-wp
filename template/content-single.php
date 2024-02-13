<?php
/**
 * @package Commander
 */
?>
<article <?php post_class('pt-3'); ?> id="post-<?php the_ID(); ?>">
	<?php
		if (has_post_thumbnail()) {
			$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
			echo '<img src="'.$image[0].'" class="img-fluid shadow-lg mx-auto d-block rounded mb-3 mb-sm-5" style="width: auto; max-height: 500px" />';
			// the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100 shadow-lg mx-auto d-block rounded mb-5']);
		}
		the_title('<h1 class="mb-3">', '</h1>');
	?>
	<div class="content-text -3">
		<?php the_content(); ?>
	</div>
</article>

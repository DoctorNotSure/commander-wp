<?php
/**
 * @package Commander
 */
?>
<div class="col-sm-6 col-lg-4 mb-4 ">
	<article <?php post_class('card p-0 shadow-lg'); ?> id="post-<?php the_ID(); ?>">
		<?php if (has_post_thumbnail()): ?>
			<a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
				<?php
					the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid shadow-lg mx-auto d-block rounded-top']);
				?>
			</a>
		<?php endif; ?>
		<div class="card-body">
			<h5 class="card-title mb-3">
				<a href="<?php echo esc_url(get_permalink()); ?>" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h5>
			<div class="card-text">
				<?php the_excerpt(); ?>
			</div>
			<a href="<?php echo esc_url(get_permalink()) ?>" class="btn" style="<?php echo Commander\get_button_style(); ?>"><?php echo esc_html__(get_theme_mod('read_more_text', 'Read'), 'commander'); ?></a>
		</div>
	</article>
</div>
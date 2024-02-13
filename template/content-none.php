<?php
/**
 * @package Commander
 */
?> 

<div class="d-flex align-items-center justify-content-center py-5 my-5">
	<div class="text-center py-5 my-5">
		<?php if (is_search()): ?>
			<h1 class="fs-3 fw-bold"><?php esc_html_e('No results', 'commander'); ?></h1>
			<p class="lead">
				<?php esc_html_e('Your search terms showed no results. Please try again.', 'commander'); ?>
			</p>
		<?php elseif (is_home() && current_user_can('publish_posts')): ?>
			<h1 class="fs-3 fw-bold"><?php esc_html_e('Create something new', 'commander'); ?></h1>
			<p class="lead">
				<?php esc_html_e('Add a new post by clicking the button below.', 'commander'); ?>
			</p>
			<p class="lead">
				<a href="<?php echo esc_url(admin_url('post-new.php')); ?>" class="btn" style="<?php echo Commander\get_button_style(); ?>">New Post</a>
			</p>
		<?php else: ?>
			<h1 class="fs-3 fw-bold"><?php esc_html_e('Nothing to show', 'commander'); ?></h1>
			<p class="lead"><?php esc_html_e('Not sure how we got here, click the link below to go home.', 'commander'); ?></p>
			<a href="<?php echo esc_url(home_url('/')); ?>" class="btn" style="<?php echo Commander\get_button_style(); ?>">Home</a>
		<?php endif; ?>
	</div>
</div>
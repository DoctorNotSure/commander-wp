<?php
/**
 * Comments are not supported yet. Soon :)
 * @package Commander
 */
return;
?>

<?php if (have_comments()): ?>
    <ol>
        <?php wp_list_comments(); ?>
    </ol>
<?php endif; ?>
<?php comment_form(); ?>
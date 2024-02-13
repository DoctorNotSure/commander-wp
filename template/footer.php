<?php
/**
 * @package Commander
 */

$footer_classes = array();
if (get_theme_mod('footer_border', false))
	$footer_classes[] = 'border-top';

$footer_classes[] = 'pt-' . get_theme_mod('footer_space', 1);
$footer_classes[] = 'mt-' . get_theme_mod('footer_space', 1);
?>
<footer class="text-center mt-5 text-lg-start <?php echo implode(' ', $footer_classes); ?>">
	
	<?php if (has_nav_menu('footer-socials')):?>
	<div class="text-center bg-body mt-4 mb-3">
		<div>
			<?php echo Commander\get_social_menu('footer-socials'); ?>
		</div>
	</div>
	<?php endif;?>

	<?php 
	$copyright = get_theme_mod('footer_copyright', '');
	if ($copyright) {
		echo '<div class="text-center mb-3 bg-body">';
		echo $copyright;
		echo '</div>';
	}
	?>
</footer>
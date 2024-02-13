<?php
/**
 * @package Commander
 */

global $wp_query;
global $paged;
$range = 2;

$showitems = ($range * 2) + 1;
if (empty($paged)) {
	$paged = 1;
}

$pages = $wp_query->max_num_pages;
if ($pages == '' || !$pages) {
	$pages = 1;
}
?>

<?php if ($pages != 1): ?>
<nav aria-label="Blog pagination">
	<ul class="mt-5 pagination justify-content-center paginatiogn-lg">
		<?php 
		for ($i = 1; $i <= $pages; $i++) {
			if (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems) {
				if ($paged == $i) { 
				?>
					<li class="page-item" aria-current="page">
						<span class="page-link" style="<?php echo Commander\get_button_style();?>"><?php echo $i;?></span>
					</li>
				<?php
				} else { 
				?>
					<li class="page-item">
						<a class="page-link" href="<?php echo get_pagenum_link($i);?>"><?php echo $i;?></a>
					</li>
				<?php
				}
			}
		}
		?>
	</ul>
</nav>
<?php endif; ?>
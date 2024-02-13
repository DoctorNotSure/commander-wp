<?php
/**
 * @package Commander
 */
?>

<?php
$nav_style = "";
$nav_classes = 'navbar navbar-expand-lg';
$header_text_color = get_theme_mod('header_text_color', '#111');

if (get_theme_mod('header_shadow', true))
	$nav_classes .= ' shadow-lg';

if (get_theme_mod('sticky_header', true))
	$nav_classes .= ' sticky-top';

// doesnt seem to work on mobile
if (is_admin_bar_showing() && !wp_is_mobile())
	$nav_style .= "top: 32px;";

$nav_style .= "color: " . $header_text_color . ';';
$nav_style .= " background-color: " . get_theme_mod('header_background_color', '#eee');

?>
<nav data-bs-theme="light" class="<?php echo $nav_classes; ?>" style="<?php echo $nav_style; ?>;">
	<div class="container">
		<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" itemscope itemtype="http://schema.org/Organization">
			<?php
			if (has_custom_logo()) {
				$logo_id = get_theme_mod('custom_logo');
				$logo_url = wp_get_attachment_image_src($logo_id , 'full');

				$logo_style = "width: " . get_theme_mod('logo_width', '30') . 'px;';
				$logo_classes = "d-inline-block align-text-top img-fluid";
				if (get_theme_mod('logo_add_shadow', false))
					$logo_classes .= " shadow";

				if (get_theme_mod('logo_rounded', false))
					$logo_style .= " border-radius: 50%;";

				$logo_classes .= " me-". get_theme_mod('site_title_space', 1);

				echo '<img src="' . $logo_url[0] . '" alt="' . get_bloginfo('name') . ' logo" class=" ' . $logo_classes . '" style="' . $logo_style . '"/>';
			}
			
			if (!get_theme_mod('hide_site_title', false))
				echo '<span style="color: ' . $header_text_color . '">' . get_bloginfo('name') . '</span>'; 

			if (!get_theme_mod('hide_site_tagline', true))
				echo ' <span class="d-inline-block text-muted" style="font-size: 10px; color: ' . $header_text_color . '">' . get_bloginfo('description') . '</span>'; 
			?>
		</a>

		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="bi bi-menu-button-wide" style="color: <?php echo $header_text_color; ?> !important"></i>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<?php
					$items = Commander\get_menu_items('primary');
					foreach ($items as $key => $item) {
						$item['style'][] = 'color: ' . $header_text_color;
						echo Commander\get_nav_item_html($item);
					}
				?>
			</ul>

			<?php echo Commander\get_social_menu('header_socials'); ?>

			<?php if (!get_theme_mod('hide_search', false)): ?>
				<button type="button" class="btn" style="<?php echo Commander\get_button_style(); ?>" data-bs-toggle="modal" data-bs-target="#search-form">
					<i class="bi bi-search"></i>
				</button>
			<?php endif; ?>
		</div>
	</div>
</nav>
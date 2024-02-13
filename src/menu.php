<?php
/**
 * @package Commander
 */

namespace Commander;

function getMenuName($name) {
	if (has_nav_menu($name)) {
		$locations = get_nav_menu_locations();
		$menu = wp_get_nav_menu_object($locations[$name]);
		$name = $menu->name;
	}
	return $name;
}

function get_menu_items($name) {
	$items = array();
	if (has_nav_menu($name)) {
		$locations = get_nav_menu_locations();
		$menu = wp_get_nav_menu_object($locations[$name]);
		$tempItems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

		foreach ($tempItems as $key => $item) {
			$items[] = array(
				'id' => $item->db_id,
				'url' => $item->url,
				'title' => $item->title,
				'attr_title'=> $item->attr_title,
				'target'=> $item->target,
				'description'=> $item->description,
				'parent'=> $item->menu_item_parent,
				'xfn'=> $item->xfn,
				'classes'=> $item->classes,
				'children' => array(),
				'style' => array()
			);
		}

		for ($i = count($items) - 1; $i >= 0; $i--) { 
			$item = $items[$i];
			$parent_id = $item['parent'];
			if ($parent_id > 0) {
				foreach ($items as $k => $itm) {
					if ($parent_id == $itm['id']) {
						$items[$k]['children'][] = $item;
						break;
					}
				}
			}
		}

		// cleanup
		foreach ($items as $key => $item) {
			if ($item['parent'] > 0)
				unset($items[$key]);
		}
	}
	return $items;
}

function get_nav_item_html($item) {
	$html = '';
	if (count($item['children']) > 0) {
		$html .= '<li class="nav-item dropdown">';
			$html .= '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"';
				$html .= ' style="' . implode('; ', $item['style']) . '">' . $item['title'] . '</a>';
			$html .= '<ul class="dropdown-menu">';
			foreach ($item['children'] as $id => $child)
				$html .= get_nav_item_html($child);
			$html .= '</ul>';
		$html .= '</li>';
	} else {
		if ($item['parent'] == 0) {
			$item['classes'][] = 'nav-link';
			$html .= '<li class="nav-item">';
		}
		else {
			$item['classes'][] = 'dropdown-item';
			$html .= '<li>';
		}

		$current_page = false;
		$parts = parse_url($item['url']);
		$uri = isset($parts['path']) ? $parts['path'] : time();
		if ($_SERVER['REQUEST_URI'] === $uri) {
			$current_page = true;
			if ($item['parent'] == 0) {
				$item['classes'][] = 'fw-bold ';
			} else {
				$item['style'][] = 'color: ' . get_theme_mod('button_text_color', '#fff');
				$item['style'][] = 'background-color: ' . get_theme_mod('button_background_color', '#1e73be') . '';
			}
		}

		$html .= '<a class="' . implode(' ', $item['classes']) . '"';

		if ($item['description'])
			$html .= ' data-bs-toggle="tooltip" data-bs-title="' . $item['description'] . '"';
		
		if ($item['attr_title'])
			$html .= ' title="' . $item['attr_title'] . '"';
	
		if ($item['target'])
			$html .= ' target="' . $item['target'] . '"';
		
		if ($current_page)
			$html .= ' aria-current="page"';

		$html .= ' style="' . implode('; ', $item['style']) . '"';
		$html .= ' href="' . $item['url'] . '">' . $item['title'] . '</a>';
		
		$html .= '</li>';
	}
	return $html;
}

function get_social_menu($menu_name) {
	$html = '';
	$items = get_menu_items($menu_name);
	foreach ($items as $key => $item) {
		$host = parse_url($item['url'], PHP_URL_HOST);
		$domain = explode('.', $host);

		$html .= '<a href="' . $item['url'] . '"';

		if ($item['target'])
			$html .= ' target="' . $item['target'] . '"';

		if ($item['attr_title'])
			$html .= ' title="' . $item['attr_title'] . '"';

		if ($item['description'])
			$html .= ' data-bs-toggle="tooltip" data-bs-title="' . $item['description'] . '"';

		$html .= ' class="text-reset me-4 text-decoration-none">';

		$html .= '<i class="bi bi-' . $domain[0] . ' ' . implode(' ', $item['classes']) . '"';
		$html .= ' style="' . implode('; ', $item['style']) . '"></i>';
		$html .= '</a>';
	}
	return $html;
}
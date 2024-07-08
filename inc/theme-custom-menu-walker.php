<?php
/**
 * Custom Menu Walker for Stricker WordPress Theme.
 */
class Stricker_Menu_Walker extends Walker_Nav_Menu {

	/**
	 * Undocumented function
	 *
	 * @param [type] $output
	 * @param [type] $item
	 * @param integer $depth
	 * @param [type] $args
	 * @param integer $id
	 * @return void
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

		$title     = apply_filters( 'the_title', $item->title, $item->ID );
		$data_text = esc_attr( $title );

		$image    = get_field( 'image', $item );
		$data_img = wp_get_attachment_image_url( $image, 'full' );

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );

		$output .= '<li id="menu-item-' . $item->ID . '" class="' . esc_attr( $class_names ) . '">';

		$attributes = '';

		$attributes .= ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $data_text )        ? ' data-text="' . $data_text . '"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="' . esc_attr( $item->url ) . '"' : '';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= ! empty( $image ) ? '<span class="menu-item-bg-img"><img src="' . $data_img . '"></span>' : '';
		//$item_output .= '<span class="menu-item-bg-img"><img src="' . $data_img . '"></span>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	// Override end_el method (optional).
	/**
	 * Undocumented function
	 *
	 * @param [type] $output
	 * @param [type] $item
	 * @param integer $depth
	 * @param [type] $args
	 * @return void
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}

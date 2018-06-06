<?php
/**
 * Created by PhpStorm.
 * User: Вера
 * Date: 30.10.2017
 * Time: 19:44
 */
class forpost_nav_menu extends Walker_Nav_Menu {

	// add classes to ul sub-menus
	function start_lvl( &$output, $depth, $args) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			( $display_depth ==0 ? 'header-nav-items':'' ),
			( $display_depth >=1 ? 'header-nav__submenu header-submenu-list':'' ),
			( $display_depth >=2 ? 'header-submenu-list_sub-sub' : '' ),
		);
		$class_names = implode( ' ', $classes );

		// build html
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}

	// add main/sub classes to li's and links
	function start_el( &$output, $item, $depth, $args ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		//определяю локацию меню
		$location = $args->theme_location;
		//в зависимости от локации задаю значения классам ссылок и элементов
		switch ($location){
			case 'header_menu':
				$location_classes = array(
					'item-class' => 'header-nav-items__item',//класс элемента меню
					'submenu-item-class' => 'header-submenu-list__item',//класс элемента субменю
					'link-class' => 'header-nav-items__link',//класс ссылки меню
					'submenu-link-class' => 'header-submenu-list__link'//класс ссылки субменю

				);
				break;
			case 'footer_services_menu' && 'footer_main_menu':
				$location_classes = array(
					'item-class' => 'footer-nav__item',
					'link-class' => 'footer-nav__itemlink'
				);
				break;
//                        case 'footer_main':
//	                        $location_classes = array(
//		                        'item-class' => 'footer-nav__item',
//		                        'link-class' => 'footer-nav__itemlink'
//	                        );
//	                        break;
		}
		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? $location_classes['item-class'] : $location_classes['submenu-item-class'] ),
			( $depth >=2 ? 'sub-sub-menu-item' : '' ),
			//( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			//'menu-item-depth-' . $depth
		);
		$depth_class_names = trim( esc_attr( implode( ' ', $depth_classes ) ) );

		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
		//проверяю поставил ли wp класс родителя и присваиваю свой 'parent'
		$parent_class = array_search('menu-item-has-children', $classes) ? 'header-nav-items__item_parent' : '';
		// build html
		$output .= $indent . '<li class="'. $depth_class_names .' '. $parent_class.'">';

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="' . ( $depth > 0 ? $location_classes["submenu-link-class"] : $location_classes["link-class"] ) . '"';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);

		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

class forpost_center_blocks extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth, $args) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            ( $display_depth ==0 ? 'header-nav-items':'' ),
            ( $display_depth >=1 ? 'header-nav__submenu header-submenu-list':'' ),
            ( $display_depth >=2 ? 'header-submenu-list_sub-sub' : '' ),
        );
        $class_names = implode( ' ', $classes );

        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $item, $depth, $args ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        //определяю локацию меню
        $location = $args->theme_location;
        //в зависимости от локации задаю значения классам ссылок и элементов
        switch ($location){
            case 'header_menu':
                $location_classes = array(
                    'item-class' => 'header-nav-items__item',//класс элемента меню
                    'submenu-item-class' => 'header-submenu-list__item',//класс элемента субменю
                    'link-class' => 'header-nav-items__link',//класс ссылки меню
                    'submenu-link-class' => 'header-submenu-list__link'//класс ссылки субменю

                );
                break;
            case 'footer_services_menu' && 'footer_main_menu':
                $location_classes = array(
                    'item-class' => 'footer-nav__item',
                    'link-class' => 'footer-nav__itemlink'
                );
                break;
//                        case 'footer_main':
//	                        $location_classes = array(
//		                        'item-class' => 'footer-nav__item',
//		                        'link-class' => 'footer-nav__itemlink'
//	                        );
//	                        break;
        }
        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? $location_classes['item-class'] : $location_classes['submenu-item-class'] ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            //( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            //'menu-item-depth-' . $depth
        );
        $depth_class_names = trim( esc_attr( implode( ' ', $depth_classes ) ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
        //проверяю поставил ли wp класс родителя и присваиваю свой 'parent'
        $parent_class = array_search('menu-item-has-children', $classes) ? 'header-nav-items__item_parent' : '';
        // build html
        $output .= $indent . '<li class="'. $depth_class_names .' '. $parent_class.'">';

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="' . ( $depth > 0 ? $location_classes["submenu-link-class"] : $location_classes["link-class"] ) . '"';

        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

// И там, где нужно выводим меню так:
function header_nav_menu( $menu_id ) {
	// main navigation menu
	$args = array(
		'menu'          => $menu_id,
		'container'     => 'nav',
		'container_id'      => 'menu',
		'container_class'   => 'header-nav',
		'menu_class'        => 'header-nav-items',
		'echo'          => true,
		'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
		'depth'         => 10,
		'walker'        => new forpost_nav_menu,
		'theme_location'=> 'header_menu'
	);

	// print menu
	wp_nav_menu( $args );
}
function footer_services_menu( $menu_id ) {
	// main navigation menu
	$args = array(
		'menu'          => $menu_id,
		'container'     => '',
		'menu_class'        => 'footer-nav__items',
		'echo'          => true,
		'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
		'depth'         => 10,
		'walker'        => new forpost_nav_menu,
		'theme_location'=> 'footer_services_menu'
	);

	wp_nav_menu( $args );
}

function footer_main_menu( $menu_id ) {
	// main navigation menu
	$args = array(
		'menu'          => $menu_id,
		'container'     => '',
		'menu_class'        => 'footer-nav__items',
		'echo'          => true,
		'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
		'depth'         => 10,
		'walker'        => new forpost_nav_menu,
		'theme_location'=> 'footer_main_menu'
	);

	wp_nav_menu( $args );
}

function center_blocks_menu($menu_id){
    // main navigation menu
    $args = array(
        'menu'          => $menu_id,
        'container'     => '',
        'menu_class'        => 'footer-nav__items',
        'echo'          => true,
        'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
        'depth'         => 10,
        'walker'        => new forpost_center_blocks,
    );

    wp_nav_menu( $args );
}

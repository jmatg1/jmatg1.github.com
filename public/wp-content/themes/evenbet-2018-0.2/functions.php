<?php

add_action ( 'wp_enqueue_scripts', 'evenBetGaming_scripts' );
function evenBetGaming_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap_grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css' );    
	wp_enqueue_style( 'select2', get_template_directory_uri() . '/css/select2.min.css' );   	
	wp_enqueue_style( 'swiper-min', get_template_directory_uri() . '/css/swiper.min.css' );  
}
add_action( 'wp_enqueue_scripts', 'theme_scripts');
function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'hammer', get_template_directory_uri() . '/js/hammer.js', array('jquery'), null, true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );	
	wp_enqueue_script( 'swiper-min', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), null, true );	
	wp_enqueue_script( 'select2', get_template_directory_uri() . '/js/select2.min.js', array('jquery'), null, true );
    }

//отключил версию для css и js
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

// создаем область вывода меню
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей
		  'menu' => 'top-menu' // 'имя' => 'описание'		  
		)
	);
}

// удаление лишних классов WP,  кроме необходимых
//Удаление всех Css классов и ID, за исключением тех, которые перечисленны в массиве
function custom_wp_nav_menu($var) {
	return is_array($var) ? array_intersect($var, array(
			//List of allowed menu classes
			'current_page_item',
			'current_page_parent',
			'current_page_ancestor',
			'nav-menu__item',
			'dropdown',
			'last',
			'hidden-desctop',
			'dropdown__sub-menu',
			'nav-top_botton',
			'active'
			)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

//Replaces "current-menu-item" with "active"
function current_to_active($text){
	$replace = array(
			//List of menu item classes that should be changed to "active"
			'current_page_item' => 'active',
			'current_page_parent' => 'active',
			'current_page_ancestor' => 'active',
	);
	$text = str_replace(array_keys($replace), $replace, $text);
			return $text;
	}
add_filter ('wp_nav_menu','current_to_active');

//Deletes empty classes and removes the sub menu class
function strip_empty_classes($menu) {
$menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
return $menu;
}
add_filter ('wp_nav_menu','strip_empty_classes');



// поключаю самописный Walker

require get_template_directory() . '/inc/walker.php';

/*
* Define a constant path to our single template folder
*/
define(SINGLE_PATH, TEMPLATEPATH . '/pages');

/**
 * Filter the single_template with our custom function
 */
add_filter('single_template', 'my_single_template');

/**
 * Single template function which will choose our template
 */
function my_single_template($single) {
    global $wp_query, $post;

    /**
     * Checks for single template by category
     * Check by category slug and ID
     */


        return SINGLE_PATH . '/single-' . $post->post_type . '.php';


}

/**
 * Custom filter to replace advanced pagination with custom HTML
 *
 * @param string $output  Pagination output
 * @param array  $params Pagination params from Pods::pagination()
 * @param Pods  $pods     Pods object
 *
 * @return string
 */
/*
 * Значения переменных
 *  $params->page - активная страица
 *  $params->total - всего страниц
 *  */
function my_pods_pagination_advanced( $output, $params ) {
    $url         = str_replace( "%_%", $params->page_var . "=", $params->base );
    $page_number = $params->total;
    $output = null;
    if ( $page_number <= 1  ) {
        return null;
    }
    $output = '<div class="pods-pagination-advanced'.esc_attr( $params->class ).'">';
//    echo($params->show_label);
//    echo($params->total);
    if ( 1 < $params->page ) {  // показывает первую страницу и стрелку "предыдущая стр"

        $output .='<a href="'.esc_url( pods_query_arg( array( $params->page_var => 1 ) ) ).'" class="pods-pagination-number pods-pagination-first '.esc_attr( $params->link_class ).'">1</a>';
        if ($params->total > 5 ) {
            $output .='<a href="'.esc_url( pods_query_arg( array( $params->page_var => ( $params->page - 1 ) ) ) ).'" class="pods-pagination-number pods-pagination-prev '.esc_attr( $params->link_class ).'"><div class="chevron-left"></div></a>';
         }


    }
    if ( 1 < ( $params->page - 100 ) ) {

        $output .='<a href="'.esc_url( pods_query_arg( array( $params->page_var => ( $params->page - 100 ) ) )).'" class="pods-pagination-number pods-pagination-'.esc_attr( $params->page - 100 ).' '.esc_attr( $params->link_class ).'">'.( $params->page - 100 ).'</a>';

    }

    if ( 1 < ( $params->page - 10 ) ) {

        $output .='<a href="'.esc_url( pods_query_arg( array( $params->page_var => ( $params->page - 10 ) ) ) ).'" class="pods-pagination-number pods-pagination-'.esc_attr( $params->page - 10 ).' '.esc_attr( $params->link_class ).'">'.( $params->page - 10 ).'</a>';

    }
for ( $i = $params->mid_size; $i > 0; $i-- ) {
    if ( 1 < ( $params->page - $i ) ) {

        $output .='<a href="'.esc_url( pods_query_arg( array( $params->page_var => ( $params->page - $i ) ) ) ).'" class="pods-pagination-number pods-pagination-'.esc_attr( $params->page - $i ).' '.esc_attr( $params->link_class ).'">'.( $params->page - $i ).'</a>';

    }
}


$output .='<span class="pods-pagination-number pods-pagination-current '.esc_attr( $params->link_class ).'">'.$params->page.'</span>';


for ( $i = 1; $i <= $params->mid_size; $i++ ) {
    if ( ( $params->page + $i ) < $params->total ) {

    $output .= '<a href="'.esc_url( pods_query_arg( array( $params->page_var => ( $params->page + $i ) ) ) ).'" class="pods-pagination-number pods-pagination-'.esc_attr( $params->page + $i ).' '.esc_attr( $params->link_class ).'">'.( $params->page + $i ).'</a>';

    }
}

if ( ( $params->page + 10 ) < $params->total ) {

$output .='<a href="'.esc_url( pods_query_arg( array( $params->page_var => ( $params->page + 10 ) ) ) ).'" class="pods-pagination-number pods-pagination-'.esc_attr( $params->page + 10 ).' '.esc_attr( $params->link_class ).'">'.( $params->page + 10 ).'</a>';

}

if ( ( $params->page + 100 ) < $params->total ) {

    $output .= '<a href="'.esc_url( pods_query_arg( array( $params->page_var => ( $params->page + 100 ) ) ) ).'" class="pods-pagination-number pods-pagination-'.esc_attr( $params->page + 100 ).' '.esc_attr( $params->link_class ).'">'.( $params->page + 100 ).'</a>';

}

if ( $params->page < $params->total ) {
    if ($params->prev_next && $params->total > 5 ) {
        $output .='<a href="'.esc_url( pods_query_arg( array( $params->page_var => ( $params->page + 1 ) ) ) ).'" class="pods-pagination-number pods-pagination-next '.esc_attr( $params->link_class ).'"><div class="chevron-right"></div></a>';
    }
    $output .='<a href="'.esc_url( pods_query_arg( array( $params->page_var => $params->total ) ) ).'" class="pods-pagination-number pods-pagination-last '.esc_attr( $params->link_class ).'">'.$params->total.'</a>';
}



    $output .="</div>";
    return $output;
}

add_filter( 'pods_pods_pagination_advanced', 'my_pods_pagination_advanced', 10, 2 );

?>
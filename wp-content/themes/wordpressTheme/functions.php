<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 25-5-2018
 * Time: 11:05
 */
//register_nav_menus( array(
//    'primary' => __( 'Primary Menu',      'twentyfifteen' )
//) );

function theme_styles(){
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css', array(), rand(121,9999), 'all');
}

add_action('wp_enqueue_scripts', 'theme_styles');

/*FOOTER*/
register_sidebar( array(
    'name' => 'Footer Area 1',
    'id' => 'footer-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => 'Footer Area 2',
    'id' => 'footer-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => 'Footer Area 3',
    'id' => 'footer-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => 'Footer Area 4',
    'id' => 'footer-4',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
/*LOGIN*/
add_filter( 'wp_nav_menu_secondary_items','wpsites_loginout_menu_link' );

function wpsites_loginout_menu_link( $menu ) {
    $loginout = wp_loginout($_SERVER['REQUEST_URI'], false );
    $menu .= $loginout;
    return $menu;
}
/*REACTIE FUNCTIE*/
function wpb_alter_comment_form_fields($fields) {

// Modify Name Field and show that it's Optional
    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Name (Optional)' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';

// Modify Email Field and show that it's Optional
    $fields['email'] = '<p class="comment-form-email"><label for="email">' . __( 'Email (Optional)', 'twentythirteen' ) . '</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" size="30"' . $aria_req . ' /></p>';

// This line removes the website URL from comment form.
    $fields['url'] = '';

    return $fields;
}
add_filter('comment_form_default_fields', 'wpb_alter_comment_form_fields');

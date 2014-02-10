<?php

if (!is_admin())
        add_action('wp_enqueue_scripts', 'exact_js');
	function exact_js() {
        wp_enqueue_style( 'exact-style', get_stylesheet_uri() );
        wp_enqueue_style('exact-font', 'http://fonts.googleapis.com/css?family=Open+Sans:600,400');
        if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 240, 240, true );

function exact_menu() {
  register_nav_menus(
    array(
    'header-menu' => __( 'Header Menu', 'exact' )
	)
  );
}
add_action( 'init', 'exact_menu' );

function exact_add_editor_styles() {
    add_editor_style( 'style.css' );

}
add_action( 'init', 'exact_add_editor_styles' );


	$custom_header_support = array(
		'default-image'          => get_template_directory_uri() . '/headers/one.jpg',
		'width' => apply_filters( 'exact_header_image_width', 966 ),
		'height' => apply_filters( 'exact_header_image_height', 140 ),
		'header-text'            => false,
	);	
	
	add_theme_support( 'custom-header', $custom_header_support );
	
	register_default_headers( array(
		'bluesky' => array (
                'url' => '%s/headers/one.jpg',
                'thumbnail_url' => '%s/headers/thumbnails/one_thumb.jpg',
                'description' => __( 'Shoreline', 'exact' )
            ),
                'grass' => array (
                'url' => '%s/headers/two.jpg',
                'thumbnail_url' => '%s/headers/thumbnails/two_thumb.jpg',
                'description' => __( 'Hill', 'exact' )
            ),
            	'wave' => array (
                'url' => '%s/headers/three.jpg',
                'thumbnail_url' => '%s/headers/thumbnails/three_thumb.jpg',
                'description' => __( 'Pebbles', 'exact' )
            ),
	) );


add_theme_support( 'custom-background', array(
	'default-image' => get_stylesheet_directory_uri() . '/img/bg.jpg',
	'default-color' => '26140A'
) );


add_filter('the_title', 'exact_title');
function exact_title($title) {
if ($title == '') {
return 'Post Name';
} else {
return $title;
}
}

function exact_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'exact_custom_excerpt_length', 999 );


function exact_widgets_init() {
		register_sidebar( array(
			'name' => __( 'Sidebar Widget', 'exact' ),
			'id' => 'sidebar',
			'description' => __( 'The left sidebar widget area.', 'exact' ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		) );
}




function exact_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'exact' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'exact' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'exact' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'exact' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'exact' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'exact' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}


//Required by WordPress
	add_theme_support('automatic-feed-links');
	
	
	//CONTENT WIDTH
		if ( ! isset( $content_width ) ) $content_width = 666;


//LOCALIZATION
	
	//Enable localization
		load_theme_textdomain('exact',get_template_directory() . '/languages');
		
	
// filter function for wp_title
function exact_filter_wp_title( $old_title, $sep, $sep_location ){
		// add padding to the sep
		$ssep = ' ' . $sep . ' ';
			
		// find the type of index page this is
		if( is_category() ) 
				$insert = $ssep . __( 'Category', 'exact' );
		elseif( is_tag() ) 
				$insert = $ssep . __( 'Tag', 'exact' );
		elseif( is_author() ) 
				$insert = $ssep . __( 'Author', 'exact' );
		elseif( is_year() || is_month() || is_day() ) 
				$insert = $ssep . __( 'Archives', 'exact' );
		else 
				$insert = NULL;
			
		// get the page number we're on (index)
		if( get_query_var( 'paged' ) )
				$num = $ssep . 'page ' . get_query_var( 'paged' );
			
		// get the page number we're on (multipage post)
		elseif( get_query_var( 'page' ) )
				$num = $ssep . 'page ' . get_query_var( 'page' );
			
		// else
		else $num = NULL;
			
		// concoct and return new title
return get_bloginfo( 'name' ) . $insert . $old_title . $num;
}


add_filter( 'wp_title', 'exact_filter_wp_title', 10, 3 );
add_action( 'widgets_init', 'exact_widgets_init' );
?>
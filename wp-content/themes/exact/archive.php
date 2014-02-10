<?php 
/**
 * The default template for displaying WordPress archives, as well as categories and tags.
 *
 * @package WordPress
 * @subpackage Exact
 * @since Exact v1.0
 */
get_header(); ?>

<?php if (have_posts()) : ?>

<div id="pageheader">
<h1>
<?php
		if ( is_category() ) {
			printf( __( 'Category Archives: %s', 'exact' ), '<span>' . single_cat_title( '', false ) . '</span>' );

		} elseif ( is_tag() ) {
			printf( __( 'Tag Archives: %s', 'exact' ), '<span>' . single_tag_title( '', false ) . '</span>' );

		} elseif ( is_author() ) {
			printf( __( 'Author News Archive %s', 'exact' ), '<span>' . single_tag_title( '', false ) . '</span>' );

		} elseif ( is_day() ) {
			printf( __( 'Daily Archives: %s', 'exact' ), '<span>' . get_the_date() . '</span>' );

		} elseif ( is_month() ) {
			printf( __( 'Monthly Archives: %s', 'exact' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

		} elseif ( is_year() ) {
			printf( __( 'Yearly Archives: %s', 'exact' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

		} else {
			_e( 'Archives', 'exact' );

		}
?>
</h1>
</div>

<div id="posts" >
<?php while (have_posts()) : the_post(); ?>




<div class="postcontainer">
<div class="postimage"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
<div class="posttitle"><h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2></div>
<div class="postdate"><?php echo get_the_date('jS M y'); ?></div>
<div class="postcomments"><a href="<?php the_permalink(); ?>#comments" title="<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></div>
</div>



<?php endwhile; ?>

</div>


<div class="divider"></div>
<div id="postnavigation">
<div id="previousposts"><?php next_posts_link( __( 'Previous Posts', 'exact' ) ); ?></div>
<div id="nextposts"><?php previous_posts_link( __( 'Newer Posts', 'exact' ) ); ?></div>
</div>

<?php else : ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php 
/**
 * The default template for WordPress content.
 *
 * @package WordPress
 * @subpackage Exact
 * @since Exact v1.0
 */
get_header(); ?>

<div id="posts" >

<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>



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
<div id="pagecontent">
<h1><?php _e('No WordPress posts found','exact'); ?></h1>
<p><?php _e('There are no WordPress posts to display here.','exact'); ?></p>
</div>
<?php endif; ?>


</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
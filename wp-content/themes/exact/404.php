<?php 
/**
 * This is the default template for displaying a 404 error when the content or page cannot be found.
 *
 * @package WordPress
 * @subpackage Exact
 * @since Exact v1.0
 */
get_header(); ?>

<div id="pagecontent">

<h1><?php _e('This page can not be found','exact'); ?></h1>

<p><?php _e('Sorry! The page you are looking for does not currently exist.','exact'); ?></p>


<p><?php get_search_form(); ?></p>


<p><a href="<?php echo site_url(); ?>" title="<?php _e('Return to the home page of this website','exact'); ?>"><?php _e('Return to the home page of this website','exact'); ?></a></p>



</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
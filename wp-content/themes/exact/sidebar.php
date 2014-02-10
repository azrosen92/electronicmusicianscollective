<div id="leftcol" >

<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>

<h2><?php _e('Pages','exact');?></h2>
<ul>
<?php wp_list_pages(); ?>
</ul>

<h2><?php _e('Links','exact');?></h2>
<ul>
<?php wp_list_bookmarks('categorize=0'); ?>
</ul>


<?php endif; // end sidebar widget area ?>

</div>
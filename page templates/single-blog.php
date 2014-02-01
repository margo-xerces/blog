<?php
/*
Template Name: Page - Blog Post
*/
?>

<?php include (TEMPLATEPATH . "/header_post.php"); ?>

<?php include (TEMPLATEPATH . "/navigation.php"); ?>
<div id="maincolumn">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2>Xerces Notes</h2>
	<div class="sub-dvdr"></div>
	<p style="margin-bottom:0px;"><a href="back php link"><-- Go Back</a></p>
	<div class="grid_4"><h3 style="margin-bottom:0px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<h4 style="margin-top:0px;"><?php the_author(); ?>, <?php $key_1_value = get_post_meta( get_the_ID(), 'date_submitted', true );
     // check if the custom field has a value
    if( ! empty( $key_1_value ) ) {
    echo $key_1_value;
    } 
    ?></h4>

	<?php the_content(); ?>

	<?php previous_post('&laquo; &laquo; %', '', 'yes'); ?> | <?php next_post('% &raquo; &raquo; ', '', 'yes'); ?>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages here</p>

	<?php endif; ?>
</div>
</div>

<!-- END MAINCOLUMN -->

<?php include (TEMPLATEPATH . "/sidebar_blog.php"); ?>
<?php get_footer(); ?>
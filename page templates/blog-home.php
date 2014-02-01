<?php
/*
Template Name: Page - Blog Home
*/
?>

<?php include (TEMPLATEPATH . "/header.php"); ?>

<?php include (TEMPLATEPATH . "/navigation.php"); ?>
<div id="maincolumn">

<!-- LOOP 1: Displays the most recent post -->
	<?php if ( have_posts() ) : ?>
		<?php query_posts('category_name=blog&showposts=1'); ?> <!-- how do you make this show only the most recent post? -->
		<?php while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a><small><?php the_time('l, F jS, Y') ?></small>
                <div class="entry">
                <?php the_content(); ?> <!-- How do you make this truncate the content at a certain point? -->
				</div>
        <?php endwhile; ?>
   	<?php endif; ?>
<!-- END LOOP 1 -->

   	<div id="sub-dvdr">
   		<h4>Latest Posts</h4>
   		<!-- LOOP 2: Displays four posts after this -->

   		<!-- END LOOP 2 -->
	<!-- <div id="sub-dvdr">
		<h5>More Posts</h5> -->
		<!-- Another loop goes here eventually to display just the text links for even older blog posts -->

</div> <!-- END MAINCOLUMN -->

<?php include (TEMPLATEPATH . "/sidebar_blog.php"); ?>
<?php get_footer(); ?>
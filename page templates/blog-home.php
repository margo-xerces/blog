<?php
/*
Template Name: Page - Blog Home
*/
?>

<?php include (TEMPLATEPATH . "/header.php"); ?>

<?php include (TEMPLATEPATH . "/navigation.php"); ?>
<div id="maincolumn">

<!-- LOOP 1: Displays the most recent post -->
	<?php

	$args = array(
		'post_type' => 'post',
		'category_name' => 'featured',
		'posts_per_page' => 1,
	);

	$the_query = new WP_Query( $args );

	?>

	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : the_post(); ?>
	<?php endwhile; endif; ?>

<!-- END LOOP 1 -->

   	<div id="sub-dvdr">
   		<h4>Latest Posts</h4>
   		<!-- LOOP 2: Displays four posts after this -->
   		<ul>
			<?php


			$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			<?php endforeach; 
			wp_reset_postdata();?>

			</ul>
   		<!-- END LOOP 2 -->
	<!-- <div id="sub-dvdr">
		<h5>More Posts</h5> -->
		<!-- Another loop goes here eventually to display just the text links for even older blog posts -->

</div> <!-- END MAINCOLUMN -->

<?php include (TEMPLATEPATH . "/sidebar_blog.php"); ?>
<?php get_footer(); ?>
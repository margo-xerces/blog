<div id="sidecolumn">
  <div class="main-dvdr"></div>
  <!-- DONATE Button w. Bootstrap -->
  <a class="btn btn-primary btn-large" href="<?php echo get_option('home'); ?>/?page_id=14057/" style="width: 160px; height: 50px; text-decoration: none; margin: 0px 10%;">
    <h4 class="btnlabel">Donate</h4> <h1 class="btnlabel">to protect invertebrates!</h1>
  </a>
  
  <div class="sub-dvdr"></div>
    <h4 class="orng" style="font-weight:400;">Newsletter</h4> 
    <p>Sign up for our newsletter to recieve up to date information about our programs and events.</p>             
  <!-- BEGIN: Constant Contact Stylish Email Newsletter Form 
  <div align="left">
    <div style="width:160px; background-color: #ffffff;"> -->
      <form name="ccoptin" action="http://visitor.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:3;">
        <input type="text" class="input-large" placeholder="Email">
        <button type="submit" name="go" value="go" class="btn">Submit</button>
        <input type="hidden" name="m" value="1102968923571">
       <input type="hidden" name="p" value="oi">
      </form>
  <!-- END: Constant Contact Stylish Email Newsletter Form -->

  <!-- Search field -->
  <div class="sub-dvdr"></div>
    <h5>Search this Site</h5>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

  <!-- About this blog -->
  <div class="sub-dvdr"></div>
    <h5>About the <span class="orng">Blog</span></h5>
    <p>Here goes some information about this blog! Enjoy! Fill with happiness and lolcats and maybe a shiba inu meme</p>

  <!-- RECENT POSTS -->
  <div class="sub-dvdr"></div>
    <h5>Recent Posts:</h5>
    <?php
    //display 5 posts for category id 42
        $args=array(
          'cat' => 42,
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 5,
          'caller_get_posts'=> 1
          );
        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
          echo '';
          while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <li><p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p></li>
           <?php
          endwhile;
        }
    wp_reset_query();  // Restore global post data stomped by the_post().
    ?>

  <!-- TAG CLOUD? -->

<!-- PHOTO CREDIT -->
 <div class="sub-dvdr"></div>
  <?php 
  $key_5_value = get_post_meta( get_the_ID(), 'photo', true );
  // check if the custom field has a value
  if( ! empty( $key_5_value ) ) {
  echo $key_5_value;
  } 
  ?>
</div> <!-- END SIDECOLUMN -->
<div id="container">
  <div id="home-slider">
    <?php if( function_exists('cyclone_slider') ) cyclone_slider('home'); ?>  
  </div>

  <?php if (have_posts()): ?>

    <?php
      $temp = $wp_query;
      $wp_query= null;
      $wp_query = new WP_Query();
      $wp_query->query('showposts=6'.'&paged='.$paged.'&category_name=blog');
    ?>

    

      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <p>teste</p>
        
      <?php endwhile; ?>



  <?php endif; ?>

  <?php $wp_query = null; $wp_query = $temp;?>

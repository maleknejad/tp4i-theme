<?php


get_header();?>

<!-- content-->
<div class="main-content">
   

    <section class="container">


    <?php
$loop = new WP_Query( array(
    'post_type' => 'academy',
    'posts_per_page' => 5
  )
);
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <h2>post</h2>

<?php endwhile; wp_reset_query(); ?>

    </section>
   
</div>

<?php get_footer();?>
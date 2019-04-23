<?php


get_header();?>

<!-- content-->
<div class="main-content">


  <section class="container">

    <?php
//Get terms for this taxonomy - orders by name ASC by default
$terms = get_terms('subject');
$i=0;
//Loop through each term
foreach($terms as $term):
$i++;
   //Query posts by term. 
   $args = array(
     'post_type' => 'academy',
            'tax_query' => array(
                array(
                    'taxonomy'  => 'subject',
                    'terms'     => array( $term->slug ),
                    'field'     => 'slug'
                )
            )
    );
    $tag_query = new WP_Query( $args );

    //Does tag have posts?
    if($tag_query->have_posts()):

        //Display tag title
        echo '<h2>'.esc_html($term->name).'</h2>'; ?>
    <div class="row">

      <?php  while($tag_query->have_posts()):$tag_query->the_post(); ?>

      <div class="col-md-3 <?php echo 'cat-'.$i;?>">
        <a class="lesson" href="<?php the_permalink(); ?>">
          <div class="top-info">
            <span class="star display<?php echo the_field('required'); ?>">
             <img src="<?php echo get_stylesheet_directory_uri(). '/assets/images/star.svg' ?>" title="درس هایی با علامت ستاره مهم هستند و توصیه میشود حتما دیده شوند.">
            </span>
            <h1 class="code h5 text-white font-weight-bold"><?php the_field('code'); ?></h1>
          </div>
          <h3 class="title h5 max-lines text-white p-3 font-weight-bold"><?php the_title(); ?></h3>
          <span class="time text-white">
            <i class="icon float-right d-inline icon-clock"></i>
            <h5 class="d-inline"><?php echo the_field('duration'); ?></h5>
          </span>
        </a>
      </div>

      <?php endwhile; ?>
    </div>
    <?php  endif; //End if $tag_query->have_posts
    wp_reset_postdata();
 endforeach;//Endforeach $term

?>
  </section>

</div>

<?php get_footer();?>
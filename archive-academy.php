<?php


get_header();?>

<!-- content-->
<div class="main-content">

  <div class="page-cover"><img src="<?php echo get_stylesheet_directory_uri(). '/demo-images/academy.jpg' ?>" alt="<?php the_title();?>"></div>
<div class="container">
<h2 class="mt-4 mb-2 font-weight-bold">آکادمی شفافیت</h2>
  <p>
  «شفافیت» ظاهری ساده و همه فهم دارد، اما بهره‌مندی از ثمرات و برکات آن تنها وقتی محقق می‌شود که از جزئیات و مصادیق آن در بستر موضوعات مختلف آگاهی کافی حاصل شده باشد. به همین دلیل، دوره آموزشی زیر برای علاقه‌مندان به شفافیت طراحی گردیده است.
  </p>
   <a class="btn btn-warning rounded-pill mb-2 mt-2" href="<?php echo get_site_url(); ?>/">قبل از شروع دوره حتما بخوانید</a>
</div>

  <section class="container mb-5">

    <?php
//Get terms for this taxonomy - orders by name ASC by default
$terms = get_terms('subject');

//Loop through each term
foreach($terms as $term):

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
echo '<div class="tag-section">';
        //Display tag title
        echo '<h3 class="mb-3 h4 mt-5 font-weight-bold">'.esc_html($term->name).'</h3>'; ?>
    <div class="row ">

      <?php  while($tag_query->have_posts()):$tag_query->the_post(); ?>

      <div class="col-md-3 mb-2  <?php $status = get_field('status'); 
        if($status=="online"){echo 'online';}
        if($status=="soon"){echo 'soon';}
        if($status=="future"){echo 'future';}
      ?>"
     >
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
    </div>
    <?php  endif; //End if $tag_query->have_posts
    wp_reset_postdata();
 endforeach;//Endforeach $term

?>
  </section>

</div>

<?php get_footer();?>
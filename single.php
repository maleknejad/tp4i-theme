<?php

 get_header();?>


<!-- content-->
<div class="main-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part('template-parts/blog/post', 'header');?>
    <div class="post-main">
        <div class="container">
            
             
   <?php the_content(); ?>
<?php endwhile;
 endif;
?>
        </div>
    </div>
    <div class="container">
        <div class="row">

    <?php $prevPost = get_previous_post(true);
        if($prevPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
    ?>
        <div class="col-12 col-lg-6">
                <div class="text-right mb-2 font-weight-bold text-gray">مطلب قبلی</div>
                <div class="card-horiz border"><a href="<?php the_permalink(); ?>">
                        <div class="card-cover"><?php the_post_thumbnail('thumbnail'); ?></div>
                        <div class="card-content align-self-center">
                            <div class="card-title"><?php the_title(); ?></div>
                            <div class="card-details" persian><?php the_date('F j, Y'); ?></div>
                        </div>
                    </a></div>
            </div>

    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
         
        $nextPost = get_next_post(true);
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    ?>
       <div class="col-12 col-lg-6">
                <div class="text-right mb-2 font-weight-bold text-gray">مطلب بعدی</div>
                <div class="card-horiz border"><a href="<?php the_permalink(); ?>">
                        <div class="card-cover"><?php the_post_thumbnail('thumbnail'); ?></div>
                        <div class="card-content align-self-center">
                            <div class="card-title"><?php the_title(); ?></div>
                            <div class="card-details" persian><?php the_date('F j, Y'); ?></div>
                        </div>
                    </a></div>
            </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>
</div>
        
         
        
    </div>
    <?php 
    // If comments are open or we have at least one comment, load up the comment template.
if (comments_open() || get_comments_number()):
    comments_template();
endif;

    ?>

</div>

<?php get_footer();?>
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
    <!-- <div id="comments">
        <div class="container comment-form">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4"><input class="form-control" type="text"
                            placeholder="نام و نام خانوادگی"></div>
                    <div class="form-group col-md-4"><input class="form-control" type="text" placeholder="ایمیل"></div>
                    <div class="form-group col-md-4"><input class="form-control ltr" type="text" placeholder="http://">
                    </div>
                    <div class="form-group col-12"><textarea class="form-control" cols="30" rows="8"
                            placeholder="دیدگاه خود را با ما در میان بگذارید"></textarea></div>
                    <div class="form-group"><button class="btn btn-warning rounded-pill px-5" type="submit">ارسال
                            دیدگاه</button></div>
                </div>
            </form>
        </div>
    </div> -->
</div>

<?php get_footer();?>
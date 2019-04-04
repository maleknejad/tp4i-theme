
    <section class="container mt-5">
        <div class="legend">
            <div class="legend-title text-dark">مجلس شورای اسلامی</div>
            <div class="legend-link"><a class="text-gray" href="<?php echo esc_url( get_category_link( 69 ) ); ?>">دیدن همه<i class="icon icon-left"> </i></a></div>
        </div>
        <div class="owl-carousel" data-items="3">
             <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'category' => 69,
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query($args);
             ?>
            <?php if (have_posts()): while (have_posts()): the_post();?>

            <div class="card-blog-min"><a href="<?php the_permalink(); ?>" title="title">
                    <div class="card-cover"><img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>"></div>
                    <div class="card-title"><?php the_title(); ?></div>
                    <div class="card-details"><span persian><?php the_time('jS F Y'); ?></span>
                    <span class="text-dark">
                           <i class="icon icon-comment ml-1 mr-3"></i>
                            <span persian>
                                <?php comments_number('بدون دیدگاه', 'یک دیدگاه', '% دیدگاه'); ?>
</span>
</span>
</div>
                    <div class="card-desc"><?php the_excerpt() ?></div>
                </a></div>
            <?php endwhile;endif;?>
            <?php wp_reset_query();?>
        </div>
    </section>
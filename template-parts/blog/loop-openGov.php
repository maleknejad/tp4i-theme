
    <section class="bg-gray-100 mt-5 py-5">
        <div class="container">
            <div class="legend">
                <div class="legend-title text-dark">حاکمیت باز</div>
                <div class="legend-link"><a class="text-gray" href="<?php echo esc_url( get_category_link( 41 ) ); ?>">دیدن همه<i class="icon icon-left"></i></a></div>
            </div>
            <div class="row">
               <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'category' => 41,
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                );
                $wp_query = new WP_Query($args);
             ?>
            <?php if (have_posts()): while (have_posts()): the_post();?>
                <div class="col-12 col-lg-6">
                    <div class="card-horiz border"><a href="<?php the_permalink(); ?>">
                            <div class="card-cover"><img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>"></div>
                            <div class="card-content">
                                <div class="card-title"><?php the_title(); ?></div>
                                <div class="card-details" persian><?php the_time('jS F Y'); ?></div>
                            </div>
                        </a></div>
                </div>
                 <?php endwhile;endif;?>
            <?php wp_reset_query();?>
                </div>
            </div>
        </div>
    </section> 
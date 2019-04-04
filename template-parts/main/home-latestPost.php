         <section class="container mt-5 pt-3 py-5">
                <div class="legend">
                    <div class="legend-title">آخرین مطالب بلاگ</div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="row">

                                <?php
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 4,
                                    );
                                    $wp_query = new WP_Query($args);
                                ?>
                                 <?php if (have_posts()): while (have_posts()): the_post();?>
                                    <div class="col-12 col-sm-6">
                                <div class="card-fixed"><a href="<?php the_permalink(); ?>">
                                        <div class="card-cover"><img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>"></div>
                                        <div class="card-title-wrapper">
                                            <div class="card-title"><?php the_title(); ?></div>
                                        </div>
                                    </a></div>
                                    </div>
                                       <?php endwhile;endif;?>
            <?php wp_reset_query();?>
                            
                           
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="last-post-list-min-wrapper">
                            <div class="last-post-list-min">
                                 <?php
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 12,
                                        'offset' => 4
                                    );
                                    $wp_query = new WP_Query($args);
                                ?>
                                 <?php if (have_posts()): while (have_posts()): the_post();?>
                                <div class="card-horiz-min"><a href="<?php the_permalink(); ?>#">
                                        <div class="card-cover"><img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>"></div>
                                        <div class="card-title"><?php the_title(); ?></div>
                                    </a></div>
                                     <?php endwhile;endif;?>
            <?php wp_reset_query();?>
                            </div>
                        </div>
                    </div>
                </div><a class="btn btn-primary rounded-pill btn-icon-left mt-3" href="<?php echo get_site_url(); ?>/blog" title="خواندن همه مطالب بلاگ"><span>خواندن همه مطالب بلاگ</span><i class="icon icon-left"></i></a>
            </section>
 <section class="blog-banners mt-3">
        <div class="container">
            <div class="row">
                <?php query_posts('posts_per_page=5');
                $count = 0;
                ?>

                <?php if (have_posts()): while (have_posts()): the_post();
                $count++;
                ?>
                <?php  if ($count == 1 ) {?>
                <div class="col-md-6">

                    <div class="banner-overlay banner-overlay-caption banner-overlay-caption-big"><img
                            src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="banner"><a
                            href="<?php the_permalink();?>" title=" <?php the_title()?>"><span>
                                <?php the_title()?></span></a></div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <?php }
                    ?>

                        <?php  if ($count >= 2 ) {?>


                        <div class="col-6">
                            <div class="banner-overlay banner-overlay-caption"><img
                                    src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="banner"><a
                                    href="<?php the_permalink();?>" title="<?php the_title()?>"><span>
                                        <?php the_title()?></span></a></div>
                        </div>
                        <?php }?>
                        <?php endwhile;endif;?>
                        <?php wp_reset_query();?>

                    </div>
                </div>

            </div>
        </div>
    </section>
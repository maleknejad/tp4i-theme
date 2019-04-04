                <div class="card-blog grid-item ">
                    <div class="card-cover"><a href="<?php the_permalink(); ?>"> <img
                        src="<?php echo get_the_post_thumbnail_url($post->ID) ?>"></a></div>
                    <div class="card-categories">
                    
                    <?php $cat = get_the_category(); ?>
                    <a class="btn btn-sm btn-outline-dark font-weight-bold" href="<?php echo get_category_link($cat[0]->cat_ID); ?>"> <?php echo $cat[0]->name; ?></a>

                    </div>
                    <div class="card-details">
                        <span persian>
                            <?php the_time('jS F Y'); ?>
                        </span>
                        <span class="text-dark">
                            <i class="icon icon-comment ml-1 mr-3"></i>
                            <span persian> <?php comments_number( 'بدون دیدگاه', 'یک دیدگاه', '% دیدگاه' ); ?></span>
                        </span>
                    </div>
                    <a class="card-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <div class="card-desc">
                        <?php the_excerpt() ?>
                    </div><a class="card-more" href="<?php the_permalink(); ?>">خواندن بیشتر<i
                            class="icon icon-left"></i></a>
                </div>

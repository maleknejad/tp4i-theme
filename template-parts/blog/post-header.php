    <?php if (has_post_thumbnail($post->ID)): ?>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>


    <div class="page-cover"><img src="<?php echo $image[0]; ?>" alt="<?php the_title();?>"></div>
    <?php endif;?>
    <div class="post-header">
        <div class="container">
            <div class="post-header-contnet">
                <div class="categories">
                    <?php
$categories = get_categories();
$i=0;
foreach ($categories as $category) {
    $i++;
    if ($i>3){ break;}
    echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
}
?>
                </div>
                <h1 class="post-title"><?php the_title();?></h1>
                <div class="post-details"><span persian><?php the_time('jS F Y');?></span><a class="mr-3"
                        href="#comments"><i class="icon icon-comment"></i>
                        <span persian><?php comments_number('بدون دیدگاه', 'یک دیدگاه', '% دیدگاه');?></span></a>
                </div>
                <div class="post-share">
                    <div class="title">همرسانی:</div><a href="#"><i class="icon icon-facebook"></i></a><a href="#"><i
                            class="icon icon-telegram"></i></a><a href="#"><i class="icon icon-twitter"></i></a>
                </div>
            </div>
            <div class="post-header-excerpt"> <?php the_excerpt()?></div>
        </div>
    </div>
    <!-- end post header -->
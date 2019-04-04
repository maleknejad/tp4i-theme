<?php
/**
 * Template Name: blog
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


 get_header();?>

<!-- content-->
<div class="main-content">

<?php get_template_part('template-parts/blog/category', 'menu');?>
<?php get_template_part('template-parts/blog/loop', 'feather');?>
<?php get_template_part('template-parts/blog/loop', 'majles');?>
<?php get_template_part('template-parts/blog/loop', 'openGov');?>
    
    <!--
    <section class="container mt-5">
        <div class="legend">
            <div class="legend-title text-dark">پرونده‌ها</div>
            <div class="legend-link"><a class="text-gray" href="#">دیدن همه<i class="icon icon-left"> </i></a></div>
        </div>
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="card-case">
                    <div class="card-cover"><img src="./demo-images/post-md-2.jpg">
                        <div class="card-title">جمع نویسی</div>
                    </div>
                    <div class="card-rate bg-success">خوب</div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card-case">
                    <div class="card-cover"><img src="./demo-images/post-md-3.jpg">
                        <div class="card-title">شفافیت حضور و غیاب</div>
                    </div>
                    <div class="card-rate bg-warning text-dark">متوسط</div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card-case">
                    <div class="card-cover"><img src="./demo-images/post-md-4.jpg">
                        <div class="card-title">مبانی دینی شفافیت</div>
                    </div>
                    <div class="card-rate bg-danger">ضعیف</div>
                </div>
            </div>
        </div>
    </section>
      -->
    


    <section class="container mt-5">
        <div class="legend">
            <div class="legend-title">آخرین مطالب بلاگ</div>
        </div>
        <div class="grid" >

           <div class="grid-sizer"></div>
            <?php query_posts(array(  'posts_per_page' => '6','paged' => get_query_var('paged')));?>
            <?php if (have_posts()): while (have_posts()): the_post();?>
		<?php get_template_part('template-parts/blog/loop', 'masonry');?>

		        <?php endwhile;endif;?>


             </div>
             <div class="col-12 col-md-11 text-center mt-4">
<?php //wp_pagenavi(); ?>
<div class="col-12 col-md-11 text-center mt-4"><a class="btn btn-warning rounded-pill" href="<?php echo get_site_url(); ?>/article">این داستان ادامه دارد ... </a></div>
  <?php wp_reset_query();?>
    </div>

    </section>
    <div class="my-5 py-5"></div>
</div>

<?php get_footer(); ?>
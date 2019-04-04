<?php
/**
 * Template Name: article
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header();?>

<!-- content-->
<div class="main-content">
   
<?php get_template_part('template-parts/blog/category', 'menu');?>
    <section class="container">
    
        <div class="grid" >

           <div class="grid-sizer"></div>
                        <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
       
                    'post_type' => 'post',
                  
                    'paged' => $paged,
                );
                $wp_query = new WP_Query($args);
             ?>
            <?php if (have_posts()): while (have_posts()): the_post();?>
		<?php get_template_part('template-parts/blog/loop', 'masonry');?>

		        <?php endwhile;endif;?>
            


             </div>
             <div class="col-12 col-md-11 text-center mt-4">
<?php wp_pagenavi(); ?>
  <?php wp_reset_query();?>
    </div>
        
    </section>
    <div class="my-5 py-5"></div>
</div>

<?php get_footer();?>
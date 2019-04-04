<?php


get_header();?>

<!-- content-->
<div class="main-content">
   

    <section class="container">
<h1 class="page-title h5"><?php printf( __( 'نتایج جستجو برای: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>        
<div class="grid" >

           <div class="grid-sizer"></div>
           
            <?php query_posts( array( 'paged' => get_query_var('paged') ) ); ?>            
            <?php if (have_posts()): while (have_posts()): the_post();  ?>


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
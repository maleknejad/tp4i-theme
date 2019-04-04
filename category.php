<?php

get_header();?>

<!-- content-->
<div class="main-content">
   

    <section class="container">
    <h1 class="mt4 h5 py-4">همه مطالب با موضوع:<b> <?php single_cat_title(); ?></b></h1>
        <div class="grid" >

           <div class="grid-sizer"></div>
           
            <?php query_posts( array( 'category' => ID,'paged' => get_query_var('paged') ) ); ?>            
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
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

    <head>
        <title><?php the_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/assets/css/main.css?ver=0.1.0' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
       	<?php wp_head(); ?>
    </head>
    <?php 
        if (is_front_page() && is_home()) {
        } else {
        get_template_part('template-parts/main/header', 'menu');
        }
    ?>
    
    <body>
        <?php
       
        ?>
    

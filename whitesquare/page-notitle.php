<?php get_header();
/*
Template Name: Page No Title
*/


 ?>

 <?php
    if(have_posts()):
	     
		  while( have_posts() ): the_post(); ?>
		     
			

			  <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
			  
			  <p><?php the_content(); ?></p>
			  
			   <hr>
			   
			   <?php endwhile;
			   endif;
			   ?>
			   <?php get_footer(); ?>
			   
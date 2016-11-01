<?php get_header(); ?><?php if (have_posts()) : while (have_posts()) : the_post(); ?>  <article class="project">    <h1 class="project__title">      <?php the_title(); ?>    </h1>    <div class="project__cat">      <?php get_template_part('partial/navigator-single');


      //echo the_post()->ID;
      ?>

    </div>    <div class="project__main">      <?php the_content("Sigue leyendo"); ?>    </div>    <!-- main -->  <?php endwhile; else: ?>  <?php include (TEMPLATEPATH . '/404.php'); ?><?php endif; ?></article><aside class="aside-more-post"><?php    //previous_post_link('<span class="left">&laquo; %link</span>');    next_post_link('<span class="right">Next :<strong> %link &raquo;</strong></span>');?></aside><aside class="aside-navigator">  <?php get_template_part('partial/navigator'); ?></aside><?php get_footer(); ?>
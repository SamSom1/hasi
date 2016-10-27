<?php get_header(); ?>



<div class="home">
    <div class="home__list-content">
    <?php if (is_home()): ?>
<?php endif; ?>
<?php if (is_category()): ?>
    <?php $category = get_category(get_query_var('cat')) ?>

    <p>
        Estás en:
        <?php echo  $category -> name; ?>
    </p>

  <?php endif; ?><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article   class="home__box">
              <div class="home__content" >

                  <a class="home__link-table"  href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                      Visitar proyecto
                  </a>
                  <h2 class="home__title">
                    1

                              <?php the_time('j M Y'); ?>
    <?php the_title(); ?>
                </h2>
            </div>
        </article>

    <?php if ( comments_open() ) comments_template(); ?>
<?php endwhile; else: ?>
    <?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>
    </div>
</div>

<nav class="navigator">
    <div class="left"><?php next_posts_link('&laquo; Atrás') ?></div>
    <div class="right"><?php previous_posts_link('Adelante &raquo;') ?></div>
</nav>

<?php get_footer(); ?>

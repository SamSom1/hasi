<?php get_header(); ?>

		<section class="home__list">
		<?php $the_query = new WP_Query('showposts=3'); while ($the_query->have_posts()) : $the_query->the_post();?>
			<article class="home__content">
							<h2 class="home__wrap-box">
									<a class="home__enlaces" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_title(); ?>
									</a>
							</h2>
			</article>
		<?php endwhile; ?>
		</section>
	</div>


<?php get_footer(); ?>

<?php get_header(); ?>
<?php get_template_part('partial/navigator'); ?>
<div class="home">
	<div class="home__content">
		<?php $the_query = new WP_Query('showposts=9'); while ($the_query->have_posts()) : $the_query->the_post();?>
		<article class="home__box">
			<div class="home__content">
				<h2 class="home__title">
					<a class="home__enlaces" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
			</div>
		</article>
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>

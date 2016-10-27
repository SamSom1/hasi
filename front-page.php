<?php get_header(); ?>
<?php get_template_part('partial/navigator'); ?>


<div class="home">
	<div class="home__list-content">
		<?php $the_query = new WP_Query('showposts=9'); while ($the_query->have_posts()) : $the_query->the_post();?>
			<?php
			    global $post;
			    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
			?>
		<article class="home__box">

			<div class="home__content" style="background-image: url(<?php echo $src[0]; ?> ) ; ">

				<div class="cover">

				<a class="home__link-table" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					Visitar proyecto
				</a>
				<h2 class="home__title">
						<?php the_title(); ?>
				</h2>
			</div>


		</div>
		</article>

		<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>

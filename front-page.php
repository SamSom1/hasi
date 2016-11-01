<?php get_header('header.php'); ?>
<?php get_template_part('partial/navigator'); ?>


<div class="home">
	<div class="home__list-content">
		<?php
		$args = array (
		'category__in' => array(
    )	);
		 $the_query = new WP_Query($args); while ($the_query->have_posts()) : $the_query->the_post();?>
			<?php
			    global $post;
			    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
					$arrays = wp_get_post_categories($post->ID, array('fields' => 'ids'));
			?>
		<article class="home__box">

			<div class="home__content" value="<?php $val=implode(",", $arrays);
    	echo "$val"; ?>" style="background-image: url(<?php echo $src[0]; ?> ) ; ">

				<div class="cover">

				<a  class="home__link-table" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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

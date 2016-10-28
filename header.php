<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title><?php bloginfo('name'); ?>: <?php bloginfo('description'); ?> <?php wp_title(); ?></title>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- responsive -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!-- mascosuitas -->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php if (is_single()) : while ( have_posts() ) : the_post(); ?>
	<?php endwhile; endif; ?>
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
	<?php if (is_home()): ?>
	<?php endif; ?>
</head>
<body
<?php cc_body_tags() ?>>
<!-- pruebas js -->

<header class="header">
	<?php get_template_part('partial/information'); ?>

	<section class="header__logo">
		<?php if (is_single()) : while ( have_posts() ) : the_post(); ?>

		<section class="header__link-info">
			<a href="#" onclick="$('.nav-oculto').toggleClass('nav-oculto-active');$('.btn-mobile').toggleClass('btn-mobile-active');" class="btn-mobile">
							 info
					</a>
		</section>
			<?php endwhile; endif; ?>
		<div class="header__text-logo">
			<span>
				<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/10/logo.jpeg"/>
				</img>
				<a href="<?php bloginfo('url'); ?>" class="header__logo-link">
					Watchoutfreedom
				</a>
			</span>
		</div>
	</section>
</header>

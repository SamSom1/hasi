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



	<!-- js scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/app.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.scrollTo.min.js"></script>

	<!-- mascosuitas -->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php if (is_single()) : while ( have_posts() ) : the_post(); ?>
	<?php endwhile; endif; ?>
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head();  ?>
	<?php if (is_home()): ?>
	<?php endif; ?>

	<script type="text/javascript">


function handler (){


	$('li').off('click');
	$('li').on('click',function(value){
			// do whatever you want here

			 $cat = $(this).attr('value');
			 sessionStorage.setItem('cat',$cat);

			 HidePosts();
			 CatSelect();
			/*$.ajax({
					url: ajaxpagination.ajaxurl,
					type: 'post',
					data: {
						action: 'ajax_pagination'
					},
					success: function( result ) {
						alert( result );
					}
				})*/

	});

}

function HidePosts(){


					$('.home__content').each(function(){
						var contiene = false;
						var valueC = $(this).attr('value').split(",");
						$.each(valueC,function(index,value){
						//	alert(value + " cat es " + $cat)

							if(value==$cat)
							{
								contiene = true;
							}

						});

						//alert(valueC + "es" + contiene + "cat" + $cat);

						if(contiene==true)
						{
							$(this).parent().show();//.css('display', 'block');
						}
						if(contiene==false) {
							$(this).parent().hide();//.css('display', 'false');
						}
					});
	}



	$(document).ready(function(){

		if(sessionStorage.getItem('cat')!=null)
		{
			$cat = sessionStorage.getItem('cat');
			HidePosts();
			CatSelect();

			sessionStorage.removeItem('cat');
		}

	} );

	function CatSelect(){
		$('.theLink').each(
		function(){
			var back = ["#FFD500","#FF3C00","#02B7A0","#294DFF"];
 			var rand = back[Math.floor(Math.random() * back.length)];

			if($(this).attr('value')== sessionStorage.getItem('cat'))
			{
				$(this).css({"background-color": rand,"border-color": rand,"color": "white"
			});
			}

			if($(this).attr('value')!= sessionStorage.getItem('cat'))
			{$(this).css({"border-color": "", "background-color": "","color": ""});
	}

	})
}
	// or:






	</script>



</head>
<body
<?php cc_body_tags() ?>>
<!-- pruebas js -->

<!-- example scrolldown ! -->

		<section class="header__link-info">
			<a href="#" onclick="$('.nav-oculto').toggleClass('nav-oculto-active');$('.btn-mobile').toggleClass('btn-mobile-active');" class="btn-mobile">
							 info
					</a>
		</section>

<header class="header">
	<?php global $cat; $cat='6'; ?> <!-- categoria seleccionada-->
	<?php  get_template_part('partial/information'); ?>

	<section class="header__logo">
		<?php if (!is_single()) : while ( have_posts() ) : the_post(); ?>

			<?php endwhile; endif; ?>
		<div class="header__text-logo">
			<span id="<?php if (is_single()) {echo 'know_more_front_title' ;} ?>">

			<a href="<?php if (!is_single()) { echo bloginfo('url'); } if (is_single()) {echo '#'; } ?>" class="header__logo-link"  >
				<img style="cursor:pointer;"  src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/10/spot.gif"/>
				</img>	Watchoutfreedom
			</a>
			</span>
		</div>
	</section>
</header>

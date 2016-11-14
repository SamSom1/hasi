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
    <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>

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

//RESTORE TO DEFAULT CAT ALL
	$('.header__text-logo a').on('click',function(value){
			// do whatever you want here

			sessionStorage.removeItem('cat');

	});



}

function HidePosts(){


					$('.home__content').each(function(){
						var contiene = false;
						var valueC = $(this).attr('value').split(",");
						$.each(valueC,function(index,value){
						//	alert(value + " cat es " + $cat)

							if(value==$cat || $cat == -1)
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

	function CatSelect(){
		$('.theLink').each(
		function(){
			var back = ["#FFD500","#FF3C00","#02B7A0","#3399FF","#2980B9","#E74C3C","#16A085","#E67E22","#F39C12","#C0392B"];
			var rand = back[$cat-(Math.floor($cat/10)*10)];

			//var rand = back[Math.floor(Math.random() * back.length)];

			if($(this).attr('value')== sessionStorage.getItem('cat'))
			{
				console.log($cat-(Math.floor($cat/10)*10));
				$(this).css({"background-color": rand,"border-color": rand,"color": "white"
			});
			}

			if($(this).attr('value')!= sessionStorage.getItem('cat'))
			{$(this).css({"border-color": "", "background-color": "","color": ""});
	}

	})
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



    $(document).bind("mobileinit", function () {
        // jQuery Mobile's Ajax navigation does not work in all cases (e.g.,
        // when navigating from a mobile to a non-mobile page), especially when going back, hence disabling it.
        $.extend($.mobile, {
            ajaxEnabled: false
        });
    }); 
	// or:






	</script>



</head>
<body
<?php cc_body_tags() ?>>
<!-- pruebas js -->

<!-- example scrolldown ! -->
<?php if (!is_single()) : while ( have_posts() ) : the_post(); ?>
		<section class="header__link-info">
			<a href="#" onclick="$('.nav-oculto').toggleClass('nav-oculto-active');$('.btn-mobile').toggleClass('btn-mobile-active');" class="btn-mobile">
							 info
					</a>
		</section>
	<?php endwhile; endif; ?>

<header class="header">
	<?php global $cat; $cat='6'; ?> <!-- categoria seleccionada-->
	<?php  get_template_part('partial/information'); ?>

	<section class="header__logo">

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

<section class="header__box">
	<h1 class="header__title">
		<a href="<?php bloginfo('url'); ?>" class="header__title-link">
			The collective idea studio
		</a>
	</h1>
</section>
<nav class="header__nav">
	<ul class="header__list">
		<?php wp_list_categories('title_li'); ?>
	</ul>
</nav>
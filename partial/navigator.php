<div id="front_nav"></div>
<section class="header__box" >
	<h1 class="header__title" id="altura_nav">
		The collective idea studio.
	</h1>
</section>
<nav class="header__nav" >
	<ul class="header__list" >

<!--		<?php
		wp_list_categories('title_li'); ?>-->
		<?php

		$address = '#';
		$onclick = 'return false';

		if(is_single()){
			$address= get_bloginfo('url');
			$onclick = '';
		}
		if(!is_single())
		{
			$address='#';
			$onclick = 'return false';

		}

	 $values = array(
		 /*`orderby` => `name`,
		 `order` => `ASC`,
		 `echo` => 1,
		 `selected` => $kat = get_query_var( `cat` ),
		 `name` => 'cat',
		 `id` => ``,*/
		);
 $categories = get_categories($values);
 foreach ($categories as $category) {

	 $option = '<li  value="'.$category->cat_ID.'"><a href="'.$address.'" class="theLink" onclick="handler(this.value);'.$onclick.'" value="'.$category->cat_ID.'">';
	 $option .= $category->cat_name;
	// $option .= $category->cat_ID;;
	 $option .= '</a></li>';
	 echo $option;
 }

	if(!is_single())
		{
		 $option = '<li  value="-1"><a href="'.$address.'" class="theLink" onclick="handler(this.value);'.$onclick.'" value="-1">';
	 $option .= "all";
	// $option .= $category->cat_ID;;
	 $option .= '</a></li>';
	 echo $option;	

		}


?>
	</ul>
</nav>

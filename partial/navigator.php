<section class="header__box">
	<h1 class="header__title">
		The collective idea studio.
	</h1>
</section>
<nav class="header__nav">
	<ul class="header__list">
		<?php
		wp_list_categories('title_li'); ?>
		<?php
	 $values = array(
		 `orderby` => `name`,
		 `order` => `ASC`,
		 `echo` => 1,
		 `selected` => $kat = get_query_var( `cat` ),
		 `name` => 'cat',
		 `id` => ``,
		 `taxonomy` => `persons`
		);
 $categories = get_categories($values);
 foreach ($categories as $category) {
	 $option = '<li value="'.$category->cat_ID.'"><a href="#" class="theLink" onclick=" handler(this.value); return false;" value="'.$category->cat_ID.'">';
	 $option .= $category->cat_name;
	 $option .= $category->cat_ID;;
	 $option .= '</a></li>';
	 echo $option;
 }

?>
	</ul>
</nav>

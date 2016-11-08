<nav class="header__nav">
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
		);
 $categories = get_the_category();
 foreach ($categories as $category) {

	 $option = '<li value="'.$category->cat_ID.'"><a href="'.$address.'" class="theLink" onclick="handler(this.value);'.$onclick.'" value="'.$category->cat_ID.'">';
	 $option .= $category->cat_name;
	// $option .= $category->cat_ID;;
	 $option .= '</a></li>';
	 echo $option;
 }

?>
	</ul>
</nav>

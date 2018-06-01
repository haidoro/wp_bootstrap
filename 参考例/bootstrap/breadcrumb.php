<ul class="breadcrumb">
	<li class="breadcrumb-item"><a href="<?php echo(site_url()); ?>">Home</a></li>
	<?php if(is_single() || is_category()):
		if(is_single()):
			$category_data = get_the_category();
			$cat = $category_data[0]->cat_ID;
		endif;
		$categorys = explode('%%%',get_category_parents($cat,true,'%%%'));
		foreach($categorys as $category):
			if($category):
			echo('<li class="breadcrumb-item">'.$category.'</li>');
			endif;
		endforeach;?>
	<?php elseif(is_page()): 
		 foreach(array_reverse(get_post_ancestors($post->ID)) as $v): ?>
			<li class="breadcrumb-item"><a href="<?php echo(get_page_link($v)); ?>"><?php echo(get_page($v)->post_title); ?></a></li>
		<?php endforeach;
		 endif; ?>
	<?php if(!is_category()): ?>
		<li class="breadcrumb-item"><?php the_title(); ?></li>
	<?php endif; ?>
</ul>
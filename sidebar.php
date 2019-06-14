<aside>

	<?php if(get_post_type() == 'post' ){ //Sidebar Blog Pages  ?>
		<div class="search-form">
			<form action="<?php bloginfo('url'); ?>" id="search-form" method="get"><input type="text" placeholder="" name="s" id="s" class="search-input"><input type="submit" value="Search" class="button">
			</form>
		</div>
		<div class="sidebar-block blog-block">
			<div class="sb-inside">
				<div class="sb-heading">Categories</div>
				<ul>
					<?php wp_list_categories( array(
						'title_li' 	=> '',
						'depth'		=> 1,
							// 'exclude'	=> 26
					) ); ?>
				</ul>

			</div>
		</div>
		<div class="sidebar-block blog-block">
			<div class="sb-inside">
				<div class="sb-heading">Archives</div>
				<ul class="list-items">
					<?php  wp_get_archives( array(
						'type'            => 'yearly',
						'limit'           => '',
						'before'          => '',
						'after'           => '',
						'show_post_count' => false,
						'echo'            => 1,
						'order'           => 'DESC'
					)); ?>
				</ul>

			</div>
		</div>

	<?php } ?>

</aside>
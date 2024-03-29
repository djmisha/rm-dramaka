<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="maximum-scale=5.0, user-scalable=yes, width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title(""); ?></title>

	<?php if(!is_404()): ?>
		<?php miniCSS::url( 'https://fonts.googleapis.com/css?family=Fjalla+One|Roboto+Condensed' ); ?>
	<?php endif; ?>
	
	<?php wp_head()?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	


	

</head>

<?php bodyClass(); ?>

<a href="#skiptomaincontent" style="display:none;">Skip to main content</a>

<header class="site-header <?php echo is_front_page() ? 'front-header' : 'int-header'; ?>" <?php get__header__image(); ?> >

		
	<!-- <div class="nav-bar">
		<div class="menu-trigger">
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="trigger-text">MENU</div>
		</div>
		<section>
			<div class="two-up-nav">
				<div class="nav-bar-phones">
					<?php if(have_rows('locations', 'option')): ?>
						<?php while(have_rows('locations', 'option')): the_row(); ?>
							<a href="<?php the_sub_field('phone_link'); ?>" class="head-phone track-outbound" data-label="Phone - Header"><i class="fas fa-phone-volume"></i> Call <span><?php the_sub_field('phone'); ?></span></a>
							<a href="<?php the_sub_field('text_link'); ?>" class="head-text track-outbound" data-label="Phone - Header"><i class="fas fa-comment-alt-lines"></i> Text <span><?php the_sub_field('text'); ?></span></a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div> 
				<nav>
					<?php wp_nav_menu( array(
						'menu' 		=> 'Main',
						'container_class' => 'menu-wrap menu-is-closed',
						'menu_id'	=> 'menu-main',
						'menu_class' => 'main-menu',
					)); ?>
				</nav> 
			</div>
		</section>
	</div> -->

</header> 

<?php if(!is_front_page() ): // Inside Page and H1 ?>
	<section class="page-title">
		<?php if(is_front_page()): ?>
		<h1><?php // do nothing if homepage  ?></h1>
		<?php elseif(this_is('gallery-case')): ?>
		<?php $category_title =  get_the_title($post->in_cat_ID); ?>
		<h1><?//php echo $category_title ?> Smile Gallery</h1>
		<?php elseif(this_is('gallery-child')): ?>
		<?php $category_title =  get_the_title($post->in_cat_ID); ?>
		<h1 id="smilegallery"><?php //echo $category_title ?> Smile Gallery</h1>
		<?php elseif(this_is('gallery')): ?>
		<h1>Smile Gallery</h1>
		<?php elseif (is_archive() =='newsroom'): ?>
		<div class="heading-text">Newsroom</div>
		<?php elseif (is_search()): ?>
		<div class="heading-text">Search Results</div>
		<?php elseif (is_home() or is_archive()): ?>
		<div class="heading-text">Blog</div>
		<?php elseif (is_single()): ?>
		<div class="heading-text">Blog</div>
		<?php else: ?> 
		<h1><?the_title();?></h1>
		<?php endif; ?>
	<div class="split-line"></div>
	</section>
<?php endif; ?>


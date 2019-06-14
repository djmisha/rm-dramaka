<?php
	// Template Name: Home
?>

<?php get_header()?>

<div class="welcome-parallax will-parallax parallax-welcome b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-welcome.jpg">
	<div class="nav-logo">
		<a href="<?php bloginfo('url'); ?>">
			<h1>
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Dr. Akamata">
			</h1>
		</a>
	</div>
	<div class="welcome" id="skiptomaincontent">
		<div class="welcome-cta">
			<h2><?php the_field('welcome_headline'); ?></h2>
			<h3><?php the_field('welcome_subheadline'); ?></h3>
			<div> <a href="#about" class="button"> <i class="far fa-angle-down"></i> </a> </div>
		</div>
	</div>
</div>


<div class="splitter" id="about">
	<div class="home-about" >
		<h2><?php the_field('about_headline'); ?></h2>
		<?php the_field('about_content'); ?>
	</div>

	<div class="home-results">
		<h2><?php the_field('results_headline'); ?></h2>
		<?php the_field('results_content'); ?>
	</div>
</div>


<?php get_footer()?>
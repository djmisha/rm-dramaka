<?php get_header()?>

<section class="interior">
	<article class="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<article class="post-snippet">
				<div class="excerpt">
					<h2 class="blog-title">
						<a href="<?the_permalink();?>">
							<?the_title();?>
						</a>
					</h2>
					<div class="meta-data"><?php the_time('M');?> <?php the_time('j');?>, <?php the_time('Y'); ?></div>
					<div class="para">
						<a href="<?the_permalink();?>">
							<?php my_excerpt(60); ?> 
						</a>
					</div>
					<div class="meta-cats"><strong>Category:</strong> <span><?php the_category(', '); ?></span></div>
				</div>
			</article>
			<?endwhile; endif;?>
			<div class="blog-pagination">
				<?php mishas_happenstance_content_nav( '' ); ?>
			</div>
		</article>
		<?php get_sidebar()?>
	</section>
	<?php wp_reset_postdata(); ?>
	<?php get_footer()?>
<?php get_header('page'); ?>

<div class="container-fluid-single">
    
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<?php echo do_shortcode( the_content() ); ?>


   

		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

</div>

	
<?php get_footer(); ?>
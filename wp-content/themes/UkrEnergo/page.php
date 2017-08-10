<?php get_header('page'); ?>

		<div class="content">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		

		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

		</div>
	
<?php get_footer(); ?>
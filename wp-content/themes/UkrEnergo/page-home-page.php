<?php get_header(); ?>



<?php get_template_part( 'template-parts/category/main', 'page' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<?php echo do_shortcode(the_content());?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_template_part('template-parts/home-page/companies', 'partners') ?>

<?php get_template_part( 'template-parts/home-page/resive', 'features' ); ?>

<?php get_template_part('template-parts/home-page/resive','contacts' ); ?>



<?php get_footer(); ?>
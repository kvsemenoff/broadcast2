<?php get_header(); ?>
<div class="container">
		<h2 class="h2_theme_rosa h2_pink command__topcaption"><?php the_title(); ?></h2>
		<p class="command__text">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?></p>
	</div>
<?php get_footer(); ?>
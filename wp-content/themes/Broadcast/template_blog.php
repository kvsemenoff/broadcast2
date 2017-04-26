<?php
/*
Template Name: Наш блог
*/
?>
<?php get_header(); ?>

<div class="container">
	<h2 class="h2_theme_rosa h2_pink command__topcaption"><?php the_title(); ?></h2>
	<div class="row">
		<?php
		$wp_query = new WP_Query();
		$wp_query->query('showposts=10000');
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content();
		endwhile;
		wp_reset_query();                
		?>
	</div>
</div>
<?php get_footer(); ?>
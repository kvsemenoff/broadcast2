<?php get_header(); ?>
<?php get_template_part( 'breadcrumbs' );  ?>

<section class="section section_padding dfpadding"> 
	<div class="container">
		<h1 class="db-our-h1"><?php the_title(); ?></h1>
		<div class="dftxtbottom dfwarmpd">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
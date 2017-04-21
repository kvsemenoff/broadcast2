<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/carousel/css/carousel.css" />
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>

</head>
<body>

	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/jquery.carousel-1.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/carousel/jquery.carousel-1.1.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/carousel/jquery.carousel-1.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/carousel/jquery.mousewheel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/db.js"></script>
	<div class="dd-menu-mobile">
	<div class="js-but">
		<img src="<?php echo get_template_directory_uri(); ?>/img/burg.png" alt="">
	</div>
</div>

<div id="js-menu">
	<section  class="section section_padding dd-header-top">
		<div class=" container">
			<div class="row">
				<div class="col-md-3">
					<div class="dd-logo_h">
						<a href="/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="dd-menu-top_h">
						<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'Main menu', 
							'container'       => flase, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'menu', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="main-menu">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="dd-phone_h">
						<span>+7 (351) <span> 555-33-22</span></span><br>
						<span>Звоните ежедневно с 9:00 до 21:00</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section_padding dd-header-bottom">
		<div class=" container">
			<div class="row">
				<div class="col-md-12">
					<div class="dd-menu-bottom">
						<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'Second menu', 
							'container'       => flase, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'menu', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="main-menu">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


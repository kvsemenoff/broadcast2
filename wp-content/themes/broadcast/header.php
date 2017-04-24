<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/libs.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	
	<?php wp_head(); ?>
</head>
<body>
<?php if (is_home()){ ?>
<div class="header-top">
	<div class="top-line clearfix">
		<div class="container">
			<div class="top-line__logo-block">
				<a href="/" class="top-line__logo"></a>
			</div>
			<div class="top-line__right">
				<div class="menu-wrap">
					<div class="menu-button">
						<i class="menu-button__bg menu-button__bg_top"></i>
						<i class="menu-button__bg menu-button__bg_mid"></i>
						<i class="menu-button__bg menu-button__bg_bot"></i>
					</div>
					<nav class="menu">
						<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'Главное меню', 
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
							'items_wrap'      => '<ul class="main-menu clearfix">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>

						</ul>
					</nav>
				</div>
				<div class="top-line__phone clearfix">
					<span class="top-line__number">+7 (921) <b>000-12-05</b></span>
					<div class="top-line__btn">
						<a href="#modal__form" class="fancybox button button_theme_rosa">Заказать звонок</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-top__text top-text">
		<div class="container">
			<h1 class="top-text__title">Организация трансляций <br>и многокамерная видеосъемка <br> мероприятий</h1>
			<span class="top-text__command">от 1 до 16 камер. Трансляции на экран и в интернет,<br> проведение телемостов в Санкт-Петербурге</span>
			<span class="scroll-icon">Крутите вниз</span>
		</div>
	</div>
</div>

<?php }else { ?>

<div class="header-top header-top_inner">
	<div class="top-line clearfix">
		<div class="container">
			<div class="top-line__logo-block">
				<a href="/" class="top-line__logo"></a>
			</div>
			<div class="top-line__right">
				<div class="menu-wrap">
					<div class="menu-button">
						<i class="menu-button__bg menu-button__bg_top"></i>
						<i class="menu-button__bg menu-button__bg_mid"></i>
						<i class="menu-button__bg menu-button__bg_bot"></i>
					</div>
					<nav class="menu">
						<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'Главное меню', 
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
							'items_wrap'      => '<ul class="main-menu clearfix">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>
					</nav>
				</div>
				<div class="top-line__phone clearfix">
					<span class="top-line__number">+7 (921) <b>000-12-05</b></span>
					<div class="top-line__btn">
						<a href="#modal__form" class="fancybox button button_theme_rosa ">Заказать звонок</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="navigation">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
		</div>
	</div>
</div>

<?php } ?> 
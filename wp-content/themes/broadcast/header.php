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
				<a href="#" class="top-line__logo"></a>
			</div>
			<div class="top-line__right">
				<div class="menu-wrap">
					<div class="menu-button">
						<i class="menu-button__bg menu-button__bg_top"></i>
						<i class="menu-button__bg menu-button__bg_mid"></i>
						<i class="menu-button__bg menu-button__bg_bot"></i>
					</div>
					<nav class="menu">
						<ul class="main-menu clearfix">
							<li>
								<ul class="clearfix">
									<li><a class="mobile-nav-active" href="#">Главная</a></li>
									<li><a href="#">Услуги</a></li>
									<li><a href="#">Проекты</a></li>
									<li><a href="#">Команда</a></li>
									<li><a href="#">Контакты</a></li>
								</ul>
							</li>
							<li class="point-active">
								<a href="#">Главная</a>
								<ul>
									<li><a href="#"><span>Онлайн трансляции</span></a></li>
									<li><a href="#">Онлайн трансляции в интернет</a></li>
									<li><a href="#">Трансляции на экран</a></li>
									<li><a href="#">Проведение телемостов</a></li>
									<li><a href="#">Платные видеотрансляции</a></li>
									<li><a href="#"><span>Многокамерная видеосъемка</span></a></li>
									<li><a href="#">Съемка концертов</a></li>
									<li><a href="#">Съемка лекций и семинаров</a></li>
									<li><a href="#">Съемка презентаций</a></li>
									<li><a href="#">Съемка спортивных мероприятий</a></li>
									<li><a href="#"><span>Аренда ПТС</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Услуги</a>
								<ul>
									<li><a href="#"><span>Аренда ПТС</span></a></li>
									<li><a href="#">Съемка лекций и семинаров</a></li>
									<li><a href="#">Съемка презентаций</a></li>
									<li><a href="#">Съемка спортивных мероприятий</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Проекты</a>
								<ul>
									<li><a href="#"><span>Многокамерная видеосъемка</span></a></li>
									<li><a href="#">Онлайн трансляции в интернет</a></li>
									<li><a href="#">Съемка спортивных мероприятий</a></li>
									<li><a href="#"><span>Аренда ПТС</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Команда</a>
								<ul>
									<li><a href="#"><span>Аренда ПТС</span></a></li>
									<li><a href="#">Онлайн трансляции в интернет</a></li>
									<li><a href="#">Съемка спортивных мероприятий</a></li>
									<li><a href="#"><span>Многокамерная видеосъемка</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Контакты</a>
								<ul>
									<li><a href="#"><span>Многокамерная видеосъемка</span></a></li>
									<li><a href="#">Онлайн трансляции в интернет</a></li>
									<li><a href="#">Трансляции на экран</a></li>
									<li><a href="#">Проведение телемостов</a></li>
								</ul>
							</li>
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
				<a href="#" class="top-line__logo"></a>
			</div>
			<div class="top-line__right">
				<div class="menu-wrap">
					<div class="menu-button">
						<i class="menu-button__bg menu-button__bg_top"></i>
						<i class="menu-button__bg menu-button__bg_mid"></i>
						<i class="menu-button__bg menu-button__bg_bot"></i>
					</div>
					<nav class="menu">
						<ul class="main-menu clearfix">
							<li>
								<ul class="clearfix">
									<li><a class="mobile-nav-active" href="#">Главная</a></li>
									<li><a href="#">Услуги</a></li>
									<li><a href="#">Проекты</a></li>
									<li><a href="#">Команда</a></li>
									<li><a href="#">Контакты</a></li>
								</ul>
							</li>
							<li class="point-active">
								<a href="#">Главная</a>
								<ul>
									<li><a href="#"><span>Онлайн трансляции</span></a></li>
									<li><a href="#"">Онлайн трансляции в интернет</a></li>
									<li><a href="#"">Трансляции на экран</a></li>
									<li><a href="#"">Проведение телемостов</a></li>
									<li><a href="#"">Платные видеотрансляции</a></li>
									<li><a href="#"><span>Многокамерная видеосъемка</span></a></li>
									<li><a href="#"">Съемка концертов</a></li>
									<li><a href="#"">Съемка лекций и семинаров</a></li>
									<li><a href="#"">Съемка презентаций</a></li>
									<li><a href="#"">Съемка спортивных мероприятий</a></li>
									<li><a href="#"><span>Аренда ПТС</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Услуги</a>
								<ul>
									<li><a href="#"><span>Аренда ПТС</span></a></li>
									<li><a href="#"">Съемка лекций и семинаров</a></li>
									<li><a href="#"">Съемка презентаций</a></li>
									<li><a href="#"">Съемка спортивных мероприятий</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Проекты</a>
								<ul>
									<li><a href="#"><span>Многокамерная видеосъемка</span></a></li>
									<li><a href="#"">Онлайн трансляции в интернет</a></li>
									<li><a href="#"">Съемка спортивных мероприятий</a></li>
									<li><a href="#"><span>Аренда ПТС</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Команда</a>
								<ul>
									<li><a href="#"><span>Аренда ПТС</span></a></li>
									<li><a href="#"">Онлайн трансляции в интернет</a></li>
									<li><a href="#"">Съемка спортивных мероприятий</a></li>
									<li><a href="#"><span>Многокамерная видеосъемка</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Контакты</a>
								<ul>
									<li><a href="#"><span>Многокамерная видеосъемка</span></a></li>
									<li><a href="#"">Онлайн трансляции в интернет</a></li>
									<li><a href="#"">Трансляции на экран</a></li>
									<li><a href="#"">Проведение телемостов</a></li>
								</ul>
							</li>
						</ul>
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
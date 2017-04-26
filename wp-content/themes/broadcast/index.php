<?php get_header(); ?>


<div class="whattodo whattodo_bg_img">
	<div class="whattodo__container">
		<div class="whattodo__leftbox">
			<div id="whattodo__owl_slider">
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="whattodo__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
			</div>
			<div class="command__counter">
				<span class="what__counter_change">1</span>/
				<span class="command__counter_all">12</span>
			</div>
		</div>
		<?php $query = new WP_Query('page_id=133');
				$query->the_post(); ?>
		<div class="whattodo__rightbox">
			<h2 class="h2_theme_rosa h2_pink whattodo__topcaption">Что мы делаем</h2>
			<div class="whattodo__txtbox whattodo__txtbox_bg1">
				<h4 class="whattodo__txtbox_caption"><?php 	echo get_field('1'); ?></h4>
				<span class="whattodo__text"><?php 	echo get_field('1.1'); ?></span>
			</div>
			<div class="whattodo__txtbox whattodo__txtbox_bg2">
				<h4 class="whattodo__txtbox_caption"><?php 	echo get_field('2'); ?></h4>
				<span class="whattodo__text"><?php 	echo get_field('2.1'); ?></span>
			</div>
			<div class="whattodo__txtbox whattodo__txtbox_bg3">
				<h4 class="whattodo__txtbox_caption"><?php 	echo get_field('3'); ?></h4>
				<span class="whattodo__text"><?php 	echo get_field('3.1'); ?></span>
			</div>
			<div class="whattodo__txtbox whattodo__txtbox_bg4">
				<h4 class="whattodo__txtbox_caption"><?php 	echo get_field('4'); ?></h4>
				<span class="whattodo__text"><?php 	echo get_field('4.1'); ?></span>
			</div>
		</div>
	
	</div>	
</div>

<div class="video">
	<div class="container">
		<h2 class="h2_theme_rosa h2_pink whattodo__topcaption">Посмотрите видео о нас</h2>
		<div class="video__block">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/4P0i8QlQ6fE" allowfullscreen></iframe>
		</div>
	</div>	
</div>

<div class="extra" name="projects" id="projects">
  <div class="container">
    <h2 class="h2 h2_theme_rosa h2_pink h2_extra">Дополнительные возможности</h2>
    <p class="extra_subtitle">Только за прошлый год мы организовали более 50 онлайн-трансляций в Москве, Санкт-Петербурге и регионах. Среди наших клиентов десятки крупных компаний. Присоединяйтесь!</p>
    <div class="extra_img hidden-sm hidden-xs hidden-lg">
      <img src="<?php echo get_template_directory_uri(); ?>/img/tablet-medium.png" alt="" class="extra_image">
    </div>
    <div class="row extra_items_row col-lg-4 extra_large">
      <div class="extra_item col-md-4 col-lg-12"><img src="<?php echo get_template_directory_uri(); ?>/img/adaptive-m.png" alt="" class="extra_item_img"><p class="extra_item_text">Адаптивный интерфейс, подходящий для любого сайта</p></div>
      <div class="extra_item col-md-4 col-lg-12"><img src="<?php echo get_template_directory_uri(); ?>/img/player-m.png" alt="" class="extra_item_img"><p class="extra_item_text">Брендированный плеер
  с логотипом вашей компании</p></div>
      <div class="extra_item col-md-4 col-lg-12"><img src="<?php echo get_template_directory_uri(); ?>/img/movie-m.png" alt="" class="extra_item_img"><p class="extra_item_text">Графическое оформление
  плеера - титры, бегущая строка</p></div>
    </div>
    <div class="col-lg-4 extra_img hidden-sm hidden-xs hidden-md">
      <img src="<?php echo get_template_directory_uri(); ?>/img/tablet-largepng.png" alt="" class="extra_image">
    </div>
    <div class="row col-lg-4 extra_large extra_large_last">
      <div class="extra_item col-md-4 col-lg-12"><img src="<?php echo get_template_directory_uri(); ?>/img/networking-m.png" alt="" class="extra_item_img"><p class="extra_item_text">Неограниченное количество подключенных участников</p></div>
      <div class="extra_item col-md-4 col-lg-12"><img src="<?php echo get_template_directory_uri(); ?>/img/wallet-m.png" alt="" class="extra_item_img"><p class="extra_item_text">Регистрация, возможность реализации платных трансляций</p></div>
      <div class="extra_item col-md-4 col-lg-12"><img src="<?php echo get_template_directory_uri(); ?>/img/message-m.png" alt="" class="extra_item_img"><p class="extra_item_text">Возможность для интерактива - чаты, опросы, голосования</p></div>
    </div>
    <div class="col-md-12 extra_platforms">
      <p class="extra_platforms_watch">Просмотр трансляции на любой платформе:</p>
      <div class="extra_platforms_wrap">
        <a href="#" class="extra_platforms_item extra_platforms_ios"></a>
        <a href="#" class="extra_platforms_item extra_platforms_windows"></a>
        <a href="#" class="extra_platforms_item extra_platforms_android"></a>
      </div>
    </div>
  </div>
</div>

<div class="online online_bg_img">
	<div class="online__container">
		<h2 class="h2_theme_rosa h2_pink online__topcaption">СТОИМОСТЬ ОНЛАЙН ТРАНСЛЯЦИИ НА ЭКРАН</h2>
		<div class="online__camers">
			<?php //wp_reset_query(); ?>
			<?php //new WP_Query('post_type=Price'); ?>
			<?php //while ( have_posts() ) : the_post(); ?>
			<?php $acsessuar = new WP_Query( array( 'post_type' => 'Price') ); ?>

 			<?php while ( $acsessuar->have_posts() ) : $acsessuar->the_post(); ?>
					<div class="online__cam_box">	
					<h4 class="online__boxcaption"><?php the_title(); ?></h4>
					<span class="online__boxsub"><?php 	echo get_field('краткое_описание'); ?></span>
					<p class="online__text"><?php 	echo get_field('описание'); ?></p>
					<span class="online__pricetext">от <em><?php 	echo get_field('цена'); ?></em><i class="fa fa-rub" aria-hidden="true"></i></span>
					<a href="#modal__form" class="button button_theme_rosa button_order fancybox">Заказать</a>
				</div>
				<?php endwhile; ?>
<?php wp_reset_postdata(); ?> 
			<?php //endwhile;  ?>
			<?php //wp_reset_query(); ?>
			<!-- <div class="online__cam_box">
				<h4 class="online__boxcaption">2 КАМЕРА</h4>
				<span class="online__boxsub">Для небольших площадок</span>
				<p class="online__text">Персонал на видеоплощадке: <br> 1 видеооператор, 1 видеоинженер</p>
				<span class="online__pricetext">от <em><?php 	echo get_field('camera2'); ?></em><i class="fa fa-rub" aria-hidden="true"></i></span>
				<a href="#modal__form" class="button button_theme_rosa button_order fancybox">Заказать</a>
			</div>
			<div class="online__cam_box">
				<h4 class="online__boxcaption">3 КАМЕРА</h4>
				<span class="online__boxsub">Мероприятия с вопросами из зала</span>
				<p class="online__text">Персонал на видеоплощадке: <br>1 видеооператор, 1 видеоинженер, режиссер эфира</p>
				<span class="online__pricetext">от <em><?php 	echo get_field('camera3'); ?></em><i class="fa fa-rub" aria-hidden="true"></i></span>
				<a href="#modal__form" class="button button_theme_rosa button_order fancybox">Заказать</a>
			</div>
			<div class="online__cam_box">
				<h4 class="online__boxcaption">5 КАМЕР</h4>
				<span class="online__boxsub">Крупные мероприятия</span>
				<p class="online__text">Персонал на видеоплощадке: <br>
				5 видеооператоров, 2 видеоинженера, режиссер эфира, помощник режиссера</p>
				<span class="online__pricetext">от <em><?php 	echo get_field('camera4'); ?></em><i class="fa fa-rub" aria-hidden="true"></i></span>
				<a href="#modal__form" class="button button_theme_rosa button_order fancybox">Заказать</a>
			</div> -->
			
		</div>
				<?php/* endwhile;*/ ?>
		<div class="online__textbottom">
			<h4 class="online__textbottom_caption">Указана минимальная комплектация.</h4>
			<p class="online__textbottom_txt">Дополнительное ообрудование: операторские краны, тележки, lightbridge, экраны, освещение на площадке и прочее - обсуждается дополнительно.
			Для индивидуального расчета мероприятия заполните форму и укажите все детали, пожелания и требуемые опции.</p>
			<a href="#modal__form" class="button button_theme_rosa fancybox">Получить КП и смету</a>
		</div>
	</div>
</div>	
<?php $query = new WP_Query('page_id=95');
		$query->the_post();
 ?>
<?php /*while ( $query->have_posts() ) :*/ ?>
	
	
<div class="command command_bg_color" name="command" id="command">
	<div class="command__container">
		<div class="command__textbox">
			<h2 class="h2_theme_rosa h2_pink command__topcaption"><?php the_title(); ?></h2>
			<p class="command__text"><?php the_content(); ?></p>
		</div>
		<?php global $dynamic_featured_image; ?>
     <?php $featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() );  ?>

     
     <div class="command__slider">
     	<div id="command__owl_carousel">
     		<?php 
     		//$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
     		foreach($featured_images as $featured_image) { ?>

     		<div class="item">
     			<div class="command__slider_img">
     				<img src="<?php echo $featured_image['full']; ?>" alt="">
     			</div>
     		</div>
     		<?php } ?>
				<!-- <div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>/
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div>
				<div class="item">
					<div class="command__slider_img">
						<img src="<?php //echo get_template_directory_uri(); ?>/img/slidercommand.jpg" alt="">
					</div>
				</div> -->
			</div>
			<div class="command__counter">
				<span class="command__counter_change">1</span>/
				<span class="command__counter_all">12</span>
			</div>
		</div>
		
	</div>
	<div class="clearfix"></div>
</div>
<?php /*endwhile;*/ ?>
<?php wp_reset_postdata(); ?> 

<div class="our">
	<div class="container">
		<h2 class="h2_theme_rosa h2_pink whattodo__topcaption">Наши заказчики</h2>
		<div class="our__customer customer">
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/herbalife-medium.png" alt=""></a>
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/ros-medium.png" alt=""></a>
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/rzd-medium.png" alt=""></a>
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/remar-medium.png" alt=""></a>
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/tvch-medium.png" alt=""></a>
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/tricolor-meidum.png" alt=""></a>
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/rostelecom-medium.png" alt=""></a>
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/main-division.png" alt=""></a>
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/eco-medium.png" alt=""></a>
			<a href="#" class="customer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/bm-medium.png" alt=""></a>
		</div>
	</div>	
</div>

<?php get_footer(); ?>

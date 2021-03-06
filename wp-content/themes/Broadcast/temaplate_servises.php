<?php
/*
Template Name: Услуги
*/
?>

<!-- Здесь html/php код шаблона -->
<?php get_header(); ?>
	<div class="aero-top">
	<div class="container clearfix">
	
		<?php get_sidebar(); ?>
		<?php 
	// $query = new WP_Query('page_id=5');
	// $query->the_post();
	// the_title();
	// the_content();
    // Start the Loop.
		while ( have_posts() ) : the_post();?>
		<div class="aero-top__content">
			<div class="content__title content__title_decstop">
				<h2 class="h2_theme_rosa h2_pink h2_inner_page"><?php the_title(); ?></h2>
				<span class="content__descr"><?php the_excerpt(); ?></span>
			</div>
			<div class="content__inner clearfix">
			<?php global $dynamic_featured_image; ?>
     <?php $featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() );  ?>
			<?php 
			$query = new WP_Query('page_id=5');
			$query->the_post();
			foreach($featured_images as $featured_image) { ?>
     		
				<div class="content__img-wrap">
					<img src="<?php echo $featured_image['full']; ?>" class="content__img" alt="">
				</div>
			<?php } ?>
				<div class="content__text-wrap">
					<div class="content__title content__title_mobile">
						<h2 class="h2_theme_rosa h2_pink h2_inner_page"><?php the_title(); ?></h2>
						<span class="content__descr"><?php the_excerpt(); ?></span>
					</div>
					<p class="content__text"><?php the_content(); ?></p>
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="price_aero price_aero_theme_rosa">
	<div class="aero__container aero__container__theme_rosa">
		<h2 class="h2_theme_rosa h2_pink h2_inner_page price_aero__caption">Стоимость проведения аэрофотосъемки
и оборудования</h2>
		<p class="price_aero__text">Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое.
		Лежа на панцирнотвердой спине, он видел, стоило ему приподнять голову,
		свой коричневый, выпуклый, разделенный дугообразными чешуйками живот, на верхушке которого еле держалось готовое вот-вот окончательно сползти одеяло. Его многочисленные, убого тонкие по сравнению с остальным телом ножки беспомощно копошились у него перед глазами.</p>
		<p class="price_aero__text">«Что со мной случилось?» – подумал он. Это не было сном. Его комната, настоящая, разве что слишком маленькая, но обычная комната, мирно покоилась в своих четырех хорошо знакомых стенах. Над столом, где были разложены распакованные образцы сукон – Замза был коммивояжером, – висел портрет, который он недавно вырезал из иллюстрированного журнала и вставил в красивую золоченую рамку. На портрете была изображена дама в меховой шляпе, в которой целиком исчезала ее рука.</p>
	</div>

</div>



<div class="aero aero_theme_rosa">
	<div class="aero__container aero__container_theme_rosa">

		<div class="aero__imgbox">
			<h2 class="aero__caption__mobileversion"><?php the_title(); ?></h2>
			<span class="aero__cap_sub"><?php the_excerpt(); ?></span>
			<div class="aero__img"><img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt=""></div>
			<span class="aero__txt_sub">Ноябрь 2016, ресторан «Бали»</span>
		</div>

		<div class="aero__textbox">
			<h2 class="h2_theme_rosa h2_pink h2_inner_page aero__caption">Аэрофотосъемка</h2>
			<p class="aero__txt"><?php the_content(); ?> </p>
						
		</div>
		<div class="clearfix"></div>	
	</div>
</div>	


<div class="foto_job foto_job_theme_rosa">
	<div class="foto_job__container">
		<h2 class="h2_theme_rosa h2_pink h2_inner_page filming__caption">Фотографии процесса нашей работы</h2>
		<div class="foto_job__img">
			<a class="single-image" href="<?php echo get_template_directory_uri(); ?>/img/whatimg.png"><img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt=""></a>
		</div>
		<div class="foto_job__img">
			<a class="single-image" href="<?php echo get_template_directory_uri(); ?>/img/whatimg.png"><img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt=""></a>
		</div>
		<div class="foto_job__img">
			<a class="single-image" href="<?php echo get_template_directory_uri(); ?>/img/whatimg.png"><img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt=""></a>
		</div>
	</div>
</div>

<div class="filming filming__theme_rosa">
	<div class="container">
		<h2 class="h2_theme_rosa h2_pink h2_inner_page filming__caption">И процесс съемки</h2>
		<div class="filming__slider">
			<div id="filming__owl_slider">
				<div class="item">
					<div class="filming___img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="filming___img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="filming___img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="filming___img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="filming___img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/whatimg.png" alt="">
					</div>
				</div>
			</div>
			<div class="command__counter">
				<span class="command__counter_change">1</span>/
				<span class="command__counter_all">5</span>
			</div>
			<p class="filming__textbottom">Проведение аэрофотосъемки ЖК в Сертолово для компании «Балтийский лизинг»</p>
		</div>
	</div>
</div>



<div class="video video_innerpage">
	<div class="container">
		<h2 class="h2_theme_rosa h2_pink h2_inner_page whattodo__topcaption">Посмотрите видео о нас</h2>
		<div class="video__block">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/4P0i8QlQ6fE" allowfullscreen></iframe>			
		</div>
		<div class="video_innerpage_textbox">
				<h4 class="video__textcaption">Стоимость проведения аэрофотосъемки и оборудования</h4>
				<p class="video__text">Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое. Лежа на панцирнотвердой спине, он видел, стоило ему приподнять голову, свой коричневый, выпуклый, разделенный дугообразными чешуйками живот, на верхушке которого еле держалось готовое вот-вот окончательно сползти одеяло. </p>
			</div>
	</div>	
</div>

<div class="online online_bg_img">
	<div class="online__container online__container_innerpage">
		<h2 class="h2_theme_rosa h2_pink h2_inner_page online__topcaption">Стоимость онлайн трансляции на экран</h2>
		<div class="online__camers">
			<div class="online__cam_box">
				<h4 class="online__boxcaption">1 КАМЕРА</h4>
				<span class="online__boxsub">На сцене 1 спикер</span>
				<p class="online__text">Персонал на видеоплощадке: <br> 1 видеооператор, 1 видеоинженер</p>
				<span class="online__pricetext">от <em>15 000 </em><i class="fa fa-rub" aria-hidden="true"></i></span>
				<a href="#modal__form" class="button button_theme_rosa button_order fancybox">Заказать</a>
			</div>
			<div class="online__cam_box">
				<h4 class="online__boxcaption">2 КАМЕРА</h4>
				<span class="online__boxsub">Для небольших площадок</span>
				<p class="online__text">Персонал на видеоплощадке: <br> 1 видеооператор, 1 видеоинженер</p>
				<span class="online__pricetext">от <em>15 000 </em><i class="fa fa-rub" aria-hidden="true"></i></span>
				<a href="#modal__form" class="button button_theme_rosa button_order fancybox">Заказать</a>
			</div>
			<div class="online__cam_box">
				<h4 class="online__boxcaption">3 КАМЕРА</h4>
				<span class="online__boxsub">Мероприятия с вопросами из зала</span>
				<p class="online__text">Персонал на видеоплощадке: <br>1 видеооператор, 1 видеоинженер, режиссер эфира</p>
				<span class="online__pricetext">от <em>15 000 </em><i class="fa fa-rub" aria-hidden="true"></i></span>
				<a href="#modal__form" class="button button_theme_rosa button_order fancybox">Заказать</a>
			</div>
			<div class="online__cam_box">
				<h4 class="online__boxcaption">5 КАМЕР</h4>
				<span class="online__boxsub">Крупные мероприятия</span>
				<p class="online__text">Персонал на видеоплощадке: <br>
				5 видеооператоров, 2 видеоинженера, режиссер эфира, помощник режиссера</p>
				<span class="online__pricetext">от <em>45 000 </em><i class="fa fa-rub" aria-hidden="true"></i></span>
				<a href="#modal__form" class="button button_theme_rosa button_order fancybox">Заказать</a>
			</div>
		</div>

		<div class="online__textbottom">
			<h4 class="online__textbottom_caption">Указана минимальная комплектация.</h4>
			<p class="online__textbottom_txt">Дополнительное ообрудование: операторские краны, тележки, lightbridge, экраны, освещение на площадке и прочее - обсуждается дополнительно.
			Для индивидуального расчета мероприятия заполните форму и укажите все детали, пожелания и требуемые опции.</p>
			<a href="#modal__form" class="button button_theme_rosa fancybox">Получить КП и смету</a>
		</div>
	</div>
</div>	
<div class="our our__inner_page_mobile">
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
<?php  endwhile;	?>
<?php get_footer(); ?>
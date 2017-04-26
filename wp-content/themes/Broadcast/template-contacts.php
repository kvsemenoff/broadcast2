<?php
/*
Template Name: Контакты
*/
?>

<!-- Здесь html/php код шаблона -->
<?php get_header(); ?>
	<div class="contact">
	<div class="container">
		<h2 class="h2_theme_rosa h2_pink whattodo__topcaption">Наши контакты</h2>
		<div class="contact__inner">
			<div class="contact__info info">
			<?php $query = new WP_Query('page_id=126');
				$query->the_post(); ?>
				<span class="info__text info__text_title"><?php 	echo get_field('object'); ?></span>
				<span class="info__text info__text_address"><?php 	echo get_field('adress'); ?></span>
				 <span class="info__text info__text_time"></span> 
				<span class="info__text info__text_number"><?php 	echo get_field('phone'); ?></span>
				<span class="info__text info__text_mail"><?php 	echo get_field('email'); ?></span>
				<div class="socials">
			    <a href="#" class="socials-link socials-vk"></a>
			    <a href="#" class="socials-link socials-youtube"></a>
			    <a href="#" class="socials-link socials-insta"></a>
			  </div>
			</div>
			<div class="contact__mape contact__mape_max">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A37c5c06ea24b2813a57f56f7af1ea51f6c2360bc9848e33cef23767670d44040&amp;width=100%25&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
			<div class="contact__mape contact__mape_mini">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A37c5c06ea24b2813a57f56f7af1ea51f6c2360bc9848e33cef23767670d44040&amp;width=100%25&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<div class="footer footer_view footer_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<p class="footer__caption">Основные</p>
				<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'Нижнее меню 1', 
							'container'       => flase, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'footer-menu', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="footer-menu">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>
			</div>
			<div class="col-md-3 col-sm-6">
				<p class="footer__caption">Дополнительные</p>
				<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'Нижнее меню 2', 
							'container'       => flase, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'footer-menu', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="footer-menu">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>
			</div>
			<div class="col-md-3 col-sm-6">
				<p class="footer__caption">Офис</p>
				<p class="footer__contacts">Каменоостровский пр., д. 26-28 <br>с 11:00 до 19:00</p>
				<div class="socials">
					<a href="#" class="socials-link socials-vk"></a>
					<a href="#" class="socials-link socials-youtube"></a>
					<a href="#" class="socials-link socials-insta"></a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<p class="footer__caption">Контакты</p>
				<p class="footer__contacts"><span>+7 (921) 000-12-05</span><br>info@droadcast-team.ru</p>
				<a href="#modal__form" class="button button_theme_rosa fancybox">Заказать звонок</a>
			</div>
		</div>
	</div>
</div>

<div class="modal modal__form" id="modal__form">
  <div class="modal__inner clearfix">
		<div class="modal__in modal__in_left">
			<h2 class="h2_theme_rosa h2_pink whattodo__topcaption">Получите КП и смету</h2>
			<div class="form-wrap">
				<form action="#" method="post" class="form1 theme__rosa__form-block js-submit">
					<span class="input input_theme_rosa theme__rosa__form-input">
						<input type="text" class="input__control" name="uname" placeholder="Ваше имя">
					</span> 
					<span class="input input_theme_rosa theme__rosa__form-input">
						<input type="tel" class="input__control js-phone" name="phone" placeholder="Номер телефона" required>
					</span>
					<span class="input input_theme_rosa theme__rosa__form-input">
						<textarea name="text" placeholder="Сообщите краткую информацию"></textarea>
					</span>
					<span class="input input_theme_rosa theme__rosa__form-input">
						<input type="submit" class="button button_theme_rosa " value="Отправить заявку">
					</span>
				</form>
			</div>
		</div>
		<div class="modal__in modal__in_right">
			<span class="modal__in-descr">Так же вы можете сами нам позвонить</span>
			<span class="modal__in-descr modal__in-descr_last">или написать на электронную почту</span>
			<div class="modal__in-info">
				<span class="info__title">Телефон</span>
				<span class="info__number">+7 (921) 000-12-05</span>
			</div>
			<div class="modal__in-info">
				<span class="info__title">E-mail</span>
				<span class="info__number">info@droadcast-team.ru</span>
			</div>
		</div>
  </div>
</div>


<div class="modal modal__thanks" id="modal__thanks">
  <div class="modal__inner">
		<h2 class="h2_theme_rosa h2_pink whattodo__topcaption">Ваше сообщение отправлено!</h2>
    <div class="modal__descr-block">
    	<span class="modal__descr">Спасибо за вашу заявку.</span>
			<span class="modal__descr"><i>В скором времени</i> <i>мы напишем вам на почту.</i></span>
		</div>
  </div>
</div>

<a href="#modal__thanks" class="fancybox"></a>


<script src="<?php echo get_template_directory_uri(); ?>/js/libs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

</body>
</html>

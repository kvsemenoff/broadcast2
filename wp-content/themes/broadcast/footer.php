<section class="section section_padding footer">
		<div class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-lg-3 col-xs-6 footer-top__blocks">
						<p class="footer-item__title">О компании</p>
						<ul class="footer-list">
							<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'footer menu balkon', 
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
							'items_wrap'      => '<ul class="footer-list">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>
						</ul>
					</div>
					<div class="col-md-3 col-xs-6 footer-top__blocks">
						<p class="footer-item__title">Остекление балконов</p>
							<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'footer menu balkon', 
							'container'       => flase, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'footer-list', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="footer-list">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<p class="footer-item__title">Отделка балконов</p>
						<ul class="footer-list">
							<li class="footer-item"><a href="#" class="footer-list__link">Идеи дизайна</a></li>
							<li class="footer-item"><a href="#" class="footer-list__link">Отделка пластиковыми панелями</a></li>
							<li class="footer-item"><a href="#" class="footer-list__link">Отделка вагонкой</a></li>
							<li class="footer-item"><a href="#" class="footer-list__link">Отделак МДФ</a></li>
							<li class="footer-item"><a href="#" class="footer-list__link">Отделка штукатуркой</a></li>
							<li class="footer-item"><a href="#" class="footer-list__link">Отделка камнем</a></li>
							<li class="footer-item"><a href="#" class="footer-list__link">Отделка кирпичем</a></li>
							<li class="footer-item"><a href="#" class="footer-list__link">Утепление лоджии</a></li>
							<li class="footer-item"><a href="#" class="footer-list__link">Теплый пол</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-lg-3 col-xs-12 col-sm-6">
						<div class="footer-payment">
							<p class="footer-item__title footer-payment__title">Работаем с:</p>
							<div class="footer-paycards"></div>	
						</div>
						<div class="footer-social">
							<p class="footer-item__title footer-payment__title">В социальных сетях:</p>
							<div class="footer-social__item">
								<a href="#" class="footer-social__link footer-social__link1"></a>
							</div>
							<div class="footer-social__item footer-social__item2">
								<a href="#" class=" footer-social__link2 footer-social__link"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom clearfix">
			<div class="container">
				<div class="row footer-flex">
					<div class="col-md-2 footer-parts">
						<div class="footer-logo">
							<a href="/" class="footer-logo__link">
								<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="" class="footer-logo__img">
							</a>
							<p class="footer-logo__title">Атмосфера<br>Балкона</p>
						</div>
					</div>
					<div class="col-md-7 footer-parts footer-central">
						<p class="footer-central__text">© 2006-2017 "Атмосфера балкона". Наш адрес: 454021, г. Челябинск, 40-летия Победы, д. 15.</p>
					</div>
					<div class="col-md-3 footer-parts">
						<p class="footer-call">Звоните:</p>
						<p class="footer-call__number"><span class="footer-span">+7 (351)</span> 555-33-22 </p>
					</div>
								</div>
				</div>
		</div>
</section>
</body>
</html>
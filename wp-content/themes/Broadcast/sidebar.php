<div class="aero-sidebar" id="aerosidebar">
	<span class="aero-top__bg">Онлайнтрансляция</span>
	<ul class="sub">
		<li>
			<a href="#">Онлайн трансляции</a>
			<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'Боковое меню', 
							'container'       => flase, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'sub', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="sub-list">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>
		</li>
		<li>
			<a href="#">Многокамерная видеосъемка</a>
			<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => 'Боковое меню 2', 
							'container'       => flase, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'sub', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="sub-list">%3$s</ul>',
							'depth'           => 0
							);
						wp_nav_menu($args ); 
						?>
		</li>
		<li>
			<a href="#">Аренда ПТС</a>
		</li>
	</ul>
</div>
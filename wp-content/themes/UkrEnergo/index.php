<?php get_header(); ?>

<div class="bl-1">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Каталог продукции</h1>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12">
					<div class="kol">
						<a href="<?php echo home_url('/transformator') ?>">
							<div class="card p-1">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-1.png">
								<h2>Транфсорматоры</h2>
							</div>
						</a>
					</div>
					<div class="kol">
						<a href="<?php echo home_url('/reactor') ?>">
							<div class="card p-2">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-2.png">
								<h2>Реакторы</h2>
							</div>
						</a>
					</div>
					<div class="kol">
						<a href="<?php echo home_url('/arresters') ?>">
							<div class="card p-3">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-3.png">
								<h2>Разрядники</h2>
							</div>
						</a>
					</div>
					<div class="kol">
						<a href="<?php echo home_url('/disconnectors') ?>">
							<div class="card p-4">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-4.png">
								<h2>Разъединители</h2>
							</div>
						</a>
					</div>
					<div class="kol">
						<a href="<?php echo home_url('/opnp') ?>">
							<div class="card p-5">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-5.png">
								<h2>ОПНП</h2>
							</div>
						</a>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="kol">
						<a href="<?php echo home_url('/insulators') ?>">
							<div class="card p-6">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-6.png">
								<h2>Изоляторы</h2>
							</div>
						</a>
					</div>
					<div class="kol">
						<a href="<?php echo home_url('/contacts-for-fuses') ?>">
							<div class="card p-7">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-7.png">
								<h2>Контакты для<br>предохранителей</h2>
							</div>
						</a>
					</div>
					<div class="kol">
						<a href="<?php echo home_url('/load-switch') ?>">
							<div class="card p-8">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-8.png">
								<h2>Выключатели<br>нагрузки</h2>
							</div>
						</a>
					</div>
					<div class="kol">
						<a href="<?php echo home_url('/overvoltage-arresters') ?>">
							<div class="card p-9">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-9.png">
								<h2>Ограничители<br>перенапряжения</h2>
							</div>
						</a>
					</div>
					<div class="kol">
						<a href="<?php echo home_url('/ktp') ?>">
							<div class="card p-10">
								<img src="<?php bloginfo('template_directory'); ?>/image/bl-1-10.png">
								<h2>КТП</h2>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="lr-pdd">
				<div class="card1 col-sm-12">
					<div class="row">
						<?php
							$query = new WP_Query('cat=28');
							if( $query->have_posts() ){
							  while( $query->have_posts() ){ $query->the_post();
							  ?>

						    <h3><?php the_title(); ?><?php the_post_thumbnail(); ?></h3>
						    
						    <?php } wp_reset_postdata();
						    }
						?>
						<div class="col-sm-12">
							<div class="row">
								<?php
									$query = new WP_Query('cat=29');
									if( $query->have_posts() ){
									  while( $query->have_posts() ){ $query->the_post();
									  ?>
								
								    <a><?php the_title(); ?><img src="<?php bloginfo('template_directory'); ?>/image/arrow.png"></a>

								    <?php } wp_reset_postdata();
								    }
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bl-2">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Узнайте о наличии необходимого товара на складе</h1>
			</div>
			<div class="col-sm-7">
				<h2>Оставив заявку вы получите:</h2>
				<h3>Звонок от менеджера в течение 5 минут</h3>
				<h3>Профессиональную консультацию <br>менеджера о товарах</h3>
				<h3>Расчет стоимости заказа</h3>
				<h3>Информацию о действующих акциях и <br>возможных скидках</h3>
			</div>
			<div class="col-sm-5">
				<div class="form-block">
					<h5><span>Оставьте заявку</span><br>чтобы получить консультацию</h5>
					<div class="lr-pdd">
						<?php echo do_shortcode('[contact-form-7 id="31" title="form-1"]' ); ?>
					</div>
					<h6>Заявка не обязывает вас к покупке</h6>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bl-3">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Компании партнеры</h1>
			</div>
			<div class="col-sm-12">
				<img src="<?php bloginfo('template_directory'); ?>/image/bl-3-bg.png">
			</div>
		</div>
	</div>
</div>


<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<div class="bl-4">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>ТОВ «НПО УкрЭнерго» это</h1>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-2">
					<h2>20</h2>
				</div>
				<div class="col-sm-10">
					<h3>лет на рынке <br>электроэнергетики</h3>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-2">
					<h2>50</h2>
				</div>
				<div class="col-sm-10">
					<h3>квалифицированных <br>сотрудников</h3>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-2">
					<h2>20</h2>
				</div>
				<div class="col-sm-10">
					<h3>надежных партнеров <br>и государственных предприятий</h3>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-2">
					<h2>500</h2>
				</div>
				<div class="col-sm-10">
					<h3>более 500 единиц <br>товара на складе</h3>
				</div>
			</div>
			<div class="tpp col-sm-12">
				<div id="links-1">
					<div class="kol">
						<a href="<?php bloginfo('template_directory') ?>/image/sert-1.jpg">
					        <img src="<?php bloginfo('template_directory') ?>/image/sert-1.jpg">
					    </a>
					</div>
					<div class="kol">
						<a href="<?php bloginfo('template_directory') ?>/image/sert-2.jpg">
					        <img src="<?php bloginfo('template_directory') ?>/image/sert-2.jpg">
					    </a>
					</div>
					<div class="kol">
						<a href="<?php bloginfo('template_directory') ?>/image/sert-3.jpg">
					        <img src="<?php bloginfo('template_directory') ?>/image/sert-3.jpg">
					    </a>
					</div>
					<div class="kol">
						<a href="<?php bloginfo('template_directory') ?>/image/sert-4.jpg">
					        <img src="<?php bloginfo('template_directory') ?>/image/sert-4.jpg">
					    </a>
					</div>
					<div class="kol">
						<a href="<?php bloginfo('template_directory') ?>/image/sert-5.jpg">
					        <img src="<?php bloginfo('template_directory') ?>/image/sert-5.jpg">
					    </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bl-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Контакты</h1>
			</div>
			<div class="col-sm-5">
				<h2><span>Юр. адрес:</span><br>69114, г. Запорожье,<br>пр.Инженера Преображенского, 12/64</h2>
				<h2><span>Почтовый адрес:</span><br>69096 г.Запорожье а/я 7841</h2>
				<h2><span>Телефоны:</span><br>+38 (061) 220-36-57<br>+38 (068) 176-62-26</h2>
				<h2><span>E-mail:</span><br>info@uer.com.ua</h2>
				<h2><span>Режим работы:</span><br>Пн-Пт 09:00-17:00</h2>
			</div>
			<div class="col-sm-7">
				<img src="<?php bloginfo('template_directory') ?>/image/map.jpg">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2679.041820817072!2d35.055186015637865!3d47.81940707919936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc610753a06275%3A0x85d78ec36938fe3a!2z0L_RgNC-0YHQv9C10LrRgiDQhtC90LbQtdC90LXRgNCwINCf0YDQtdC-0LHRgNCw0LbQtdC90YHRjNC60L7Qs9C-LCAxMiwg0JfQsNC_0L7RgNGW0LbQttGPLCDQl9Cw0L_QvtGA0ZbQt9GM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1500892894802" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<img src="<?php bloginfo('template_directory'); ?>/image/logo-2.png">
			</div>
			<div class="col-sm-2">
				<ul>
					<li><a href="#">Главная</a></li>
					<li><a href="#">О компании</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<ul>
				<?php 

					$args = array(
					'orderBy' => 'id',
					'order' => 'desc',
					'parent' => 0,
					'hide_empty' => 0,
					'exclude' => '', // ID рубрики, которую нужно исключить
					'taxonomy' => 'category', // таксономия, для которой нужны изображения
					'pad_counts' => true
					);

					$catogory_list = get_categories($args);
					foreach($catogory_list as $category)
					{
						?>
							<li><a href="<?php echo  get_category_link( $category->term_id ) ?>"><?php echo $category->cat_name ?></a></li>
						<?php 
					}
				 ?>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
					<li><a href="">Контакты</a></li>
					<li><a href="">Выключатели нагрузки</a></li>
					<li><a href="">Ограничители перенапряжения</a></li>
					<li><a href="">КТП</a></li>
				</ul>
			</div>
			<div class="col-sm-7">
				<h1>Copyright <?php echo date('Y') ?> ©ТОВ «НПО Укрэнерго». Все права защищены.</h1>
			</div>
			<div class="col-sm-5">
				<h2><?php echo ot_get_option('press_adress','Здесь может мыть ваш адрес'); ?><br><?php foreach (ot_get_option('phones','Здесь может мыть ваш адрес') as $phone) {
					echo $phone['phone'].'<br>';
				}  ?></h2>
			</div>
			<div class="col-sm-12">
				<h3>Designed by ©Skysait  <?php echo date('Y') ?></h3>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
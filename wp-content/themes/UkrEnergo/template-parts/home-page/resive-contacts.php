<div class="bl-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Контакты</h1>
			</div>
			<div class="col-sm-5">
				<h2><span>Юр. адрес:</span><br><?php echo ot_get_option('ur_adress','Здесь может мыть ваш адрес'); ?></h2>
				<h2><span>Почтовый адрес:</span><br><?php echo ot_get_option('press_adress','Здесь может мыть ваш адрес'); ?></h2>
				<h2><span>Телефоны:</span><br>
				<?php foreach (ot_get_option('phones','Здесь может мыть ваш адрес') as $phone) {
					echo $phone['phone'].'<br>';
				}  ?>

				</h2>
				<h2><span>E-mail:</span><br><?php echo ot_get_option('email','Здесь может мыть ваш адрес'); ?></h2>
				<h2><span>Режим работы:</span><br><?php echo ot_get_option('work_hours','Здесь может мыть ваш адрес'); ?></h2>
			</div>
			<div class="col-sm-7">
				<img src="<?php bloginfo('template_directory') ?>/image/map.jpg">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2679.041820817072!2d35.055186015637865!3d47.81940707919936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc610753a06275%3A0x85d78ec36938fe3a!2z0L_RgNC-0YHQv9C10LrRgiDQhtC90LbQtdC90LXRgNCwINCf0YDQtdC-0LHRgNCw0LbQtdC90YHRjNC60L7Qs9C-LCAxMiwg0JfQsNC_0L7RgNGW0LbQttGPLCDQl9Cw0L_QvtGA0ZbQt9GM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1500892894802" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|',1,'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/image/logo.png" type="image/x-icon">
	<?php wp_head(); ?>
	<script type="text/javascript">
		function dis() {
			location.href="/thanks";
		}
	</script>
</head>
<body>
<?php include 'include/view-modal.php'; ?>

<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<h1><?php echo ot_get_option('email','Здесь может мыть ваш адрес'); ?></h1>
			</div>
			<div class="col-sm-2">
				<h1><?php echo ot_get_option('work_hours','Здесь может мыть ваш адрес'); ?></h1>
			</div>
			<div class="col-sm-3">
				<h1>+38 (061) 220-36-57</h1>
			</div>
			<div class="lft col-sm-2">
				<h1>+38 (068) 176-62-26</h1>
			</div>
			<div class="col-sm-3">
				<button>Перезвоните мне</button>
			</div>
		</div>
	</div>
</div>

<div class="header-page">
	<div class="container">
		<div class="row">
			<div class="tpp">
				<div class="col-sm-2">
					<img src="<?php bloginfo('template_directory'); ?>/image/logo-3.png">
				</div>
				<div class="col-sm-4">
					<h6>Производитель высоковольтного<br>электротехнического<br>оборудования</h6>
				</div>
				<div class="col-sm-6">
					<?php wp_nav_menu( array(
								'theme_location'  => '',
								'menu'            => 'Primary', 
								'container'       => '', 
								'container_class' => '', 
								'container_id'    => '',
								'menu_class'      => '', 
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) ); ?>
				</div>
			</div>
			<div class="nav-wp col-sm-12">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>
<div class="bl-1">
	<div class="container">
		<div class="row">
			<div >
				<h1>Каталог продукции</h1>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-12">
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
					foreach ($catogory_list as $category) {
							?>

						<div class="kol col-md-2">
							<a href="<?php echo  get_category_link( $category->term_id ) ?>">
								<div class="card">
						<img src="<?php  the_field('cat_img', $category->taxonomy . '_' .$category->term_id);?>">
									<h2><?php echo	$category->cat_name ?></h2>
								</div>
							</a>
						</div>
							<?php 	
						}
					
				 ?>

				</div>
			</div>
		</div>
	</div>
</div>
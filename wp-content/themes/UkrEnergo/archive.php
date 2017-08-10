<?php get_header('page'); ?>

		  <section class="category">
       			<h2 class="h-section"><?php single_cat_title('Рубрика: '); ?></h2>
          <div class="container">	
           <div class="sub_cat_container row">	
      
		<?php 
		
		$category = get_the_category();
		$this_category = get_category($category);

		print_r(count(get_categories('child_of='.$this_category)));
   		if(count(get_categories('child_of='.$this_category)))
        {

        
		if(is_category())
		{

			$args = array(
					'orderBy' => 'id',
					'order' => 'desc',
					'child_of' => $this_category->term_id,
					'hide_empty' => 0,
					'exclude' => '', // ID рубрики, которую нужно исключить
					'taxonomy' => 'category', // таксономия, для которой нужны изображения
					'pad_counts' => false

			);

			$sub_categories = wp_list_categories($args);

			foreach($sub_categories as $sub_cat)
			{					
			
				?>
				<div class="col-md-4">
                    <article>
                        <a href="/category/<?php echo $sub_cat->slug ?>">
                            <img src="<?php  the_field('cat_img', $sub_cat->taxonomy . '_' .$sub_cat->term_id);?>" alt="" class="img-responsive">
                            <div class="title">
                            <span class="name"><?php echo $sub_cat->name; ?></span>
                            <i class="fa fa-angle-right"></i>
                            </div>
                        </a>
                    </article>
                </div>
				<?php 
			}

			}
			}
			 ?>
			
		</div>
		</section>
	
<?php get_footer(); ?>
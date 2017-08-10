<?php get_header('page'); ?>

		  <section class="category">
       			<h2 class="h-section"><?php single_cat_title('Рубрика: '); ?></h2>
          <div class="container">	
           <div class="sub_cat_container row">	
      
		<?php 
		$i = 0;
		$cat = get_query_var('cat');
		$args = array(
					'orderBy' => 'id',
					'order' => 'desc',
					//'child_of' => $cat,
					'parent' => $cat,
					'hide_empty' => 0,
					'exclude' => '', // ID рубрики, которую нужно исключить
					'taxonomy' => 'category', // таксономия, для которой нужны изображения
					'pad_counts' => false

			);

		$categories = get_categories($args); 
		foreach ($categories as $category) { $i++; }
		if ($i > 1 ) {
			
			foreach ($categories as $category) { ?>
			  <div class="col-md-4">
                    <article>
                        <a href="<?php echo get_category_link( $category->term_id ) ?>">
                            <img src="<?php  the_field('cat_img', $category->taxonomy . '_' .$category->term_id);?>" alt="" class="img-responsive">
                            <div class="title">
                            <span class="name"><?php echo $category->name; ?></span>
                            <i class="fa fa-angle-right"></i>
                            </div>
                        </a>
                    </article>
                </div>
			<?php } 
		
		} else {
 				echo '<section class="sub_category posts_output">';
				$args = array(
						'numberposts' => 5,
					 	'category'    => $cat,
						'orderby'     => 'date',
						'order'       => 'DESC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true, 							
					);
					$posts = get_posts($args);
					foreach($posts as $post){ setup_postdata($post);

				?>
			 <article class="row">
                   <div class="col-md-3 post_thumbnail">
                       <?php the_post_thumbnail( 'full',array('class'=> 'img-responsive') ); ?>
                   </div>
                 <div class="mobile_desc">
                        <div class="col-md-offset-3 col-md-6 col-sm-8 desc">
                           <h3 class="h-desc"><?php the_title(); ?></h3>
                           <p class="serial_number">Серийный номер</p>
                           <div class="info"><?php 	the_content(); ?></div>
                       </div>
                       <div class="col-md-3 col-sm-4 pricing">
                           <span class='status in_have'>есть в наличии</span>
                           <span class="price">10 450 грн</span>
                           <a href="<?php 	the_permalink(); ?>" class="col-sm-pull-9 btn_post">Подробнее<i class="fa fa-angle-right"></i></a>
                       </div>
                        <div class="clearfix"></div>
                   </div>
                  
               </article>
				<?php
				echo '</section>';
			}
		}
        
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

			$sub_categories = get_categories($args);

			foreach($sub_categories as $sub_cat)
			{					
			
				?>

				<?php 
			}

			}
			// }
			 ?>
			
		</div>
		</section>
	
<?php get_footer(); ?>
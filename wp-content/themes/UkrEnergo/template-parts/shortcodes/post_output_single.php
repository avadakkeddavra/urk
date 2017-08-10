		<section class="sub_category posts_output_single">
          <div class="container">
			  <div class="row">
                  
              <h2 class="h-desc"><?php the_title() ?></h2>
               <article>
                  
                   <div class="col-md-3 post_thumbnail">
                      <?php the_post_thumbnail( 'full', array('class'=>'img-responsive') ); ?>
                   </div>
                 <div class="mobile_desc">
                        <div class="col-md-offset-3 col-md-6 col-sm-8 desc">
                           <span class='status in_have'><?php the_field('status'); ?></span>
                           <p class="serial_number"><?php the_field('serial_number'); ?></p>
                           <div class="info"><?php echo $content; ?></div>
                       </div>
                       <div class="col-md-3 col-sm-4 pricing">
                           
                           <span class="price"><?php the_field('price') ?> грн</span>
                           <button class="col-sm-pull-9 btn_post">Подробнее<i class="fa fa-angle-right"></i></button>
                       </div>
                        <div class="clearfix"></div>
                   </div>
                  
               </article>
               
               
               </div>           
          </div>
   		</section>

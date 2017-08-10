       <section class="manager_contacts">
           <div class="container">
                <h2 class="h-desc"><?php echo $atts['title'] ?></h2>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 contact">
                        <div class="col-sm-4 img">
                            <img src="<?php the_field('manager_img'); ?>" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                            <div class="desc">
                                <?php echo $content ?>
                            </div>
                        </div> 
                        
                    </div>
                </div>
           </div>
       </section>
    <section class="single_info_block">
       <div class="container">
           <div class="row">
               <div class="col-sm-6 info-list">
                     <h4>
                     <?php echo $atts['title']; ?></h4>
                     <?php echo $content ?>
                </div>
              <div class="col-sm-6 sertificate-list">
              <div class="row">
              <?php
                        //Get the images ids from the post_metadata
                        $images = acf_photo_gallery('sertificate_list', get_the_ID());
                        //Check if return array has anything in it
                        if( count($images) ):
                            //Cool, we got some data so now let's loop over it
                            foreach($images as $image):
                                $id = $image['id']; // The attachment id of the media
                                $title = $image['title']; //The title
                                $caption= $image['caption']; //The caption
                                $full_image_url= $image['full_image_url']; //Full size image url
                                //$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
                                $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                                $url= $image['url']; //Goto any link when clicked
                                $target= $image['target']; //Open normal or new tab
                                $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                                $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                    ?>
                    <div class="col-sm-6 sertif">
                      <img src="<?php echo $full_image_url ?>" alt="<?php echo $alt ?>" class="img-responsive">
                    </div>
                  <?php endforeach; endif; ?>
               </div>
               </div>
           </div>
       </div>
   </section>
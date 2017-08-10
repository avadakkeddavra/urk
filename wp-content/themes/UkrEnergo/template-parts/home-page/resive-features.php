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
				  <?php
                        //Get the images ids from the post_metadata
                        $images = acf_photo_gallery('sertificate_gallery', 66);
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
					<div class="kol">
						<a href="">
					        <img src="<?php echo $full_image_url; ?>">
					    </a>
					</div>

					<?php endforeach; endif; ?>

				</div>
			</div>
		</div>
	</div>
</div>
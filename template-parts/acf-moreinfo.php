<?php 
$more_title		= get_field('more_title');
$title_1		= get_field('title_1');
$small_title_1	= get_field('small_title_1');
$body_1			= get_field('body_1');
$title_2		= get_field('title_2');
$small_title_2	= get_field('small_title_2');
$thumb_1		= get_field('thumb_1');
$image_1		= get_field('image_1');
$thumb_2		= get_field('thumb_2');
$image_2		= get_field('image_2');
$thumb_3		= get_field('thumb_3');
$image_3		= get_field('image_3');
$thumb_4		= get_field('thumb_4');
$image_4		= get_field('image_4');
$title_3		= get_field('title_3');
$small_title_3	= get_field('small_title_3');
$body_3			= get_field('body_3');
 ?>
<!-- More Infos -->
<div id="moreInfo">
	<div class="section-content">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<h4 class="mb-4"><?php echo $more_title; ?></h4>
					
					<!-- Nav Tabs -->
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Map</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Picture</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Video</a>
						</li>
					</ul>

					<!-- Nav Contents -->
					<div class="tab-content" id="myTabContent">

						<!-- Tab Content 1 -->
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<h5 class="my-4"><i class="fa fa-location-arrow"></i> <?php echo $title_1; ?> <small class="text-primary"><?php echo $small_title_1; ?></small></h5>
							<?php echo $body_1; ?>
						</div><!-- Tab Content 1 -->

						<!-- Tab Content 2 -->
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<h5 class="my-4"><i class="fa fa-picture-o"></i> <?php echo $title_2; ?> <small class="text-primary"><?php echo $small_title_2; ?></small></h5>
							<div class="row">
								<div class="col p-0">
									<a href="<?php echo $image_1['url']; ?>" class="thumbnail" data-lightbox="galllery" data-title="<?php echo $image_1['alt']; ?>">
										<img src="<?php echo $thumb_1['url']; ?>" alt="<?php echo $thumb_1['alt']; ?>" class="img-thumbnail">
									</a>
								</div>
								<div class="col p-0">
									<a href="<?php echo $image_2['url']; ?>" class="thumbnail" data-lightbox="galllery" data-title="<?php echo $image_2['alt']; ?>">
										<img src="<?php echo $thumb_2['url']; ?>" alt="<?php echo $thumb_2['alt']; ?>" class="img-thumbnail">
									</a>
								</div>
								<div class="w-100"></div>
								<div class="col p-0">
									<a href="<?php echo $image_3['url']; ?>" class="thumbnail" data-lightbox="galllery" data-title="<?php echo $image_3['alt']; ?>">
										<img src="<?php echo $thumb_3['url']; ?>" alt="<?php echo $thumb_3['alt']; ?>" class="img-thumbnail">
									</a>
								</div>
								<div class="col p-0">
									<a href="<?php echo $image_4['url']; ?>" class="thumbnail" data-lightbox="galllery" data-title="<?php echo $image_4['alt']; ?>">
										<img src="<?php echo $thumb_4['url']; ?>" alt="<?php echo $thumb_4['alt']; ?>" class="img-thumbnail">
									</a>
								</div>
							</div>
						</div><!-- Tab Content 2 -->

						<!-- Tab Content 3 -->
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<h5 class="my-4"><i class="fa fa-television"></i> <?php echo $title_3; ?> <small class="text-primary"><?php echo $small_title_3; ?></small></h5>
							<?php echo $body_3; ?>
						</div><!-- Tab Content 3 -->
					</div>

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- section-content -->
</div>
<!-- More Infos -->

<hr style="display: block;">
<br>
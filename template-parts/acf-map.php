<?php
// Advanced Custom Field
$address_title	= get_field('address_title', 35);
$address_body	= get_field('address_body', 35);
$parking_title	= get_field('parking_title', 35);
$parking_body	= get_field('parking_body', 35);
$phone_title	= get_field('phone_title', 35);
$phone_body		= get_field('phone_body', 35);
?>

<!-- MAP SECTION
====================================================== -->
<section id="contactMap">
	<div class="container">
		<div class="row">

			<div class="address-info col-3 offset-7 my-5 p-4 d-none d-md-block">
				<h4><?php echo $address_title; ?></h4>
				<p class="text-muted"><?php echo $address_body; ?></p>

				<h4><?php echo $parking_title; ?></h4>
				<p class="text-muted"><?php echo $parking_body; ?></p>

				<h4><?php echo $phone_title; ?></h4>
				<p class="text-muted"><?php echo $phone_body; ?></p>
			</div><!-- address-info -->

		</div><!-- row -->
	</div><!-- container -->

	<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.1116772401597!2d126.97472885067826!3d37.57598787969689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2eaa19c763d%3A0xb28a32722d675764!2z6rSR7ZmU66y4!5e0!3m2!1sko!2skr!4v1514093404719" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>



	</div><!-- map -->
</section>
<!-- MAP SECTION -->
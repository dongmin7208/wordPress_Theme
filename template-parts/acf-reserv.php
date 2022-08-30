<?php 
$reserv_link		= get_field('reserv_link');
$reserv_title		= get_field('reserv_title');
$reserv_desc		= get_field('reserv_desc');
$reserv_btn			= get_field('reserv_btn');
?>

<div class="box-item bg-primary mb-4">
						
	<a href="<?php echo $reserv_link; ?>">
		<div class="p-3">
			<h6 class="text-warning"><?php echo $reserv_title; ?></h6>
			<div class="text-white">
				<p><?php echo $reserv_desc; ?></p>
				<p class="lead text-danger"><?php echo $reserv_btn; ?></p>
			</div>
		</div>
	</a>

</div><!-- Reservation Box-item -->
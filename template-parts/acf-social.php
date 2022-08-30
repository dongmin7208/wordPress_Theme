<?php 
$facebook 			= get_field('facebook');
$twitter 			= get_field('twitter');
$gplus 				= get_field('gplus');
$instagram 			= get_field('instagram');
?>

<ul class="list-group d-none d-md-block">
	<li class="list-group-item list-group-item-success"><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook-official"></i> Facebook</a></li>
	<li class="list-group-item list-group-item-info"><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter-square"></i> Twitter</a></li>
	<li class="list-group-item list-group-item-warning"><a href="<?php echo $gplus; ?>"><i class="fa fa-google-plus-official"></i> Google+</a></li>
	<li class="list-group-item list-group-item-danger"><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i> Instagram</a></li>
</ul><!-- Visible for over medium sized devices -->

<div class="d-flex flex-nowrap d-block d-sm-none no-gutters">
	<div class="d-inline bg-success py-2 px-3"><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook-official text-white"></i> <small class="text-white">Facebook</small></a></div>
	<div class="d-inline bg-info py-2 px-3"><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter-square text-white"></i> <small class="text-white">Twitter</small></a></div>
	<div class="d-inline bg-warning py-2 px-3"><a href="<?php echo $gplus; ?>"><i class="fa fa-google-plus-official text-white"></i> <small class="text-white">Google+</small></a></div>
	<div class="d-inline bg-danger py-2 px-3"><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram text-white"></i> <small class="text-white">Instagram</small></a></div>
</div><!-- Visible for only smart phone sized devices -->
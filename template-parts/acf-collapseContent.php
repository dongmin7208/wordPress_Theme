<?php 
$coll_title			= get_field('coll_title');
$coll_body			= get_field('coll_body');
?>

<!-- TOGGLE-COLLAPSE
====================================================== -->
<div id="collapse-idea">
	<div class="container">
		<div class="collapse" id="collapseIdea">
			<div class="card card-body bg-info text-white">
				<h3><?php echo $coll_title; ?></h3>
				<div class="row m-2">
					<div><?php echo $coll_body; ?></div>
				</div>
			</div><!-- card -->
		</div><!-- collapse -->
	</div><!-- container -->
</div>
<!-- TOGGLE-COLLAPSE -->
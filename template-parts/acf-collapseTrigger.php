<?php 
$tr_title			= get_field('tr_title');
$tr_desc			= get_field('tr_desc');
$tr_btn				= get_field('tr_btn');
?>

<div class="box-item mb-4 d-none d-md-block">
	<div class="p-3">
		<h5 class="text-warning"><?php echo $tr_title; ?></h5>
		<div class="text-muted">
			<p><?php echo $tr_desc; ?></p>
			<a href="#collapseIdea" class="btn btn-info" data-toggle="collapse" aria-expanded="false" aria-controls="collapseIdea"><?php echo $tr_btn; ?></a>
		</div>
	</div>
</div><!-- Collapse Box -->
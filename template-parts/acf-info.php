<?php 
$info_title			= get_field('info_title');
$info_desc			= get_field('info_desc');
$tab_title_1		= get_field('tab_title_1');
$tab_link_1			= get_field('tab_link_1');
$tab_title_2		= get_field('tab_title_2');
$tab_link_2			= get_field('tab_link_2');
$tab_title_3		= get_field('tab_title_3');
$tab_link_3			= get_field('tab_link_3');
?>

<div class="box-item mb-4">
						
	<div class="p-3">
		
		<h5 class="text-warning"><?php echo $info_title; ?></h5>
		<div class="text-muted">
			<p><?php echo $info_desc; ?></p>

			<div class="row d-none d-md-block">
				
				<div class="col-12 d-flex flex-row mb-1">
					<span><?php echo $tab_title_1; ?></span>
					<a href="<?php echo $tab_link_1; ?>" class="btn btn-primary btn-sm ml-auto">Click</a>
				</div>
				<div class="col-12 d-flex flex-row mb-1">
					<span><?php echo $tab_title_2; ?></span>
					<a href="<?php echo $tab_link_2; ?>" class="btn btn-info btn-sm ml-auto">Click</a>
				</div>
				<div class="col-12 d-flex flex-row mb-1">
					<span><?php echo $tab_title_3; ?></span>
					<a href="<?php echo $tab_link_3; ?>" class="btn btn-warning btn-sm ml-auto">Click</a>
				</div>

			</div><!-- For over medium devices -->

			<ul class="list-group d-block d-sm-none">
				<a href="<?php echo $tab_link_1; ?>"><li class="list-group-item list-group-item-primary"><?php echo $tab_title_1; ?> <span class="pull-right">&raquo;</span></li></a>
				<a href="<?php echo $tab_link_2; ?>"><li class="list-group-item list-group-item-info"><?php echo $tab_title_2; ?> <span class="pull-right">&raquo;</span></li></a>
				<a href="<?php echo $tab_link_3; ?>"><li class="list-group-item list-group-item-warning"><?php echo $tab_title_3; ?> <span class="pull-right">&raquo;</span></li></a>
			</ul>
			<!-- For only small diveice -->
		</div>

	</div>

</div><!-- Infomation Box-item -->
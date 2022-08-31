<!-- PAGE-HEADER
====================================================== -->
<div class="row page-header mb-4 pb-2">
	
	<div class="col-md-6 col-sm-8 col-xl-8 my-auto">
		
		<ul aria-label="breadcrumb" role="navigation" class="p-0">
		  	<ol class="breadcrumb bg-transparent">
			    <li class="breadcrumb-item"><a href="<?php echo site_url('/'); ?>"><?php echo get_the_title(56); ?></a></li>
			    <li class="breadcrumb-item"><a href="<?php echo site_url('/blog'); ?>"><?php echo get_the_title(35); ?></a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
		  	</ol>
		</ul>

	</div><!-- breadcrumb -->

	<div class="col-md-6 col-sm-4 col-xl-4 my-auto">
		<div class="pull-right">
			<?php next_post_link( '%link', '<i class="fa fa-arrow-left"></i>' ); ?>
			<?php previous_post_link( '%link', '<i class="fa fa-arrow-right"></i>' ); ?>
		</div>
	</div><!-- post-link -->

</div>
<!-- PAGE-HEADER -->
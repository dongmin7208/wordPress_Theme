<?php get_header(); ?>

<!-- TOGGLE-COLLAPSE
====================================================== -->
<div id="collapse-idea">
    <div class="container">
        <div class="collapse" id="collapseIdea">
            <div class="card card-body bg-info text-white">
                <h3>The Idea of OUR Company</h3>
                <div class="row m-2">
                    <div class="col-sm-2 mb-2 float-left">
                        <img src="http://via.placeholder.com/300x300" alt="" class="img-fluid mr-2">
                    </div>
                    <div class="col-sm-10 mb-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus veniam voluptate ducimus natus tempore ad nostrum, quos adipisci iure dolore quae, ratione ipsa sunt beatae, consequuntur totam, aliquid harum temporibus.</p>
                    </div>
                </div>
            </div><!-- card -->
        </div><!-- collapse -->
    </div><!-- container -->
</div>
<!-- TOGGLE-COLLAPSE -->

<!-- FRONT SECTION
====================================================== -->
<section id="front-section">
    <div class="section-content">
        <div class="container">
            <div class="row">

                <!-- FRONT-MAIN
				====================================================== -->
                <div class="col-md-9 order-md-12">

                    <!-- Slide
					====================================================== -->
                    <div id="carousel-front" class="carousel slide" data-ride="carousel">

                        <!-- carousel-indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-front" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-front" data-slide-to="1"></li>
                            <li data-target="#carousel-front" data-slide-to="2"></li>
                        </ol>

                        <!-- carousel-inner -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="http://via.placeholder.com/1600x1100?text=First+Slide" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Fist Slide Caption</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, accusamus?</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://via.placeholder.com/1600x1100?text=Second+Slide" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second Slide Caption</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, accusamus?</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://via.placeholder.com/1600x1100?text=Third+Slide" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third Slide Caption</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, accusamus?</p>
                                </div>
                            </div>
                        </div>

                        <!-- carousel-controls -->
                        <a class="carousel-control-prev" href="#carousel-front" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-front" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- Slide -->

                    <br><br>

                    <!-- Page-Item-Box -->
                    <div id="pageItemBox">
                        <div class="row">

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="#" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img.png" alt="" class="box-icon">
                                        <h5 class="mt-3">Page Item1</h5>
                                        <p class="mb-3"><small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img_reverse.png" alt="" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong>Page Item1</strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="#" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img.png" alt="" class="box-icon">
                                        <h5 class="mt-3">Page Item2</h5>
                                        <p class="mb-3"><small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-info text-center d-block d-sm-none">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img_reverse.png" alt="" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong>Page Item2</strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="#" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img.png" alt="" class="box-icon">
                                        <h5 class="mt-3">Page Item3</h5>
                                        <p class="mb-3"><small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-warning text-center d-block d-sm-none">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img_reverse.png" alt="" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong>Page Item3</strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="#" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img.png" alt="" class="box-icon">
                                        <h5 class="mt-3">Page Item4</h5>
                                        <p class="mb-3"><small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-danger text-center d-block d-sm-none">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img_reverse.png" alt="" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong>Page Item4</strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                        </div><!-- 1st row -->

                        <div class="row">

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="#" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img.png" alt="" class="box-icon">
                                        <h5 class="mt-3">Page Item5</h5>
                                        <p class="mb-3"><small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-success text-center d-block d-sm-none">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img_reverse.png" alt="" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong>Page Item5</strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="#" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img.png" alt="" class="box-icon">
                                        <h5 class="mt-3">Page Item6</h5>
                                        <p class="mb-3"><small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-secondary text-center d-block d-sm-none">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img_reverse.png" alt="" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong>Page Item6</strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="#" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img.png" alt="" class="box-icon">
                                        <h5 class="mt-3">Page Item7</h5>
                                        <p class="mb-3"><small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-dark text-center d-block d-sm-none">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img_reverse.png" alt="" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong>Page Item7</strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="#" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img.png" alt="" class="box-icon">
                                        <h5 class="mt-3">Page Item8</h5>
                                        <p class="mb-3"><small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 bg-light text-center d-block d-sm-none">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_img.png" alt="" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong>Page Item8</strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                        </div><!-- 2nd row -->
                    </div>
                    <!-- Page-Item-Box -->

                </div>
                <!-- FRONT-MAIN -->

                <!-- FRONT-SIDE
				====================================================== -->
                <div class="col-md-3 order-md-1">

                    <div class="box-item mb-4 d-none d-md-block">
                        <img src="http://via.placeholder.com/400x100?text=Logo" alt="" class="img-fluid">
                    </div><!-- Logo image Box -->

                    <div class="box-item mb-4 d-none d-md-block">
                        <div class="p-3">
                            <h5 class="text-warning">Lorem ipsum.</h5>
                            <div class="text-muted">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae quisquam, corporis in excepturi officiis impedit!</p>
                                <a href="#collapseIdea" class="btn btn-info" data-toggle="collapse" aria-expanded="false" aria-controls="collapseIdea">Click here!</a>
                            </div>
                        </div>
                    </div><!-- Collapse Box -->

                    <div class="box-item mb-4">

                        <div class="p-3">

                            <h5 class="text-warning">Infomations</h5>
                            <div class="text-muted">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum praesentium autem assumenda? Minima, hic, nemo.</p>

                                <div class="row d-none d-md-block">

                                    <div class="col-12 d-flex flex-row mb-1">
                                        <span>Intro</span>
                                        <a href="#" class="btn btn-primary btn-sm ml-auto">Click</a>
                                    </div>
                                    <div class="col-12 d-flex flex-row mb-1">
                                        <span>Online</span>
                                        <a href="#" class="btn btn-info btn-sm ml-auto">Click</a>
                                    </div>
                                    <div class="col-12 d-flex flex-row mb-1">
                                        <span>Notice</span>
                                        <a href="#" class="btn btn-warning btn-sm ml-auto">Click</a>
                                    </div>

                                </div><!-- For over medium devices -->

                                <ul class="list-group d-block d-sm-none">
                                    <a href="#">
                                        <li class="list-group-item list-group-item-primary">Intro <span class="pull-right">&raquo;</span></li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item list-group-item-info">Online <span class="pull-right">&raquo;</span></li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item list-group-item-warning">Notice <span class="pull-right">&raquo;</span></li>
                                    </a>
                                </ul>
                                <!-- For only small diveice -->
                            </div>

                        </div>

                    </div><!-- Infomation Box-item -->

                    <div class="box-item bg-primary mb-4">

                        <a href="#">
                            <div class="p-3">
                                <h6 class="text-warning">Reservation!</h6>
                                <div class="text-white">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p class="lead text-danger">Click here!</p>
                                </div>
                            </div>
                        </a>

                    </div><!-- Reservation Box-item -->

                    <ul class="list-group d-none d-md-block">
                        <li class="list-group-item list-group-item-success"><a href="#"><i class="fa fa-facebook-official"></i> Facebook</a></li>
                        <li class="list-group-item list-group-item-info"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                        <li class="list-group-item list-group-item-warning"><a href="#"><i class="fa fa-google-plus-official"></i> Google+</a></li>
                        <li class="list-group-item list-group-item-danger"><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
                    </ul><!-- Visible for over medium sized devices -->

                    <div class="d-flex flex-nowrap d-block d-sm-none no-gutters">
                        <div class="d-inline bg-success py-2 px-3"><a href="#"><i class="fa fa-facebook-official text-white"></i> <small class="text-white">Facebook</small></a></div>
                        <div class="d-inline bg-info py-2 px-3"><a href="#"><i class="fa fa-twitter-square text-white"></i> <small class="text-white">Twitter</small></a></div>
                        <div class="d-inline bg-warning py-2 px-3"><a href="#"><i class="fa fa-google-plus-official text-white"></i> <small class="text-white">Google+</small></a></div>
                        <div class="d-inline bg-danger py-2 px-3"><a href="#"><i class="fa fa-instagram text-white"></i> <small class="text-white">Instagram</small></a></div>
                    </div><!-- Visible for only smart phone sized devices -->

                </div>
                <!-- FRONT-SIDE -->

            </div>
        </div>
    </div>
</section>
<!-- FRONT SECTION -->

<?php
get_template_part('template-parts/acf', 'map');
get_footer(); ?>
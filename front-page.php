<?php get_header(); ?>
<?php
$slide_img_1        = get_field('slide_img_1');
$slide_cap_title_1    = get_field('slide_cap_title_1');
$slide_cap_desc_1    = get_field('slide_cap_desc_1');
$slide_img_2        = get_field('slide_img_2');
$slide_cap_title_2    = get_field('slide_cap_title_2');
$slide_cap_desc_2    = get_field('slide_cap_desc_2');
$slide_img_3        = get_field('slide_img_3');
$slide_cap_title_3    = get_field('slide_cap_title_3');
$slide_cap_desc_3    = get_field('slide_cap_desc_3');
?>

<?php
$radio                = get_field('radio');
$item_link_1        = get_field('item_link_1');
$item_img_1            = get_field('item_img_1');
$mo_img_1            = get_field('mo_img_1');
$item_title_1        = get_field('item_title_1');
$item_desc_1        = get_field('item_desc_1');
$item_link_2        = get_field('item_link_2');
$item_img_2            = get_field('item_img_2');
$mo_img_2            = get_field('mo_img_2');
$item_title_2        = get_field('item_title_2');
$item_desc_2        = get_field('item_desc_2');
$item_link_3        = get_field('item_link_3');
$item_img_3            = get_field('item_img_3');
$mo_img_3            = get_field('mo_img_3');
$item_title_3        = get_field('item_title_3');
$item_desc_3        = get_field('item_desc_3');
$item_link_4        = get_field('item_link_4');
$item_img_4            = get_field('item_img_4');
$mo_img_4            = get_field('mo_img_4');
$item_title_4        = get_field('item_title_4');
$item_desc_4        = get_field('item_desc_4');
$item_link_5        = get_field('item_link_5');
$item_img_5            = get_field('item_img_5');
$mo_img_5            = get_field('mo_img_5');
$item_title_5        = get_field('item_title_5');
$item_desc_5        = get_field('item_desc_5');
$item_link_6        = get_field('item_link_6');
$item_img_6            = get_field('item_img_6');
$mo_img_6            = get_field('mo_img_6');
$item_title_6        = get_field('item_title_6');
$item_desc_6        = get_field('item_desc_6');
$item_link_7        = get_field('item_link_7');
$item_img_7            = get_field('item_img_7');
$mo_img_7            = get_field('mo_img_7');
$item_title_7        = get_field('item_title_7');
$item_desc_7        = get_field('item_desc_7');
$item_link_8        = get_field('item_link_8');
$item_img_8            = get_field('item_img_8');
$mo_img_8            = get_field('mo_img_8');
$item_title_8        = get_field('item_title_8');
$item_desc_8        = get_field('item_desc_8');

$logo = get_field('logo');

$tr_title            = get_field('tr_title');
$tr_desc            = get_field('tr_desc');
$tr_btn                = get_field('tr_btn');

$coll_title            = get_field('coll_title');
$coll_body            = get_field('coll_body');

$info_title            = get_field('info_title');
$info_desc            = get_field('info_desc');
$tab_title_1        = get_field('tab_title_1');
$tab_link_1            = get_field('tab_link_1');
$tab_title_2        = get_field('tab_title_2');
$tab_link_2            = get_field('tab_link_2');
$tab_title_3        = get_field('tab_title_3');
$tab_link_3            = get_field('tab_link_3');

$reserv_link        = get_field('reserv_link');
$reserv_title        = get_field('reserv_title');
$reserv_desc        = get_field('reserv_desc');
$reserv_btn            = get_field('reserv_btn');

$facebook             = get_field('facebook');
$twitter             = get_field('twitter');
$gplus                 = get_field('gplus');
$instagram             = get_field('instagram');

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
                                <a href="<?php echo $item_link_1; ?>" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php echo $item_img_1['url']; ?>" alt="<?php echo $item_img_1['alt']; ?>" class="box-icon">
                                        <h5 class="mt-3"><?php echo $item_title_1; ?></h5>
                                        <p class="mb-3"><small><?php echo $item_desc_1; ?></small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
                                        <img src="<?php echo $mo_img_1['url']; ?>" alt="<?php echo $mo_img_1['alt']; ?>" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong><?php echo $item_title_1; ?></strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="<?php echo $item_link_2; ?>" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php echo $item_img_2['url']; ?>" alt="<?php echo $item_img_2['alt']; ?>" class="box-icon">
                                        <h5 class="mt-3"><?php echo $item_title_2; ?></h5>
                                        <p class="mb-3"><small><?php echo $item_desc_2; ?></small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-info text-center d-block d-sm-none">
                                        <img src="<?php echo $mo_img_2['url']; ?>" alt="<?php echo $mo_img_2['alt']; ?>" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong><?php echo $item_title_2; ?></strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="<?php echo $item_link_3; ?>" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php echo $item_img_3['url']; ?>" alt="<?php echo $item_img_3['alt']; ?>" class="box-icon">
                                        <h5 class="mt-3"><?php echo $item_title_3; ?></h5>
                                        <p class="mb-3"><small><?php echo $item_desc_3; ?></small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-warning text-center d-block d-sm-none">
                                        <img src="<?php echo $mo_img_3['url']; ?>" alt="<?php echo $mo_img_3['alt']; ?>" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong><?php echo $item_title_3; ?></strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                            <div class="col-lg-3 col-6 mb-4 page-box">
                                <a href="<?php echo $item_link_4; ?>" class="text-muted">
                                    <div class="box-bg p-3 d-none d-sm-block">
                                        <img src="<?php echo $item_img_4['url']; ?>" alt="<?php echo $item_img_4['alt']; ?>" class="box-icon">
                                        <h5 class="mt-3"><?php echo $item_title_4; ?></h5>
                                        <p class="mb-3"><small><?php echo $item_desc_4; ?></small></p>
                                    </div><!-- for over small devices -->
                                    <div class="box-bg p-4 text-white bg-danger text-center d-block d-sm-none">
                                        <img src="<?php echo $mo_img_4['url']; ?>" alt="<?php echo $mo_img_4['alt']; ?>" class="img-fluid" width="80px">
                                        <h6 class="mt-3"><strong><?php echo $item_title_4; ?></strong></h6>
                                    </div><!-- For only extra-small device -->
                                </a>
                            </div><!-- page-box -->

                        </div><!-- 1st row -->

                        <?php if ($radio) { ?>
                            <div class="row">

                                <div class="col-lg-3 col-6 mb-4 page-box">
                                    <a href="<?php echo $item_link_5; ?>" class="text-muted">
                                        <div class="box-bg p-3 d-none d-sm-block">
                                            <img src="<?php echo $item_img_5['url']; ?>" alt="<?php echo $item_img_5['alt']; ?>" class="box-icon">
                                            <h5 class="mt-3"><?php echo $item_title_5; ?></h5>
                                            <p class="mb-3"><small><?php echo $item_desc_5; ?></small></p>
                                        </div><!-- for over small devices -->
                                        <div class="box-bg p-4 text-white bg-success text-center d-block d-sm-none">
                                            <img src="<?php echo $mo_img_5['url']; ?>" alt="<?php echo $mo_img_5['alt']; ?>" class="img-fluid" width="80px">
                                            <h6 class="mt-3"><strong><?php echo $item_title_5; ?></strong></h6>
                                        </div><!-- For only extra-small device -->
                                    </a>
                                </div><!-- page-box -->

                                <div class="col-lg-3 col-6 mb-4 page-box">
                                    <a href="<?php echo $item_link_6 ?>" class="text-muted">
                                        <div class="box-bg p-3 d-none d-sm-block">
                                            <img src="<?php echo $item_img_6['url']; ?>" alt="<?php echo $item_img_6['alt']; ?>" class="box-icon">
                                            <h5 class="mt-3"><?php echo $item_title_6; ?></h5>
                                            <p class="mb-3"><small><?php echo $item_desc_6; ?></small></p>
                                        </div><!-- for over small devices -->
                                        <div class="box-bg p-4 text-white bg-secondary text-center d-block d-sm-none">
                                            <img src="<?php echo $mo_img_6['url']; ?>" alt="<?php echo $mo_img_6['alt']; ?>" class="img-fluid" width="80px">
                                            <h6 class="mt-3"><strong><?php echo $item_title_6; ?></strong></h6>
                                        </div><!-- For only extra-small device -->
                                    </a>
                                </div><!-- page-box -->

                                <div class="col-lg-3 col-6 mb-4 page-box">
                                    <a href="<?php echo $item_link_7; ?>" class="text-muted">
                                        <div class="box-bg p-3 d-none d-sm-block">
                                            <img src="<?php echo $item_img_7['url']; ?>" alt="<?php echo $item_img_7['alt']; ?>" class="box-icon">
                                            <h5 class="mt-3"><?php echo $item_title_7; ?></h5>
                                            <p class="mb-3"><small><?php echo $item_desc_7; ?></small></p>
                                        </div><!-- for over small devices -->
                                        <div class="box-bg p-4 text-white bg-dark text-center d-block d-sm-none">
                                            <img src="<?php echo $mo_img_7['url']; ?>" alt="<?php echo $mo_img_7['alt']; ?>" class="img-fluid" width="80px">
                                            <h6 class="mt-3"><strong><?php echo $item_title_7; ?></strong></h6>
                                        </div><!-- For only extra-small device -->
                                    </a>
                                </div><!-- page-box -->

                                <div class="col-lg-3 col-6 mb-4 page-box">
                                    <a href="<?php echo $item_link_8; ?>" class="text-muted">
                                        <div class="box-bg p-3 d-none d-sm-block">
                                            <img src="<?php echo $item_img_8['url']; ?>" alt="<?php echo $item_img_8['alt']; ?>" class="box-icon">
                                            <h5 class="mt-3"><?php echo $item_title_8; ?></h5>
                                            <p class="mb-3"><small><?php echo $item_desc_8; ?></small></p>
                                        </div><!-- for over small devices -->
                                        <div class="box-bg p-4 bg-light text-center d-block d-sm-none">
                                            <img src="<?php echo $mo_img_8['url']; ?>" alt="<?php echo $mo_img_8['alt']; ?>" class="img-fluid" width="80px">
                                            <h6 class="mt-3"><strong><?php echo $item_title_8; ?></strong></h6>
                                        </div><!-- For only extra-small device -->
                                    </a>
                                </div><!-- page-box -->

                            </div><!-- 2nd row -->
                        <?php } ?>
                    </div>
                    <!-- Page-Item-Box -->
                    <!-- Page-Item-Box -->

                </div>
                <!-- FRONT-MAIN -->

                <!-- FRONT-SIDE
				====================================================== -->
                <div class="col-md-3 order-md-1">

                    <div class="box-item mb-4 d-none d-md-block">
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="img-fluid">
                    </div><!-- Logo image Box -->

                    <div class="box-item mb-4 d-none d-md-block">
                        <div class="p-3">
                            <h5 class="text-warning"><?php echo $tr_title; ?></h5>
                            <div class="text-muted">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae quisquam, corporis in excepturi officiis impedit!</p>
                                <a href="#collapseIdea" class="btn btn-info" data-toggle="collapse" aria-expanded="false" aria-controls="collapseIdea"><?php echo $tr_btn; ?></a>
                            </div>
                        </div>
                    </div><!-- Collapse Box -->

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
                                    <a href="<?php echo $tab_link_1; ?>">
                                        <li class="list-group-item list-group-item-primary"><?php echo $tab_title_1; ?> <span class="pull-right">&raquo;</span></li>
                                    </a>
                                    <a href="<?php echo $tab_link_2; ?>">
                                        <li class="list-group-item list-group-item-info"><?php echo $tab_title_2; ?> <span class="pull-right">&raquo;</span></li>
                                    </a>
                                    <a href="<?php echo $tab_link_3; ?>">
                                        <li class="list-group-item list-group-item-warning"><?php echo $tab_title_3; ?> <span class="pull-right">&raquo;</span></li>
                                    </a>
                                </ul>
                                <!-- For only small diveice -->
                            </div>

                        </div>

                    </div><!-- Infomation Box-item -->

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
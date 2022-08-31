<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Scroll to Top Button -->
    <a id="scrolltoTop">Top</a>

    <!-- Navbar 
	====================================================== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top mb-4">
        <div class="container">

            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/LINE_logo.svg.png" alt="" class="rounded-circle img-fluid" width="40px" height="40px">
                <span class="ml-2"><?php bloginfo('name'); ?></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Page
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Page Item1</a>
                            <a class="dropdown-item" href="#">Page Item2</a>
                            <a class="dropdown-item" href="#">Page Item3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-contact">Contact</a>
                    </li>
                </ul>
            </div>

        </div><!-- container -->

    </nav><!-- navbar -->

    <!-- MODAL CONTACT
	====================================================== -->
    <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil-square-o"></i> Contact US!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="lead text-center">We Like to receive a mail</p>
                    <br>
                    <form>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="formInput1" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="formInput2" placeholder="Your email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="formInput3" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="formInput4" rows="8" class="form-control" placeholder="Your messages"></textarea>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <button class="btn btn-danger btn-lg btn-fill">Submit</button>
                            </div>
                        </div><!-- row -->

                        <div class="text-center my-3">
                            <p class="lead">OR</p>
                            <p>Would you prefer to call? <br> <i class="fa fa-phone-square"> 02-111-11111</i></p>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL CONTACT -->
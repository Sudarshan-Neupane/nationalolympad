<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="National Olympiad 2014">
        <meta name="author" content="Nationalolympiad">
        <title>Welcome To Official Web Page Of NAO 2014</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>user_include/css/indes.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>user_include/css/slider.css">
        <link href="<?php echo base_url(); ?>user_include/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>user_include/css/costom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>user_include/css/demo_slide.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>user_include/css/bjqs_slide.css" rel="stylesheet">
        <!-- <navo slider>-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>user_include/css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>user_include/css/default.css" type="text/css" media="screen" />
        <script src="<?php echo base_url(); ?>user_include/js/jquery.js"></script>

        <script src="<?php echo base_url(); ?>user_include/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>user_include/js/plugin.js"></script>
        <script src="<?php echo base_url(); ?>user_include/js/bjqs-1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>user_include/js/main.js"></script>
        <script src="<?php echo base_url(); ?>user_include/js/jquery.totemticker.js"></script>
        <script src="<?php echo base_url(); ?>user_include/js/jquery.slidy.js"></script>
        <!-- <navo slider>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>user_include/js/jquery.nivo.slider.js"></script>

    </head>

    <body>
        <div class="header_out">
            <div class="container">
                <div>
                    <?php foreach ($logo as $logo) { ?>
                        <img src="<?php echo base_url() ?>images/<?php echo $logo->img; ?>" alt="national olympiad"> 

                         <?php
                         }
                         ?>
               </div>
                <!--  <div class="col-lg-2"> <a href="#">
                  <img src="<?php echo base_url() ?>user_include/images/logo.png" alt="logo" class="top-margin10" width="80px" height="130px"/></a>
                </div>
                  <div class="col-7 col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-right">
                    <ul class="list-inline pull-right top-margin15">
                
                    </ul>
                    <span class="social-link pull-right">
                     <a href="#" class="twitter"></a>
                      <a href="https://www.facebook.com/NationalOlympiad" class="fb"></a>
                       <a href="#" class="google">
                       </a> <a href="#" class="youtube"></a>
                       
                    <div class="clearfix"></div>
                    
                    </span>
                    <div class="clearfix"></div>
                   
                   <p style="font-size: 25px; color: blue">National Astronomy Olympiad 2014  <a href="https://docs.google.com/forms/d/1Q39949ZYN4rc2GgqEYx3GXoxEz6O7y4NDINL5wSYDQA/viewform" style="text-decoration: blink; color: red">Apply Now</a></p>
                  </div>
                -->


                <div class="clearfix"></div>
            </div>

        </div>

        <div class="nav_out">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="nav navbar-default">
                        <ul class="main-mega-menu main-mega-menu-anim-flip navbar-default">
                            <li class="active"><a href="<?php echo site_url(); ?>welcome">HOME</a></li>
                            <li aria-haspopup="true"> <a href="#">ABOUT US</a>
                                <div class="grid-container3">
                                    <ul>
                                        <li><a href="<?php echo base_url('welcome/vision') ?>">Vision</a></li>
                                        <li> <a href="<?php echo base_url('welcome/mission') ?>">Mission</a> </li>
                                        <li> <a href="<?php echo base_url('welcome/objectives') ?>">Objectives</a> </li>
                                        <li><a href="<?php echo base_url('welcome/our_team') ?>">Our Team</a></li>

                                    </ul>
                                </div>
                            </li>
                            <?php foreach ($menu as $menu) { ?>
                                <li aria-haspopup="true"> <a href="<?php echo base_url('welcome/main_pages') . "/" . $menu->cat_id; ?>"><?php echo $menu->categories; ?></a>
                                    <div class="grid-container3">
                                        <ul>
                                            <?php
                                            foreach ($sub_menu as $sm) {
                                                if ($sm->cat_id == $menu->cat_id) {
                                                    ?>
                                                    <li><a href="<?php echo site_url('welcome/subpage') . "/" . $sm->id; ?>"><?php echo $sm->name; ?></a></li>
                                                <?php }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>

                    </div>
                </div>
            </div>
        </div>


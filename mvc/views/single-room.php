<!DOCTYPE html>
<html lang="en-US" class="no-js">

<!-- Mirrored from max-themes.net/demos/hotale/hotale/resort/single-room.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 10:37:00 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Hotale &#8211; Hotel HTML Template</title>



    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/plugins/fontawesome/font-awesome.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/plugins/fa5/fa5.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/plugins/elegant/elegant-font.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/plugins/ionicons/ionicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/plugins/simpleline/simpleline.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/plugins/gdlr-custom-icon/gdlr-custom-icon.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/plugins/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/include/css/page-builder.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/tourmaster/tourmaster.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/css/tourmaster-global-style-custom.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/js/plugins/tourmaster/room/tourmaster-room.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/css/tourmaster-room-style-customa5b5.css?1653843108&amp;ver=6.0.1" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/css/style-core.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/mvc/mvc/views/css/hotale-style-customafa1.css?1653801118&amp;ver=6.0.1" type="text/css" media="all" />



    <link rel="stylesheet" id="gdlr-core-google-font-css" href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CAmiri%3Aregular%2Citalic%2C700%2C700italic%7CAllison%3Aregular&amp;subset=cyrillic%2Clatin%2Clatin-ext%2Carabic%2Cvietnamese&amp;ver=6.0.1" type="text/css" media="all" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        /* The Modal (background) */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        /* Float cancel and delete buttons and add an equal width */
        .cancelbtn,
        .deletebtn {
            float: left;
            width: 50%;
        }

        /* Add a color to the cancel button */
        .cancelbtn {
            background-color: #6b0505;
            color: white;
        }

        /* Add a color to the delete button */
        .deletebtn {
            background-color: #139436;
        }

        /* Add padding and center-align text to the container */
        .container {
            padding: 6px 100px;
            /* text-align: center; */
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 100;
            /* Sit on top */
            left: 200px;
            top: 75px;
            width: 1100px;
            /* Full width */
            height: 670px;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: whitesmoke;
            padding-top: 50px;
            border-radius: 10px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* The Modal Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and delete button on extra small screens */
        @media screen and (max-width: 300px) {

            .cancelbtn,
            .deletebtn {
                width: 100%;
            }
        }
    </style>
</head>

<body class="home page-template-default page page-id-14980 theme-hotale gdlr-core-body tourmaster-body woocommerce-no-js hotale-body hotale-body-front hotale-full hotale-with-sticky-navigation hotale-blockquote-style-3 gdlr-core-link-to-lightbox" data-home-url="index.html">
    <div class="hotale-mobile-header-wrap">
        <div class="hotale-mobile-header hotale-header-background hotale-style-slide hotale-sticky-mobile-navigation" id="hotale-mobile-header">
            <div class="hotale-mobile-header-container hotale-container clearfix">
                <div class="hotale-logo hotale-item-pdlr">
                    <div class="hotale-logo-inner">
                        <a class="hotale-fixed-nav-logo" href="">
                            <img src="http://localhost/mvc/mvc/views/upload/logo-nx1.png" alt="" width="147" height="37" title="logo-nx1" />
                        </a>
                        <a class="hotale-orig-logo" href="">
                            <img src="http://localhost/mvc/mvc/views/upload/logo-nx2-1.png" alt="" width="294" height="74" title="logo-nx2" />
                        </a>
                    </div>
                </div>
                <div class="hotale-mobile-menu-right">

                    <!-- LOGIN & Register Forms. -->

                    <div class="tourmaster-user-top-bar tourmaster-guest tourmaster-style-2" data-redirect="index.html" data-ajax-url="#">
                        <span class="tourmaster-user-top-bar-login" data-tmlb="login"><i class="icon_lock_alt"></i><span class="tourmaster-text">Login</span></span>
                        <div class="tourmaster-lightbox-content-wrap" data-tmlb-id="login">
                            <div class="tourmaster-lightbox-head">
                                <h3 class="tourmaster-lightbox-title">Login</h3>
                                <i class="tourmaster-lightbox-close icon_close"></i>
                            </div>
                            <div class="tourmaster-lightbox-content">
                                <form class="tourmaster-login-form tourmaster-form-field tourmaster-with-border" method="post" action="#">
                                    <div class="tourmaster-login-form-fields clearfix">
                                        <p class="tourmaster-login-user">
                                            <label>Username or E-Mail</label>
                                            <input type="text" name="log" />
                                        </p>
                                        <p class="tourmaster-login-pass">
                                            <label>Password</label>
                                            <input type="password" name="pwd" />
                                        </p>
                                    </div>

                                    <p class="tourmaster-login-submit">
                                        <input type="submit" name="wp-submit" class="tourmaster-button" value="Sign In!" />
                                    </p>
                                    <p class="tourmaster-login-lost-password">
                                        <a href="#">Forget Password?</a>
                                    </p>

                                </form>

                                <div class="tourmaster-login-bottom">
                                    <h3 class="tourmaster-login-bottom-title">Do not have an account?</h3>
                                    <a class="tourmaster-login-bottom-link" href="">Create an Account</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="hotale-body-outer-wrapper">
        <div class="hotale-body-wrapper clearfix hotale-with-transparent-header hotale-with-frame">
            <div class="hotale-header-background-transparent">
                <div class="hotale-top-bar">
                    <div class="hotale-top-bar-background"></div>
                    <div class="hotale-top-bar-container hotale-container">
                        <div class="hotale-top-bar-container-inner clearfix">
                            <div class="hotale-top-bar-left hotale-item-pdlr">
                                <div class="hotale-top-bar-left-text">
                                    <i class="icon-phone" style="font-size: 15px; color: #ffffff; margin-right: 10px;"></i>1-634-567-34
                                    <i class="icon-envelope" style="font-size: 15px; color: #ffffff; margin-left: 25px; margin-right: 10px;"></i>
                                    <a href="">test@gmail.com</a>
                                </div>
                            </div>
                            <div class="hotale-top-bar-right hotale-item-pdlr">
                                <div class="tourmaster-user-top-bar tourmaster-guest tourmaster-style-2" data-redirect="index.html" data-ajax-url="#">
                                    <span class="tourmaster-user-top-bar-login" data-tmlb="login"><i class="icon_lock_alt"></i><span class="tourmaster-text"><?php echo (isset($_SESSION['user_id'])) ? "<a href='http://localhost/mvc/home/logout'>Logout</a>" : "Login" ?></span></span><?php echo (isset($data['message'])) ? $data['message'] : "" ?></span></span>
                                    <div class="tourmaster-lightbox-content-wrap" data-tmlb-id="login">
                                        <div class="tourmaster-lightbox-head">
                                            <h3 class="tourmaster-lightbox-title">Login</h3>
                                            <i class="tourmaster-lightbox-close icon_close"></i>
                                        </div>
                                        <div class="tourmaster-lightbox-content">
                                            <form class="tourmaster-login-form tourmaster-form-field tourmaster-with-border" method="post" action="">
                                                <div class="tourmaster-login-form-fields clearfix">
                                                    <p class="tourmaster-login-user">
                                                        <label>Username</label>
                                                        <input type="text" name="username" id="username"/>
                                                    </p>
                                                    <div style="color: red" id="username_err"></div>
                                                    <p class="tourmaster-login-pass">
                                                        <label>Password</label>
                                                        <input type="password" name="password" id="password"/>
                                                    </p>
                                                    <div style="color: red" id="password_err"></div>
                                                </div>

                                                <p class="tourmaster-login-submit">
                                                    <input type="submit" name="wp-submit" class="tourmaster-button" value="Sign In!" />
                                                </p>
                                                <p class="tourmaster-login-lost-password">
                                                    <a href="">Forget Password?</a>
                                                </p>

                                            </form>
                                            
                                            <div class="tourmaster-login-bottom">
                                                <h3 class="tourmaster-login-bottom-title">Do not have an account?</h3>
                                                <a class="tourmaster-login-bottom-link" href="">Create an Account</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <header class="hotale-header-wrap hotale-header-style-plain hotale-style-center-menu hotale-sticky-navigation hotale-style-slide" data-navigation-offset="75">
                    <div class="hotale-header-background"></div>
                    <div class="hotale-header-container hotale-container">
                        <div class="hotale-header-container-inner clearfix">
                            <div class="hotale-logo hotale-item-pdlr">
                                <div class="hotale-logo-inner">
                                    <a class="hotale-fixed-nav-logo" href="">
                                        <img src="http://localhost/mvc/mvc/views/upload/logo-nx1.png" alt="" width="147" height="37" title="logo-nx1" />
                                    </a>
                                    <a class="hotale-orig-logo" href="">
                                        <img src="http://localhost/mvc/mvc/views/upload/logo-nx1.png" alt="" width="147" height="37" title="logo-nx1" />
                                    </a>
                                </div>
                            </div>
                            <div class="hotale-navigation hotale-item-pdlr clearfix">
                                <div class="hotale-main-menu" id="hotale-main-menu">
                                    <ul id="menu-main-navigation-1" class="sf-menu">
                                        <li class="menu-item menu-item-home menu-item-has-children hotale-normal-menu">
                                            <a href="http://localhost/mvc/home/index" class="sf-with-ul-pre">Home</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-home" data-size="60">
                                                    <a href="">Home &#8211; Resort 1</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/resort2/index.html">Home &#8211; Resort 2</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/hotel1/index.html">Home &#8211; Hotel 1</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/hotel2/index.html">Home &#8211; Hotel 2</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/apartment/index.html">Home &#8211; Apartment</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="https://max-themes.net/demos/hotale/hotale/apartment2/index.html">Home &#8211; Apartment 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children hotale-normal-menu">
                                            <a href="" class="sf-with-ul-pre">Pages</a>

                                        </li>
                                        <li class="menu-item current-menu-item  menu-item-has-children hotale-normal-menu">
                                            <a href="" class="sf-with-ul-pre">Rooms</a>

                                        </li>
                                        <li class="menu-item hotale-normal-menu">
                                            <a href="">Reservation</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children hotale-normal-menu">
                                            <a href="" class="sf-with-ul-pre">Blog</a>

                                        </li>
                                        <li class="menu-ite hotale-normal-menu"><a href="" class="sf-with-ul-pre">Contact</a></li>
                                    </ul>
                                    <div class="hotale-navigation-slide-bar hotale-navigation-slide-bar-style-2 hotale-left" data-size-offset="0" data-width="19px" id="hotale-navigation-slide-bar"></div>
                                </div>
                                <div class="hotale-main-menu-right-wrap clearfix hotale-item-mglr hotale-navigation-top">
                                    <div class="tourmaster-currency-switcher">
                                        <span class="tourmaster-head"><span>USD</span><i class="fa fa-sort-down"></i></span>
                                        <div class="tourmaster-currency-switcher-inner">
                                            <div class="tourmaster-currency-switcher-content">
                                                <ul>
                                                    <li><a href="">EUR</a></li>
                                                    <li><a href="">CHF</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tourmaster-room-navigation-checkout-wrap">
                                        <a id="tourmaster-room-navigation-checkout-button" class="tourmaster-room-navigation-checkout-button" href="" data-checkout-label="Check Out" data-label="Book Now">
                                            Book Now<span class="tourmaster-count">0</span>
                                        </a>
                                        <div class="tourmaster-room-cart-item-wrap">
                                            <div class="tourmaster-room-cart-items">
                                                <ul></ul>
                                                <a class="tourmaster-checkout-button" href="">Check Out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- hotale-navigation -->
                        </div>
                        <!-- hotale-header-inner -->
                    </div>
                    <!-- hotale-header-container -->
                </header>
                <!-- header -->
            </div>



            <div class="hotale-page-wrapper" id="hotale-page-wrapper">
                <div class="tourmaster-room-single-header-title-wrap" style="border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                    <div class="tourmaster-room-single-header-background-overlay"></div>
                    <div class="tourmaster-container">
                        <h1 class="tourmaster-item-pdlr"><?php echo $data['room']['name'] ?></h1>
                    </div>
                </div>
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper gdlr-core-sticky-sidebar gdlr-core-js" id="gdlr-core-sidebar-wrapper-1">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left">
                                <div class="gdlr-core-pbf-sidebar-content-inner">
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr">
                                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-round" style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">
                                                            <img src="<?php echo "http://localhost/mvc/mvc/views/upload/" . $data['room']['image'] . "" ?>" alt="" width="780" height="595" title="christopher-jolly-GqbU78bdJFM-unsplash" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-1">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 0px 0px; padding: 10px 0px 20px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="tourmaster-room-title-item tourmaster-item-mglr tourmaster-item-pdb clearfix" style="padding-bottom: 35px;">
                                                        <h3 class="tourmaster-room-title-item-title"><?php echo $data['room']['name'] ?></h3>
                                                        <div class="tourmaster-room-title-item-caption">Room Features</div>
                                                        <div class="tourmaster-room-title-price">
                                                            <div class="tourmaster-head">
                                                                <span class="tourmaster-label">From</span><span class="tourmaster-price-discount">$ <?php echo $data['room']['price_per_day'] ?></span><span class="tourmaster-price">$ <?php echo ($data['room']['price_per_day'] - $data['room']['discount']) ?></span>
                                                            </div>
                                                            <div class="tourmaster-tail">per day</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-2">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-icon">
                                                            <i class="gdlr-icon-double-bed2" style="font-size: 33px; line-height: 33px; width: 33px; color: #0a0a0a;"></i>
                                                        </div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 19px; font-weight: 600; text-transform: none;">Bed</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px; font-weight: 500; font-style: normal; margin-top: 0px;">
                                                                    <?php echo $data['room']['bed'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-3">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-icon" style="margin-top: 0px; margin-right: 26px;">
                                                            <i class="gdlr-icon-group" style="font-size: 40px; line-height: 40px; width: 40px; color: #0a0a0a;"></i>
                                                        </div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 19px; font-weight: 600; text-transform: none;">Max Guest</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px; font-weight: 500; font-style: normal; margin-top: 0px;">
                                                                    <?php echo $data['room']['max_guests'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-4">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-icon"><i class="gdlr-icon-resize" style="font-size: 34px; line-height: 34px; width: 34px; color: #0a0a0a;"></i></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 19px; font-weight: 600; text-transform: none;">Room Space</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px; font-weight: 500; font-style: normal; margin-top: 0px;">
                                                                    30 sqm.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-5">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-icon" style="margin-right: 27px;">
                                                            <i class="gdlr-icon-nature" style="font-size: 37px; line-height: 37px; width: 37px; color: #0a0a0a;"></i>
                                                        </div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 19px; font-weight: 600; text-transform: none;">Room View</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px; font-weight: 500; font-style: normal; margin-top: 0px;">
                                                                    Forest View
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-6">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 10px 0px 0px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                        <div class="gdlr-core-text-box-item-content" style="font-size: 18px; text-transform: none;">
                                                            <p>
                                                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                                                                coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country,
                                                                in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day
                                                                however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                                                            </p>
                                                            <p>
                                                                The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She
                                                                packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on
                                                                the skyline of her hometown
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-7">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 0px 0px; padding: 0px 0px 25px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px;">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 25px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                Room Amenities<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php foreach ($data['amenities'] as $amenities) : ?>
                                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-8">
                                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-move-up-with-shadow" style="margin: 0px 10px 20px 20px; padding: 25px 0px 0px 10px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                                <div class="gdlr-core-pbf-background-wrap" style="
                                                    border-radius: 20px 20px 20px 20px;
                                                    -moz-border-radius: 20px 20px 20px 20px;
                                                    -webkit-border-radius: 20px 20px 20px 20px;
                                                    border-width: 1px 1px 1px 1px;
                                                    border-color: #e5e5e5;
                                                    border-style: solid;
                                                "></div>
                                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                    <div class="gdlr-core-pbf-element">
                                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                                            <div class="gdlr-core-title-item-left-icon" style="margin: -12px 16px 0px 0px; font-size: 35px;"></div>
                                                            <div class="gdlr-core-title-item-left-icon-wrap">
                                                                <div class="gdlr-core-title-item-title-wrap">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 17px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #848484;">
                                                                        <?php echo $amenities['name'] ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px;">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 25px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                Booked Date<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php foreach ($data['booked'] as $booked) : ?>
                                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-8">
                                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-move-up-with-shadow" style="margin: 0px 10px 20px 20px; padding: 25px 0px 0px 10px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                                <div class="gdlr-core-pbf-background-wrap" style="
                                                    border-radius: 20px 20px 20px 20px;
                                                    -moz-border-radius: 20px 20px 20px 20px;
                                                    -webkit-border-radius: 20px 20px 20px 20px;
                                                    border-width: 1px 1px 1px 1px;
                                                    border-color: #e5e5e5;
                                                    border-style: solid;
                                                "></div>
                                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                    <div class="gdlr-core-pbf-element">
                                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                                            <div class="gdlr-core-title-item-left-icon" style="margin: -12px 16px 0px 0px; font-size: 35px;"></div>
                                                            <div class="gdlr-core-title-item-left-icon-wrap">
                                                                <div class="gdlr-core-title-item-title-wrap">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 17px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #848484;">
                                                                        <?php echo $booked['check_in'] ?> - <?php echo $booked['check_out'] ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-16">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 0px 0px; padding: 45px 0px 0px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px;">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 25px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                Hotel Amenities<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-17">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-move-up-with-shadow" style="margin: 0px 10px 20px 20px; padding: 25px 0px 0px 10px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                            <div class="gdlr-core-pbf-background-wrap" style="
                                                    border-radius: 20px 20px 20px 20px;
                                                    -moz-border-radius: 20px 20px 20px 20px;
                                                    -webkit-border-radius: 20px 20px 20px 20px;
                                                    border-width: 1px 1px 1px 1px;
                                                    border-color: #e5e5e5;
                                                    border-style: solid;
                                                "></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                                        <div class="gdlr-core-title-item-left-icon" style="margin: -12px 16px 0px 0px; font-size: 35px;"><i class="gdlr-icon-weights" style="color: #1e1e1e;"></i></div>
                                                        <div class="gdlr-core-title-item-left-icon-wrap">
                                                            <div class="gdlr-core-title-item-title-wrap">
                                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 17px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #848484;">
                                                                    Gym<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-18">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-move-up-with-shadow" style="margin: 0px 10px 20px 10px; padding: 25px 0px 0px 10px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                            <div class="gdlr-core-pbf-background-wrap" style="
                                                    border-radius: 20px 20px 20px 20px;
                                                    -moz-border-radius: 20px 20px 20px 20px;
                                                    -webkit-border-radius: 20px 20px 20px 20px;
                                                    border-width: 1px 1px 1px 1px;
                                                    border-color: #e5e5e5;
                                                    border-style: solid;
                                                "></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                                        <div class="gdlr-core-title-item-left-icon" style="margin: -12px 15px 0px 0px; font-size: 35px;"><i class="gdlr-icon-parking" style="color: #1e1e1e;"></i></div>
                                                        <div class="gdlr-core-title-item-left-icon-wrap">
                                                            <div class="gdlr-core-title-item-title-wrap">
                                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 17px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #848484;">
                                                                    Parking<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-19">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-move-up-with-shadow" style="margin: 0px 20px 20px 10px; padding: 25px 0px 0px 10px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                            <div class="gdlr-core-pbf-background-wrap" style="
                                                    border-radius: 20px 20px 20px 20px;
                                                    -moz-border-radius: 20px 20px 20px 20px;
                                                    -webkit-border-radius: 20px 20px 20px 20px;
                                                    border-width: 1px 1px 1px 1px;
                                                    border-color: #e5e5e5;
                                                    border-style: solid;
                                                "></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                                        <div class="gdlr-core-title-item-left-icon" style="margin: -12px 15px 0px 0px; font-size: 35px;"><i class="gdlr-icon-massage" style="color: #1e1e1e;"></i></div>
                                                        <div class="gdlr-core-title-item-left-icon-wrap">
                                                            <div class="gdlr-core-title-item-title-wrap">
                                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 17px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #848484;">
                                                                    Spa<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-20">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-move-up-with-shadow" style="margin: 0px 10px 20px 20px; padding: 25px 0px 0px 10px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                            <div class="gdlr-core-pbf-background-wrap" style="
                                                    border-radius: 20px 20px 20px 20px;
                                                    -moz-border-radius: 20px 20px 20px 20px;
                                                    -webkit-border-radius: 20px 20px 20px 20px;
                                                    border-width: 1px 1px 1px 1px;
                                                    border-color: #e5e5e5;
                                                    border-style: solid;
                                                "></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                                        <div class="gdlr-core-title-item-left-icon" style="margin: -12px 16px 0px 0px; font-size: 35px;"><i class="gdlr-icon-dish" style="color: #1e1e1e;"></i></div>
                                                        <div class="gdlr-core-title-item-left-icon-wrap">
                                                            <div class="gdlr-core-title-item-title-wrap">
                                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 17px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #848484;">
                                                                    Restaurant<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-21">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-move-up-with-shadow" style="margin: 0px 10px 20px 10px; padding: 25px 0px 0px 10px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                            <div class="gdlr-core-pbf-background-wrap" style="
                                                    border-radius: 20px 20px 20px 20px;
                                                    -moz-border-radius: 20px 20px 20px 20px;
                                                    -webkit-border-radius: 20px 20px 20px 20px;
                                                    border-width: 1px 1px 1px 1px;
                                                    border-color: #e5e5e5;
                                                    border-style: solid;
                                                "></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                                        <div class="gdlr-core-title-item-left-icon" style="margin: -12px 15px 0px 0px; font-size: 35px;"><i class="gdlr-icon-food-service-copy" style="color: #1e1e1e;"></i></div>
                                                        <div class="gdlr-core-title-item-left-icon-wrap">
                                                            <div class="gdlr-core-title-item-title-wrap">
                                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 17px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #848484;">
                                                                    Room Service<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-22">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-move-up-with-shadow" style="margin: 0px 20px 20px 10px; padding: 25px 0px 0px 10px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                            <div class="gdlr-core-pbf-background-wrap" style="
                                                    border-radius: 20px 20px 20px 20px;
                                                    -moz-border-radius: 20px 20px 20px 20px;
                                                    -webkit-border-radius: 20px 20px 20px 20px;
                                                    border-width: 1px 1px 1px 1px;
                                                    border-color: #e5e5e5;
                                                    border-style: solid;
                                                "></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                                        <div class="gdlr-core-title-item-left-icon" style="margin: -12px 15px 0px 0px; font-size: 35px;"><i class="gdlr-icon-swimming-pool1" style="color: #1e1e1e;"></i></div>
                                                        <div class="gdlr-core-title-item-left-icon-wrap">
                                                            <div class="gdlr-core-title-item-title-wrap">
                                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 17px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #848484;">
                                                                    Swimming Pool<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right hotale-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding gdlr-core-line-height">
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                    <div class="tourmaster-room-booking-bar-wrap">
                                        <div class="tourmaster-room-booking-bar-title"><span class="tourmaster-active" data-room-tab="booking">Book Your Room</span><span data-room-tab="enquiry">Enquiry</span></div>
                                        <p id="bill_price" style="display: none;">
                                            <?php
                                            echo ($data['room']['price_per_day'] - $data['room']['discount']);
                                            ?>
                                        </p>
                                        <div class="tourmaster-room-booking-bar-content">
                                            <div class="tourmaster-room-booking-wrap" class="tourmaster-active" data-room-tab="booking">
                                                <form class="tourmaster-room-booking-form clearfix" id="tourmaster-room-booking-form" action="" data-action="tourmaster_room_booking_form" method="post">
                                                    <div class="tourmaster-room-date-selection tourmaster-vertical">
                                                        <div class="tourmaster-custom-start-date gdlr-core-skin-e-background">
                                                            <div class="tourmaster-head gdlr-core-skin-e-content">Check In</div>
                                                            <div class="tourmaster-tail gdlr-core-skin-e-content">
                                                                <?php if (isset($_SESSION['check_in'])) {
                                                                    echo $_SESSION['check_in'];
                                                                } else {
                                                                    echo date("Y-m-d");
                                                                }
                                                                ?>
                                                            </div>
                                                            <input type="hidden" name="start_date" value="<?php echo isset($_SESSION['check_in']) ? $_SESSION['check_in'] :  date("Y-m-d"); ?>" id="check_in_date" />
                                                        </div>
                                                        <div class="tourmaster-custom-end-date gdlr-core-skin-e-background">
                                                            <div class="tourmaster-head gdlr-core-skin-e-content">Check Out</div>
                                                            <div class="tourmaster-tail gdlr-core-skin-e-content">
                                                                <?php if (isset($_SESSION['check_out'])) {
                                                                    echo $_SESSION['check_out'];
                                                                } else {
                                                                    echo date("Y-m-d", time() + 86400);
                                                                }
                                                                ?>
                                                            </div>
                                                            <input type="hidden" name="end_date" value="<?php echo isset($_SESSION['check_out']) ? $_SESSION['check_out'] :  date("Y-m-d", time() + 86400); ?>" id="check_out_date" />
                                                        </div>
                                                        <div class="tourmaster-custom-datepicker-wrap" data-date-format="d M yy">
                                                            <i class="tourmaster-custom-datepicker-close icon_close"></i>
                                                            <div class="tourmaster-custom-datepicker-title"></div>
                                                            <div class="tourmaster-custom-datepicker-calendar"></div>
                                                        </div>
                                                    </div>

                                                    <div class="tourmaster-room-amount-selection">
                                                        <div class="tourmaster-custom-amount-display gdlr-core-skin-e-background">
                                                            <div class="tourmaster-head gdlr-core-skin-e-content">Payment</div>
                                                            <select class="form-select" aria-label="Default select example" name="payment" id="pay">
                                                                <option selected value="off">Offline</option>
                                                                <option value="on">Online</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="tourmaster-room-booking-guest-selection tourmaster-one">
                                                        <div class="tourmaster-room-amount-selection">
                                                            <div class="tourmaster-custom-amount-display gdlr-core-skin-e-background">
                                                                <div class="tourmaster-head gdlr-core-skin-e-content">
                                                                    <span>Room<span class="tourmaster-number">1</span> : </span>Guests
                                                                </div>
                                                                <div class="tourmaster-tail gdlr-core-skin-e-content"><span class="tourmaster-space"></span>Guests 2<span class="tourmaster-space"></span></div>
                                                            </div>
                                                            <div class="tourmaster-custom-amount-selection-wrap">
                                                                <div class="tourmaster-custom-amount-selection-item clearfix" data-label="Guests">
                                                                    <div class="tourmaster-head">Guests</div>
                                                                    <div class="tourmaster-tail">
                                                                        <span class="tourmaster-minus"><i class="icon_minus-06"></i></span><span class="tourmaster-amount">2</span>
                                                                        <span class="tourmaster-plus"><i class="icon_plus"></i></span>
                                                                    </div>
                                                                    <input type="hidden" name="guests" value="2" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="room_id" value="15031" /><input type="hidden" name="post_type" value="room" />

                                                    <div id="id01" class="modal">
                                                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                                                        <div class="container">
                                                            <h1 style="text-align: center;">BILL DETAILS</h1>
                                                            <p style="color: black;">ROOM: <?php echo $data['room']['name'] ?></p>
                                                            <img src="<?php echo "http://localhost/mvc/mvc/views/upload/" . $data['room']['image'] . "" ?>" alt="" width="200" height="595" style="margin-bottom: 20px;" />
                                                            <p style="color: black;" id="bill_check_in">CHECK_IN: </p>
                                                            <p style="color: black;" id="bill_check_out">CHECK_OUT: </p>
                                                            <p style="color: black;" id="bill_payment">PAYMENT: </p>
                                                            <p style="color: black;" id="bill_price_1">PRICE: </p>
                                                            <div class="clearfix">
                                                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                                                <button type="submit" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">BOOK NOW</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <button onclick=" document.getElementById('id01').style.display='block'; getData()">BOOK NOW</button>
                                                <script>
                                                    function getData() {
                                                        let x = document.getElementById("check_in_date").value;
                                                        let y = document.getElementById("check_out_date").value;
                                                        let z = document.getElementById("pay").value;
                                                        let start = new Date(x);
                                                        let end = new Date(y);
                                                        if (z === "off") {
                                                            z = "OFFLINE";
                                                        } else {
                                                            z = "ONLINE";
                                                        }
                                                        let difference = end.getTime() - start.getTime();
                                                        let TotalDays = Math.ceil(difference / (1000 * 3600 * 24));
                                                        document.getElementById("bill_check_in").innerHTML = "CHECK_IN: " + x;
                                                        document.getElementById("bill_check_out").innerHTML = "CHECK_OUT: " + y;
                                                        document.getElementById("bill_payment").innerHTML = "PAYMENT: " + z;
                                                        let t = document.getElementById("bill_price").innerHTML;
                                                        Number(t);
                                                        document.getElementById("bill_price_1").innerHTML = "PRICE: " + TotalDays * t;

                                                    }
                                                </script>
                                            </div>
                                            <div class="tourmaster-room-enquiry-wrap" data-room-tab="enquiry">
                                                <form class="tourmaster-enquiry-form tourmaster-form-field tourmaster-room clearfix" id="tourmaster-enquiry-form" data-action="tourmaster_room_send_enquiry_form" data-validate-error="Please fill all required fields.">
                                                    <div class="tourmaster-enquiry-field tourmaster-enquiry-field-full-name tourmaster-type-text clearfix">
                                                        <div class="tourmaster-head">Full Name<span class="tourmaster-req">*</span></div>
                                                        <div class="tourmaster-tail clearfix"><input type="text" name="full-name" value="" data-required /></div>
                                                    </div>
                                                    <div class="tourmaster-enquiry-field tourmaster-enquiry-field-email-address tourmaster-type-text clearfix">
                                                        <div class="tourmaster-head">Email Address<span class="tourmaster-req">*</span></div>
                                                        <div class="tourmaster-tail clearfix"><input type="text" name="email-address" value="" data-required /></div>
                                                    </div>
                                                    <div class="tourmaster-enquiry-field tourmaster-enquiry-field-your-enquiry tourmaster-type-textarea clearfix">
                                                        <div class="tourmaster-head">Your Enquiry<span class="tourmaster-req">*</span></div>
                                                        <div class="tourmaster-tail clearfix"><textarea name="your-enquiry" data-required></textarea></div>
                                                    </div>
                                                    <div class="tourmaster-enquiry-term">
                                                        <input type="checkbox" name="tourmaster-require-acceptance" />* I agree with <a href="#" target="_blank">Terms of Service</a> and <a href="#" target="_blank">Privacy Statement</a>.
                                                        <div class="tourmaster-enquiry-term-message tourmaster-enquiry-form-message tourmaster-failed">Please agree to all the terms and conditions before proceeding to the next step</div>
                                                    </div>
                                                    <div class="tourmaster-enquiry-form-message"></div>
                                                    <input type="hidden" name="room-id" value="15031" /><input type="submit" class="tourmaster-room-button tourmaster-full" value="Submit Enquiry" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" id="gdlr-core-wrapper-2">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-scroll gdlr-core-item-pdlr">
                                        <div class="gdlr-core-sly-slider gdlr-core-js-2">
                                            <ul class="slides">
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr" style="margin-left: 5px; margin-right: 5px;">
                                                    <div class="gdlr-core-media-image" style="height: 500px;">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/shutterstock_1298236804.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                            <img src="http://localhost/mvc/mvc/views/upload/shutterstock_1298236804.jpg" alt="" width="2200" height="1467" title="shutterstock_1298236804" />
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr" style="margin-left: 5px; margin-right: 5px;">
                                                    <div class="gdlr-core-media-image" style="height: 500px;">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/single-room-gallery-img.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                            <img src="http://localhost/mvc/mvc/views/upload/single-room-gallery-img.jpg" alt="" width="711" height="997" title="single-room-gallery-img" />
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr" style="margin-left: 5px; margin-right: 5px;">
                                                    <div class="gdlr-core-media-image" style="height: 500px;">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/shutterstock_324822821.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                            <img src="http://localhost/mvc/mvc/views/upload/shutterstock_324822821.jpg" alt="" width="1800" height="1200" title="shutterstock_324822821" />
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr" style="margin-left: 5px; margin-right: 5px;">
                                                    <div class="gdlr-core-media-image" style="height: 500px;">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/andrii-podilnyk-766487-unsplash-scaled.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                            <img src="http://localhost/mvc/mvc/views/upload/andrii-podilnyk-766487-unsplash-scaled.jpg" alt="" width="1984" height="2560" title="andrii-podilnyk-766487-unsplash" />
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr" style="margin-left: 5px; margin-right: 5px;">
                                                    <div class="gdlr-core-media-image" style="height: 500px;">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/shutterstock_1354405256.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                            <img src="http://localhost/mvc/mvc/views/upload/shutterstock_1354405256.jpg" alt="" width="2000" height="1334" title="shutterstock_1354405256" />
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr" style="margin-left: 5px; margin-right: 5px;">
                                                    <div class="gdlr-core-media-image" style="height: 500px;">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/jen-p-541467-unsplash-scaled.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                            <img src="http://localhost/mvc/mvc/views/upload/jen-p-541467-unsplash-scaled.jpg" alt="" width="1920" height="2560" title="jen-p-541467-unsplash" />
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr" style="margin-left: 5px; margin-right: 5px;">
                                                    <div class="gdlr-core-media-image" style="height: 500px;">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/christopher-jolly-GqbU78bdJFM-unsplash-1.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                            <img src="http://localhost/mvc/mvc/views/upload/christopher-jolly-GqbU78bdJFM-unsplash-1.jpg" alt="" width="2000" height="1333" title="christopher-jolly-GqbU78bdJFM-unsplash" />
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="gdlr-core-sly-scroll">
                                            <div class="gdlr-core-sly-scroll-handle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-section">
                        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-23">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 0px 0px; padding: 30px 0px 10px 0px;">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 20px;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 20px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-24">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 0px 0px; padding: 30px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 60px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 31px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                            More Rooms<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-25">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 20px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="tourmaster-room-item clearfix tourmaster-room-item-style-grid" id="gdlr-core-room-1">
                                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2" data-type="carousel" data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                                                        <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-outer gdlr-core-center-align" style="margin-top: -60px;">
                                                            <i class="icon-arrow-left flex-prev" style="color: #c4c4c4; font-size: 34px; left: -90px;"></i>
                                                            <i class="icon-arrow-right flex-next" style="color: #c4c4c4; font-size: 34px; right: -90px;"></i>
                                                        </div>
                                                        <ul class="slides">
                                                            <?php foreach ($data['rooms'] as $r) : ?>
                                                                <li class="gdlr-core-item-mglr">
                                                                    <div class="tourmaster-room-grid">
                                                                        <div class="tourmaster-room-grid-inner">
                                                                            <div class="tourmaster-room-thumbnail tourmaster-media-image tourmaster-with-price">
                                                                                <a href="<?php echo "http://localhost/mvc/home/single_room/" . $r['id'] . "" ?>">
                                                                                    <img src="<?php echo "http://localhost/mvc/mvc/views/upload/" . $r['image'] . "" ?>" alt="" width="780" height="595" />
                                                                                </a>
                                                                                <div class="tourmaster-price-wrap tourmaster-with-bg">
                                                                                    <span class="tourmaster-head">From</span><span class="tourmaster-price">$ <?php echo ($r['price_per_day'] - $r['discount']) ?></span><span class="tourmaster-tail"> / day</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tourmaster-room-content-wrap">
                                                                                <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                    <a href="<?php echo "http://localhost/mvc/home/single_room/" . $r['id'] . "" ?>"><?php echo $r['name'] ?></a>
                                                                                </h3>
                                                                                <div class="tourmaster-info-wrap clearfix">
                                                                                    <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail"><?php echo $r['bed'] ?></span></div>
                                                                                    <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail"><?php echo $r['max_guests'] ?> Guests</span></div>
                                                                                </div>
                                                                                <a class="tourmaster-read-more tourmaster-type-text" href="<?php echo "http://localhost/mvc/home/single_room/" . $r['id'] . "" ?>">
                                                                                    Book Now<i class="icon-arrow-right"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            <?php endforeach ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tourmaster-single-review-container tourmaster-container">
                    <div class="tourmaster-single-review-item tourmaster-item-pdlr">
                        <div class="tourmaster-single-review" id="tourmaster-room-single-review">
                            <div class="tourmaster-single-review-head clearfix">
                                <div class="tourmaster-single-review-head-info">
                                    <div class="tourmaster-room-rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span class="tourmaster-room-rating-text">1 Review</span>
                                    </div>
                                    <div class="tourmaster-single-review-filter" id="tourmaster-single-review-filter">
                                        <div class="tourmaster-single-review-sort-by">
                                            <span class="tourmaster-head">Sort By:</span><span class="tourmaster-sort-by-field" data-sort-by="rating">Rating</span>
                                            <span class="tourmaster-sort-by-field tourmaster-active" data-sort-by="date">Date</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tourmaster-single-review-content" id="tourmaster-single-review-content" data-room-id="15031" data-ajax-url="https://demo.goodlayers.com/hotale/resort/wp-admin/admin-ajax.php">
                                <div class="tourmaster-single-review-content-item clearfix">
                                    <div class="tourmaster-single-review-user clearfix">
                                        <div class="tourmaster-single-review-avatar tourmaster-media-image">
                                            <img alt="" src="https://secure.gravatar.com/avatar/03b9ebd1ab10d2362a586d5492188d1f?s=90&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/03b9ebd1ab10d2362a586d5492188d1f?s=180&#038;d=mm&#038;r=g 2x" class="avatar avatar-90 photo" height="90" width="90" loading="lazy" />
                                        </div>
                                        <h4 class="tourmaster-single-review-user-name">John Smith</h4>
                                    </div>
                                    <div class="tourmaster-single-review-detail">
                                        <div class="tourmaster-single-review-detail-description">
                                            <p>Very nice room!</p>
                                        </div>
                                        <div class="tourmaster-single-review-detail-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                        <div class="tourmaster-single-review-detail-date">Feb 2, 2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer>
                <div class="hotale-footer-wrapper">
                    <div class="hotale-footer-container hotale-container clearfix">
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-21" class="widget widget_block widget_media_image hotale-widget">
                                <figure class="wp-block-image">
                                    <img loading="lazy" width="110" height="27" src="http://localhost/mvc/mvc/views/upload/logo-resort.png" alt="" class="wp-image-14995" />
                                </figure>
                            </div>
                            <div id="block-7" class="widget widget_block widget_text hotale-widget">
                                <p></p>
                            </div>
                            <div id="block-8" class="widget widget_block hotale-widget">
                                <p>
                                    <span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span><i class="fa fa-facebook" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                    <i class="fa5b fa-twitter" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                    <i class="fa5b fa-pinterest-p" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                    <i class="fa5b fa5-tiktok" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                </p>
                            </div>
                            <div id="block-22" class="widget widget_block widget_text hotale-widget">
                                <p></p>
                            </div>
                            <div id="block-25" class="widget widget_block hotale-widget">
                                <div class="tourmaster-currency-switcher-shortcode clearfix">
                                    <div class="tourmaster-currency-switcher" style="background: #333333;">
                                        <span class="tourmaster-head" style="color: #ffffff;"><span>USD</span><i class="fa fa-sort-down"></i></span>
                                        <div class="tourmaster-currency-switcher-inner">
                                            <div class="tourmaster-currency-switcher-content">
                                                <ul>
                                                    <li><a href="#">EUR</a></li>
                                                    <li><a href="#">CHF</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-10" class="widget widget_block hotale-widget">
                                <h4>Contact</h4>
                            </div>
                            <div id="block-14" class="widget widget_block hotale-widget">
                                <p><span style="color: #ffffff;">T</span>: 1-634-567-34</p>
                                <p><span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span></p>
                                <p><span style="color: #ffffff;">E</span>: <a href="#">test@gmail.com</a></p>
                                <p><span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span></p>
                                <p><span style="color: #ffffff;">F</span>: 1-634-567-35</p>
                            </div>
                        </div>
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-12" class="widget widget_block hotale-widget">
                                <h4>Hotel Address</h4>
                            </div>
                            <div id="block-15" class="widget widget_block hotale-widget">
                                <p>
                                    <span style="color: #ffffff;">
                                        Hotale Av.<br />
                                        del Ejercito, 2, 1900<br />
                                        Madrid, Spain
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-18" class="widget widget_block widget_media_image hotale-widget">
                                <div class="wp-block-image">
                                    <figure class="aligncenter size-full">
                                        <img loading="lazy" width="213" height="90" src="upload/footer-banner.png" alt="" class="wp-image-15004" />
                                    </figure>
                                </div>
                            </div>
                            <div id="block-20" class="widget widget_block widget_media_image hotale-widget">
                                <div class="wp-block-image">
                                    <figure class="aligncenter is-resized">
                                        <img loading="lazy" src="http://localhost/mvc/mvc/views/upload/footer-cards.png" alt="" class="wp-image-15005" width="154" height="26" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hotale-copyright-wrapper">
                    <div class="hotale-copyright-container hotale-container clearfix">
                        <div class="hotale-copyright-left hotale-item-pdlr">
                            <div style="text-transform: uppercase; font-weight: 500; font-size: 13px; letter-spacing: 3px;">
                                <a href="index.html" style="margin-right: 22px;">Home</a>
                                <a href="about-us.html" style="margin-right: 22px;">About</a>
                                <a href="about-us-2.html" style="margin-right: 22px;">Privacy Policy</a>
                                <a href="contact.html" style="margin-right: 22px;">Contact</a>
                            </div>
                        </div>
                        <div class="hotale-copyright-right hotale-item-pdlr">Copyright © GoodLayers. All Rights Reserved.</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/jquery.minaf6c.js?ver=3.6.0" id="jquery-core-js"></script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/jquery-migrate.mind617.js?ver=3.3.2" id="jquery-migrate-js"></script>
    <script type="text/javascript" id="snazzymaps-js-js-extra">
        /* <![CDATA[ */
        var SnazzyDataForSnazzyMaps = [];
        SnazzyDataForSnazzyMaps = {
            id: 15,
            name: "Subtle Grayscale",
            description: "A nice, simple grayscale version of the map with color extremes that are never too harsh on the eyes. Originally created for http:\/\/barvinssurvins.fr\/situer.",
            url: "https:\/\/snazzymaps.com\/style\/15\/subtle-grayscale",
            imageUrl: "https:\/\/snazzy-maps-cdn.azureedge.net\/assets\/15-subtle-grayscale.png?v=20170626083535",
            json: '[{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]',
            views: 1006718,
            favorites: 2583,
            createdBy: {
                name: "Paulo Avila",
                url: null
            },
            createdOn: "2013-10-30T16:37:24.593",
            tags: ["greyscale", "light"],
            colors: ["gray", "white"],
        };
        /* ]]> */
    </script>

    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/ui/core.min.js" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/ui/datepicker.min.js" id="jquery-ui-datepicker-js"></script>
    <script type="text/javascript" id="jquery-ui-datepicker-js-after">
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                closeText: "Close",
                currentText: "Today",
                monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                nextText: "Next",
                prevText: "Previous",
                dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
                dateFormat: "M d, yy",
                firstDay: 1,
                isRTL: false,
            });
        });
    </script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/ui/effect.min.js" id="jquery-effects-core-js"></script>
    <script type="text/javascript" id="tourmaster-script-js-extra">
        /* <![CDATA[ */
        var TMi18n = {
            closeText: "Done",
            currentText: "Today",
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
            firstDay: "1",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/plugins/tourmaster/tourmaster.js" id="tourmaster-script-js"></script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/plugins/tourmaster/room/tourmaster-room.js" id="tourmaster-room-script-js"></script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/plugins/jquery.mmenu.js" id="hotale-jquery-mmenu-js"></script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/plugins/jquery.superfish.js" id="hotale-jquery-superfish-js"></script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/plugins/script-core.js" id="hotale-script-core-js"></script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/plugins/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/plugins/scripta732.js?ver=1653819908" id="gdlr-core-plugin-js"></script>
    <script type="text/javascript" id="gdlr-core-page-builder-js-extra">
        /* <![CDATA[ */
        var gdlr_core_pbf = {
            admin: "",
            video: {
                width: "640",
                height: "360"
            },
            ajax_url: "#"
        };
        /* ]]> */
    </script>

    <script type="text/javascript" src="http://localhost/mvc/mvc/views/js/plugins/goodlayers-core/include/js/page-builderd36b.js?ver=1.3.9" id="gdlr-core-page-builder-js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

<!-- Mirrored from max-themes.net/demos/hotale/hotale/resort/single-room.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 10:37:02 GMT -->

</html>
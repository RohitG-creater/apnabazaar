<!DOCTYPE HTML>
<html>
<head>
    <title>New Shop a E-Commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts
    </title>
    <!--css-->
    <link href="<?= base_url().'public/css/bootstrap.css' ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= base_url().'public/css/style.css' ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= base_url().'public/css/font-awesome.css' ?>" rel="stylesheet">
    <!--css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300'
        rel='stylesheet' type='text/css'>
    <!--search jQuery-->

    <link rel="stylesheet" href="<?= base_url().'public/css/jstarbox.css' ?>" type="text/css" media="screen" charset="utf-8" />

    <!--//End-rate-->
    <link href="<?= base_url().'public/css/coreSlider.css' ?>" rel="stylesheet" type="text/css">
    <script src="<?= base_url('public/js/simpleCart.min.js') ?>"></script>
    <!-- cart -->
    <script defer src="<?= base_url('public/js/jquery.flexslider.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('public/css/flexslider.css') ?>" type="text/css" media="screen" />
    <script src="<?= base_url('public/js/imagezoom.js') ?>"></script>
    <script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
    </script>
    <script>
        var base_url = "<?= base_url(); ?>";
    </script>
     <style>
    .loading {
        position: fixed;
        z-index: 999;
        height: 2em;
        width: 2em;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }

    /* Transparent Overlay */
    .loading:before {
        content: '';
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, .8));

        background: -webkit-radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, .8));
    }

    /* :not(:required) hides these rules from IE9 and below */
    .loading:not(:required) {
        /* hide "loading..." text */
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
    }

    .loading:not(:required):after {
        content: '';
        display: block;
        font-size: 10px;
        width: 1em;
        height: 1em;
        margin-top: -0.5em;
        -webkit-animation: spinner 150ms infinite linear;
        -moz-animation: spinner 150ms infinite linear;
        -ms-animation: spinner 150ms infinite linear;
        -o-animation: spinner 150ms infinite linear;
        animation: spinner 150ms infinite linear;
        border-radius: 0.5em;
        -webkit-box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
        box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
    }

    /* Animation */

    @-webkit-keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @-moz-keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @-o-keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    </style>
      <script type="text/javascript">
    jQuery(function() {
        jQuery('.starbox').each(function() {
            var starbox = jQuery(this);
            starbox.starbox({
                average: starbox.attr('data-start-value'),
                changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass(
                    'clickonce') ? 'once' : true,
                ghosting: starbox.hasClass('ghosting'),
                autoUpdateAverage: starbox.hasClass('autoupdate'),
                buttons: starbox.hasClass('smooth') ? false : starbox.attr(
                    'data-button-count') || 5,
                stars: starbox.attr('data-star-count') || 5
            }).bind('starbox-value-changed', function(event, value) {
                if (starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' ' + val);
                    return val;
                }
            })
        });
    });
    </script>
    <!--//End-rate-->

    <link href="<?= base_url('public/css/owl.carousel.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('public/js/owl.carousel.js'); ?>"></script>
    <script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items: 1,
            lazyLoad: true,
            autoPlay: true,
            navigation: false,
            navigationText: false,
            pagination: true,
        });
    });
    </script>
</head>
<body>
<div class="loading" style="display:none;">&#8230;</div>

    <!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="top-left">
                    <a href="#"> Help <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
                </div>
                <div class="top-right">
                    <ul>
                        <li><a href="<?= base_url('checkout-page'); ?>">Checkout</a></li>
                        <li><a href="<?= base_url('login'); ?>">Login</a></li>
                        <li><a href="<?= base_url('registration'); ?>"> Create Account </a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="heder-bottom">
            <div class="container">
                <div class="logo-nav">
                    <div class="logo-nav-left">
                        <h1><a href="index.html">New Shop <span>Shop anywhere</span></a></h1>
                    </div>
                    <div class="logo-nav-left1">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1"
                                    data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="<?= base_url('welcome'); ?>" class="act">Home</a></li>
                                    <!-- Mega Menu -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b
                                                class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu1</h6>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Clothing</a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Wallets</a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Shoes</a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Watches</a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>"> Underwear </a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu2</h6>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Sunglasses</a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Wallets,Bags</a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Footwear</a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Watches</a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Accessories</a></li>
                                                        <li><a href="<?= base_url('category-women/product'); ?>">Jewellery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <a href="products.html"><img
                                                            src="<?= base_url().'public/images/woo.jpg' ?>"
                                                            alt=" " /></a>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <a href="products.html"><img
                                                            src="<?= base_url().'public/images/woo1.jpg' ?>"
                                                            alt=" " /></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b
                                                class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu1</h6>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Clothing</a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Wallets</a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Shoes</a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Watches</a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>"> Underwear </a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu2</h6>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Sunglasses</a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Wallets,Bags</a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Footwear</a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Watches</a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Accessories</a></li>
                                                        <li><a href="<?= base_url('category-men/product'); ?>">Jewellery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <a href="products1.html"><img
                                                            src="<?= base_url().'public/images/woo3.jpg' ?>"
                                                            alt=" " /></a>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <a href="products1.html"><img
                                                            src="<?= base_url().'public/images/woo4.jpg' ?>"
                                                            alt=" " /></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url('mail-us'); ?>">Mail Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="logo-nav-right">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                        <div id="cd-search" class="cd-search">
                            <form action="#" method="post">
                                <input name="Search" type="search" placeholder="Search...">
                            </form>
                        </div>
                    </div>
                    <div class="header-right2">
                        <div class="cart box_1">
                            <a href="<?= base_url('checkout-page'); ?>">
                                <h3>
                                    <div class="total">
                                        <span class="simpleCart_total"></span> (<span id="simpleCart_quantity"
                                            class="simpleCart_quantity"></span> items)
                                    </div>
                                    <img src="<?= base_url().'public/images/bag.png' ?>" alt="" />
                                </h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--header-->
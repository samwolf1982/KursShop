<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Домой</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head><!--/head-->
   <?php  $translate =include (PATH_TO_SITE.'/components/language.php');     ?>
    <body>
        <header id="header"><!--header-->


            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 plr header_img">
                            <div class="logo pull-left">
                                <a href="/"><img src="/upload/logo/logomotoone.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 shop-menu">


     <div class="shop-menu pull-right">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/cart">
                                                <i class="fa fa-shopping-cart"></i> <?php echo $translate['cart']; ?>
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                            </a>
                                        </li>
                                        <?php if (User::isGuest()): ?>
                                             <li><a href="/user/register/"><i class="fa fa-unlock"></i> <?php echo $translate['registration']; ?></a></li>
                                        <?php endif;?>

                                        <?php if (User::isGuest()): ?>
                                            <li><a href="/user/login/"><i class="fa fa-unlock"></i> <?php echo $translate['user_login']; ?></a></li>
                                        <?php else: ?>
                                            <li><a href="/cabinet/"><i class="fa fa-user"></i>  <?php echo $translate['cab']; ?></a></li>
                                            <li><a href="/user/logout/"><i class="fa fa-unlock"></i>  <?php echo $translate['exit']; ?></a></li>
                                        <?php endif;?>
                                    </ul>
                                </div>



                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                             <div class="mainmenu pull-left">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li><a href="/"> <?php echo $translate['home']; ?></a></li>
                                        <li class="dropdown"><a href="#"> <?php echo $translate['shop']; ?><i class="fa fa-angle-down"></i></a>
                                            <ul role="menu" class="sub-menu">
                                                <li><a href="/catalog/"><?php echo $translate['last_update']; ?></a></li>
                                                  <li><a href="/catalogs/"><?php echo $translate['categoryes']; ?></a></li>
                                                <li><a href="/cart/">Корзина</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/about/"><?php echo $translate['about_shop']; ?></a></li>
                                        <li><a href="/contacts/"><?php echo $translate['contacts']; ?></a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->

        </header><!--/header-->
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Station Shop - Products Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="/template/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="/template/css/ddsmoothmenu.css" />

<script type="text/javascript" src="/template/js/jquery.min.js"></script>
<script type="text/javascript" src="/template/js/ddsmoothmenu.js">


</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="/template/css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="/template/text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="/template/text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="/template/text/javascript"></script>

</head>
<?php

                     //   from language.php
  //  $translate        



  $translate =include (SITE_ROOT.'/components/language.php');
   include_once (SITE_ROOT.'/models/User.php');


?>


<body>

<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	
    	<div id="site_title">
        	<h1><a href="#">MotoOne</a></h1>
        </div>
        <!-- Правая часть  -->
        <div id="header_right">
	        <a href="#">My Account</a> 
          | <a href="#">My Wishlist</a> 
          | <a href="#"><?php echo $translate['cart'];  ?></a> 

            <?php if (User::is_Guest()): ?>
                   | <a href="/user/login"><?php echo $translate['user_login'];  ?></a>
          <?php endif ?>
          

     
         <?php if (!User::is_Guest()): ?>
                | <a href="/cab"><?php echo $translate['cab'];  ?> 
          <?php endif ?>

        

 <?php if (User::is_Guest()): ?>
                       | <a href="/user/register"><?php echo $translate['registration'];  ?></a>
          <?php endif ?>

          
          <?php if (!User::is_Guest()): ?>
                   |  <a href="/user/logout"><?php echo $translate['exit'];  ?></a>
          <?php endif ?>
            
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="/"><?php echo $translate['home'];  ?></a></li>
                <li><a href="/catalog" class="selected"><?php echo $translate['catalog'];  ?></a>
                    <ul>
                        <li><a href="/product/1">Товар 1</a></li>
                        <li><a href="/product/5">Товар 2</a></li>
                        <li><a href="/product/9">Товар 3</a></li>
                  </ul>
                </li>
                <li><a href="/about">Про нас</a>
               <!--      <ul>
                        <li><a href="#submenu1">Sub menu 1</a></li>
                        <li><a href="#submenu2">Sub menu 2</a></li>
                        <li><a href="#submenu3">Sub menu 3</a></li>
                        <li><a href="#submenu4">Sub menu 4</a></li>
                        <li><a href="#submenu5">Sub menu 5</a></li>
                  </ul> -->
                </li>
                <li><a href="/news">Новости</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="/contacts"><?php echo $translate['contacts'];  ?></a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
        	<div id="top_shopping_cart">
            	Shopping Cart: <strong>3 Products</strong> ( <a href="#">Show Cart</a> )
            </div>
        	<div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" Search " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
            <div class="cleaner"></div>
    	</div>
    </div> <!-- END of templatemo_menu -->


    

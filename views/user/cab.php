<?php
//   from models
//  $categotyList      array
//  $producList     array
//  $categoty_name      single
//   from language.php
//  $translate

include_once SITE_ROOT . '/views/common/header.php';
$translate = include SITE_ROOT . '/components/language.php';

?>


 <

    <div id="templatemo_main">

        <div id="content" class="float_r">

            <h1><?php echo $translate['cab']; ?></h1>



            <div class="content_half float_l">

            <p><?php echo $translate['name'] . ':  ' . User::getUserById($_SESSION['user'])['name']; ?> </p>
			  <p><a href="/user/edit"><?php echo $translate['edit_data']; ?></a></p>



            </div>
                 <div class="content_half float_r">
       <p><a href="#"><?php echo $translate['shop_list']; ?></a></p>


        </div>

        <div class="cleaner h40"></div>



        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->


<?php
include_once SITE_ROOT . '/views/common/footer.php';

?>
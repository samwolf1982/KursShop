<?php
//   from models
//  $categotyList      array
//  $producList     array
//  $categoty_name      single
//   from language.php
//  $translate

include_once SITE_ROOT . '/views/common/header.php';
$translate = include SITE_ROOT . '/components/language.php';
include_once SITE_ROOT . '/models/User.php';

?>

   <div id="templatemo_main">

        <div id="content" class="float_r">

            <h1><?php echo $translate['edit_data']; ?></h1>
            <div class="content_half float_l">

                <div id="contact_form">
                   <form method="post" name="contact" action="/user/edit">


                        <div class="cleaner h10"></div>
                        <label for="name"><?php echo $translate['input_new_name'] . ':'; ?></label> <input value=<?php echo $name; ?> type="text" id="name" name="name" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>

            <label for="subject"><?php echo $translate['input_new_pass'] . ':'; ?></label> <input value="<?php echo $pass; ?>" type="text" name="pass" id="pass" class="input_field" />

            <div class="cleaner h10"></div>


                        <input type="submit" value="<?php echo $translate['apply']; ?>" id="submit" name="submit" class="submit_btn float_l" />


              </form>
                </div>


            </div>
                 <div class="content_half float_r">

       <?php if (isset($errors) && is_array($errors)): ?>
                 <ul>
                  <?php foreach ($errors as $key => $value): ?>
                        <li><?php echo $value; ?></li>
                  <?php endforeach;?>


                 </ul>

       <?php endif;?>

       <?php if ($result): ?>
                <p><?php echo $translate['update_data_user']; ?></p>
       <?php endif;?>


        </div>

        <div class="cleaner h40"></div>



        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->


<?php
include_once SITE_ROOT . '/views/common/footer.php';

?>
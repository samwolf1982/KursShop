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

   <div id="templatemo_main">

        <div id="content" class="float_r">

            <h1><?php echo $translate['registration']; ?></h1>
            <div class="content_half float_l">

                <div id="contact_form">
                   <form method="post" name="contact" action="#">

                        <label for="author"><?php echo $translate['name'] . ':'; ?></label> <input value="Ivan" type="text" id="name" name="name" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email"><?php echo $translate['email'] . ':'; ?></label> <input value="koko@ko.ko" type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>

						<label for="subject"><?php echo $translate['pass'] . ':'; ?></label> <input value="1111" type="text" name="pass" id="pass" class="input_field" />

						<div class="cleaner h10"></div>


                        <input type="submit" value="<?php echo $translate['submit']; ?>" id="submit" name="submit" class="submit_btn float_l" />


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


        </div>

        <div class="cleaner h40"></div>



        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->


<?php
include_once SITE_ROOT . '/views/common/footer.php';

?>
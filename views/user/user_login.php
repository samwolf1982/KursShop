<?php
                      //   from models
  //  $categotyList      array      
  //  $producList     array
//  $categoty_name      single  
                     //   from language.php
  //  $translate        

include_once SITE_ROOT.'/views/common/header.php';
  $translate =include (SITE_ROOT.'/components/language.php');


?>

   <div id="templatemo_main">
 
        <div id="content" class="float_r">
          
            <h1><?php echo $translate['enter_site']; ?></h1>
            <div class="content_half float_l">
      
                <div id="contact_form">
                   <form method="post" name="contact" action="#">
                        
                        
                        <div class="cleaner h10"></div>
                        <label for="email"><?php echo $translate['email'].':'; ?></label> <input value="koko@ko.ko" type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
            <label for="subject"><?php echo $translate['pass'].':'; ?></label> <input value="111111" type="text" name="pass" id="pass" class="input_field" />

            <div class="cleaner h10"></div>
        
                        
                        <input type="submit" value="<?php echo $translate['submit'] ?>" id="submit" name="submit" class="submit_btn float_l" />
            <input type="reset" value="<?php echo $translate['reset'] ?>" id="reset" name="reset" class="submit_btn float_r" />
                        
              </form>
                </div>


            </div>
                 <div class="content_half float_r">
       
       <?php if (isset($errors) && is_array($errors)): ?>
                 <ul>
                  <?php foreach ($errors as $key => $value): ?>
                        <li><?php echo $value; ?></li>
                  <?php endforeach ?>


                 </ul>

       <?php endif ?>


        </div>
        
        <div class="cleaner h40"></div>
        
        <iframe width="680" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe>
            
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    

<?php
include_once SITE_ROOT.'/views/common/footer.php';

?>
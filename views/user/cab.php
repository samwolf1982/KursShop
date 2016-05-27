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


 <
    
    <div id="templatemo_main">
      
        <div id="content" class="float_r">
        	
            <h1><?php echo $translate['cab']; ?></h1>


            
            <div class="content_half float_l">

            <p><?php echo $translate['name'].':  '.User::get_User_By_Id()['name']; ?> </p>
			  <p><a href="/user/edit"><?php echo $translate['edit_data']; ?></a></p>
 


            </div>
                 <div class="content_half float_r">
       <p><a href="#"><?php echo $translate['shop_list']; ?></a></p>


        </div>
        
        <div class="cleaner h40"></div>
        
        <iframe width="680" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe>
            
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    

<?php
include_once SITE_ROOT.'/views/common/footer.php';

?>
<?php
                      //   from models
  //  $categotyList      array      
  //  $producList     array
//  $categoty_name      single  
                     //   from language.php
  //  $translate        

include_once SITE_ROOT.'/views/common/header.php';
  $translate =include (SITE_ROOT.'/components/language.php');
  include_once SITE_ROOT.'/models/User.php';


?>

   <div id="templatemo_main">
 
        <div id="content" class="float_r">
          
            <h1><?php echo $translate['edit_products']; ?></h1>
            <div class="content_half float_l">
      
                <div id="edit_products_admin_panel">
                  
                       
     <table>
           <?php foreach ($products as $key => $value): ?>
        <tr>
            <td> <label ><?php echo $value->get_name() ?></label> </td>
            <td> <label>  <? echo   $value->get_cat_id()?></label></td>
            <td> <label >  <? echo   $value->get_price()?></label> </td>
            <td>     <a href= <?php echo "/admin/product/edit/".$value->get_id(); ?> > <button><?php echo $translate['edit']; ?></button>
        </a>
</td>
            <td>  <a href=<?php echo "/admin/product/delete/".$value->get_id(); ?>>         <button><?php echo $translate['delete']; ?></button></a></td>
        </tr>
     <?php endforeach ?> 

    </table>



                      <!--    <?php foreach ($products as $key => $value): ?>
                          <div class="cleaner h10"></div>
                          <label ><?php echo $value->get_name() ?></label> 
                          <label>  <? echo   $value->get_cat_id()?></label>
                          <label >  <? echo   $value->get_price()?></label>         
                        <div class="cleaner h10"></div>
                         <?php endforeach ?> -->
        
    
                        
            
                </div>


            </div>
                 <div class="content_half float_r">

 <!--       <?php foreach ($products as $key => $value): ?>
           <a href= <?php echo "/admin/product/edit/".$value->get_id(); ?> > <button><?php echo $translate['edit']; ?></button>
        </a>
        <a href=<?php echo "/admin/product/delete/".$value->get_id(); ?>>         <button><?php echo $translate['delete']; ?></button></a>
       <div class="cleaner h10"></div>
       
       <?php endforeach ?> -->
     
      





       <?php if (isset($errors) && is_array($errors)): ?>
                 <ul>
                  <?php foreach ($errors as $key => $value): ?>
                        <li><?php echo $value; ?></li>
                  <?php endforeach ?>


                 </ul>

       <?php endif ?>

       <?php if ($result): ?>
                <p><?php echo $translate['update_data_user']; ?></p>
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
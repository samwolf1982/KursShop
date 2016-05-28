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
    
    <h1><?php echo $translate['edit_product']; ?></h1>
    <div class="content_half float_l">
      
      <div id="edit_products_admin_panel">
        

        <div id="contact_form">
         <form method="post" name="contact" action="/contacts">
          

<!--                         $this->id=$id;
    $this->title=$title;
    $this->date=$date;
    $this->short_content=$short_content;
    $this->full_content=$full_content;
    $this->author=$author;
    $this->image=$image;

   


  -->
  
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['name'].':'; ?></label> <input value=<?php echo $product->get_name(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['brand'].':'; ?></label> <input value=<?php echo $product->get_brand(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['price'].':'; ?></label> <input value=<?php echo $product->get_price(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['quantity'].':'; ?></label> <input value=<?php echo $product->get_quantity(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['manufactured'].':'; ?></label> <input value=<?php echo $product->get_manufactured(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['model'].':'; ?></label> <input value=<?php echo $product->get_model(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['status'].':'; ?></label> <input value=<?php echo $product->get_status(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['is_recomendet'].':'; ?></label> <input value=<?php echo $product->get_is_recomendet(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['new_prod'].':'; ?></label> <input value=<?php echo $product->get_is_new(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  <label for="name"><?php echo $translate['avalibily'].':'; ?></label> <input value=<?php echo $product->get_avalibily(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>

  <label for="name"><?php echo $translate['product_description'].':'; ?></label> <input value=<?php echo $product->get_full_content(); ?> type="text" id="name" name="name" class="validate-name required input_field" />
  <div class="cleaner h10"></div>
  
  
  
  <input type="submit" value="<?php echo $translate['send'] ?>" id="submit" name="submit" class="submit_btn float_l" />
  <input type="reset" value="<?php echo $translate['reset'] ?>" id="reset" name="reset" class="submit_btn float_r" />
  
</form>
</div>


<!--      <table>

           
        <tr>
            <td> <label ><?php echo $translate['name'];?></label> </td>
            <td> <label ><?php echo $product->get_name(); ?></label> </td>
            <td> <label>  <? echo   $product->get_cat_id()?></label></td>
            <td> <label >  <? echo   $product->get_price()?></label> </td>
            <td>     <a href= <?php echo "/admin/product/edit/".$product->get_id(); ?> > <button><?php echo $translate['edit']; ?></button>
        </a>
</td>
            <td>  <a href=<?php echo "/admin/product/delete/".$product->get_id(); ?>>     <button><?php echo $translate['delete']; ?></button></a>
     


            </td>
        </tr>
   

      </table> -->



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
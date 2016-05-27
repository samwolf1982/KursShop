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
        <div id="sidebar" class="float_l">
            <div class="sidebar_box"><span class="bottom"></span>

                <h3> <?php echo $translate['categoryes']; ?>  </h3>   
            
                <div class="content"> 
                    <ul class="sidebar_list">
                    <!-- цикл для вывода названия категорий -->
<?php foreach ($categotyList as $key => $value): ?>
    <li class="first"   <?php echo  $value->get_id()==$id? 'style="  background-color: #00BFF8;"':'' ?>   ><a  href=<?php echo '/category/'.$value->get_id(); ?>> <?php echo $value->get_name(); ?> </a></li>
<?php endforeach ?>
                    
        
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
                <h3>Best Sellers </h3>   
                <div class="content"> 
                    <div class="bs_box">
                        <a href="#"><img width="200" height="150" src="/template/images/templatemo_image_01.jpg" alt="Image 01" /></a>
                        <h4><a href="#">Donec nunc nisl</a></h4>
                        <p class="price">$10</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                        <a href="#"><img src="/template/images/templatemo_image_01.jpg" alt="Image 02" /></a>
                        <h4><a href="#">Aenean eu tellus</a></h4>
                        <p class="price">$12</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                        <a href="#"><img src="/template/images/templatemo_image_01.jpg" alt="Image 03" /></a>
                        <h4><a href="#">Phasellus ut dui</a></h4>
                        <p class="price">$20</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                        <a href="#"><img src="/template/images/templatemo_image_01.jpg" alt="Image 04" /></a>
                        <h4><a href="#">Vestibulum ante</a></h4>
                        <p class="price">$16</p>
                        <div class="cleaner"></div>
                    </div>
                </div>
            </div>
        </div>
 

   <div id="content" class="float_r">
            
            <h1> <?php  echo $product->get_name();?></h1>
            <div class="content_half float_l">
          <img width="350" height="280" src="/template/images/product/01.jpg" alt="Image 01" />
            </div>
            <div class="content_half float_r">
                <table>
                    <tr>
                        <td height="30" width="160"> <?php echo  $translate['price'].':'?> </td>
                        <td><?php echo $product->get_price(); echo $translate['curency']; ?></td>
                    </tr>
                    <tr>
                        <td height="30"><?php echo  $translate['availability'].':'?>  </td>
                        <td><?php echo $product->get_avalibily()==1?$translate['in_stock']:$translate['out_stock']; ?></td>
                    </tr>
                    <tr>
                        <td height="30"><?php echo  $translate['model'].':'?></td>
                        <td><?php echo $product->get_model(); ?></td>
                    </tr>
                    <tr>
                        <td height="30"><?php echo  $translate['manufactured'].':'?></td>
                        <td><?php echo $product->get_manufactured(); ?></td>
                    </tr>
                    <tr><td height="30"><?php echo  $translate['quantity'].':'?></td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="/cart" class="add_to_card"><?php echo  $translate['add_to_cart'];?> </a>
            </div>
            <div class="cleaner h30"></div>
            
            <h5><?php echo  $translate['product_description'];?>  </h5>
            <p><?php echo $product->get_full_content(); ?></p>   
            
            <div class="cleaner h50"></div>
            
            <h4><?php echo $translate['recomended']; ?></h4>
            <div class="product_box">
                <a href="productdetail.html"><img src="images/product/01.jpg" alt="Image 01" /></a>
                <h3>Ut eu feugiat</h3>
                <p class="product_price">$ 100</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>          
            <div class="product_box">
                <a href="productdetail.html"><img src="images/product/02.jpg" alt="Image 02" /></a>
                <h3>Curabitur et turpis</h3>
                <p class="product_price">$ 200</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>          
            <div class="product_box no_margin_right">
                <a href="productdetail.html"><img src="images/product/03.jpg" alt="Image 03" /></a>
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>     
            
        </div> 




        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
 

    


<?php
include_once SITE_ROOT.'/views/common/footer.php';

?>
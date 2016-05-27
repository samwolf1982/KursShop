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


 <div id="templatemo_middle" class="carousel">
    	<div class="panel">
				
				<div class="details_wrapper">
					
					<div class="details">
					
						<div class="detail">
							<h2><a href="#">Station Shop</a></h2>
                            <p>Station Shop is free website template by templatemo for ecommerce websites or online stores. Sed aliquam arcu. Donec urna massa, cursus et mattis at, mattis quis lectus. </p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Fusce hendrerit</a></h2>
                            <p>Duis dignissim tincidunt turpis eget pellentesque. Nulla consectetur accumsan facilisis. Suspendisse et est lectus, at consectetur sem.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Aenean massa cum</a></h2>
                            <p>Sed vel interdum sapien. Aliquam consequat, diam sit amet iaculis ultrices, diam erat faucibus dolor, quis auctor metus libero vel mi.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
					</div><!-- /details -->
					
				</div><!-- /details_wrapper -->
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->
				
				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
				
			</div><!-- /panel -->
	
			<div class="backgrounds">
				
				<div class="item item_1">
					<img src="/template/images/slider/02.jpg" alt="Slider 01" />
				</div><!-- /item -->
				
				<div class="/template/item item_2">
					<img src="/template/images/slider/03.jpg" alt="Slider 02" />
				</div><!-- /item -->
				
				<div class="/template/item item_3">
					<img  src="/template/images/slider/01.jpg" alt="Slider 03" />
				</div><!-- /item -->
				
			</div><!-- /backgrounds -->
    </div> <!-- END of templatemo_middle -->
    
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
                <!-- цикл для списка новых товаров -->
        	<h1> <?php echo $translate['category'];  echo " ".$categotyList[0]->get_name(); ?> </h1>
<?php
       $counter=0;
 foreach ($producList as $key => $value): ?>
	      
       <div class="product_box  <?php echo ++$counter%3==0? 'no_margin_right':'' ?>   ">
            	<a href="<?php echo '/product/'.$value->get_id(); ?>"><img  width="200" height="150" src= <?php echo "/template/images/product/".$value->get_image(); ?> alt="Image 01" /></a>
                <h3><?php echo $value->get_name(); ?></h3>
                <p class="product_price"><?php echo $value->get_price(); echo $translate['curency']; ?></p>
                <a href="shoppingcart.html" class="add_to_card"><?php echo $translate['add_to_card']; ?></a>
                <a href="<?php echo '/product/'.$value->get_id(); ?>" class="detail"><?php echo $translate['detail']; ?></a>
            </div>  
 




<?php endforeach ?>

    
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
 

    



<?php echo 'main page'; ?>


<?php
include_once SITE_ROOT.'/views/common/footer.php';

?>
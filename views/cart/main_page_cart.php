<?php

include_once SITE_ROOT.'/views/common/header.php';
  $translate =include (SITE_ROOT.'/components/language.php');
  
?>
    

<style>
  .product_price{
    color: #8fb410;
    font-size: 14px;
    font-weight: 700;
  }
.cart h3{
   font-size: 20px;
   font-weight: 700;
   display: inline-block;
   margin-top: 0;
}
.cart hr{
  width: 100%;
  border-style: dotted;
}
.cart a{
  color: #666;
}
.cart img{
  display: block;
}
.cart_close{
  border:1px solid #666;
  line-height:20px;
  text-align:center;
  display:inline-block;
  width:20px;
  height:20px;
  color: #666;
}
.cart_close:hover{
  border-color: #08aee3;
  color: #08aee3;
}
.cart_submit{
  margin:5px;
  border-radius: 2px;
  color: #fff;
  background: url(template/images/templatemo_menu_hover.jpg) repeat-x;
  display: block;
  width: 200px;
  height: 40px;
  text-align: center;
  margin-left: 0;
  border:none;
}
.product_price{
  display: inline-block;
  margin: 5px;
}
</style>
        <div id="content" class="faq float_l">
			<h2><?php echo $translate['cart']; ?></h2>
                            <!-- $cardList из контролера   -->
                            <!-- сокращенная запись -->
            <?php foreach ($cardList as $value):?>
            <section class="cart">
                <h3>Товар: <?php echo $value->get_name(); ?></h3>
               
                <a href="#" class="cart_close float_r">X</a>
                <img width="150" height="100" src="/template/images/product/<?php echo $value->get_image();?>" alt="Image 01">                <form action="/cart">
                 <p class="product_price">Цена: <?php echo $value->get_price();?>руб.</p>
                
              <hr noshade>
            </section>
          
            
            
             
              <?php endforeach; ?>
            <form action="#">
                  
                  <input type="submit" class="cart_submit" value="<?php echo $translate['cart_submit_all']; ?>">
                </form>
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->








<?php
include_once SITE_ROOT.'/views/common/footer.php';

?>
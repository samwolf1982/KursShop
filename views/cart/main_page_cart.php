<?php

include_once SITE_ROOT.'/views/common/header.php';
  $translate =include (SITE_ROOT.'/components/language.php');
  print_r($cardList);
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
}
</style>
        <div id="content" class="faq float_r">
			<h2><?php echo $translate['cart']; ?></h2>
                            <!-- $cardList из контролера   -->
                            <!-- сокращенная запись -->
            <?php foreach ($cardList as $value):?>
            <section class="cart">
                <h3>Товар: <?php echo $value->get_name(); ?></h3><p class="product_price">Цена: <?php echo $value->get_price();?>руб.</p>
                <img width="200" height="150" src="/template/images/product/<?php echo $value->get_image();?>" alt="Image 01">
                <form action="/cart">
                <input type="hidden">
                  <input type="submit">
                </form>
              
            </section>
          
            
            
             
              <?php endforeach; ?>
            
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->








<?php
include_once SITE_ROOT.'/views/common/footer.php';

?>
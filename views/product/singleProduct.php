<?php

include_once SITE_ROOT.'/views/common/header.php';
?>
      <div id="content" class="float_r">
        	
            <h1><?php echo $product->get_title()?></h1>,



            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" href="images/product/10_l.jpg"><img width="300" height="200" src= <?php echo "/template/images/product/".$product->get_image()?> alt="Image 01" /></a>
            </div>
            <div class="content_half float_r">
				<table>
                    <tr>
                        <td height="30" width="160">Цена:</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td height="30">Доступность:</td>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <td height="30">Модель:</td>
                        <td>Product 14</td>
                    </tr>
                    <tr>
                        <td height="30">Производитель:</td>
                        <td>Apple</td>
                    </tr>
                    <tr><td height="30">Количество</td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="shoppingcart.html" class="add_to_card">Добавить в корзину</a>
			</div>
            <div class="cleaner h30"></div>
            
            <h5>Описание товара</h5>
            <p>
            	<?php echo $product->get_full_content()?>
            </p>	
            
            <div class="cleaner h50"></div>
            
            <h4>Etiam In Tellus</h4>
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
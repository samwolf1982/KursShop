<?php include PATH_TO_SITE . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2><?php echo $translate['categoryes']; ?></h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>"
                                           class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
                                           >                                                                                    
                                               <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"><?php echo $translate['all_catergores']; ?> </h2>
                <?php $counter=0; ?>
                    <?php foreach ($categories as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
  <a href="/category/<?php echo $product['id']; ?>">  <img height="200"  src="<?php echo Product::getImage($firstImageOnCategory[$counter++]);?>" alt="" />
  </a>
                                        <h2> <a href="/category/<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a></h2>
                                      
                                    
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>                              

                </div><!--features_items-->
                
          
            </div>
        </div>
    </div>
</section>

<?php include PATH_TO_SITE . '/views/layouts/footer.php'; ?>
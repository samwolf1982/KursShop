<?php

include_once SITE_ROOT.'/views/common/header.php';
?>
    


        <div id="content" class="faq float_r">
			<h2>Новости</h2>
                            <!-- $newsList из контролера   -->
                            <!-- сокращенная запись -->
            <?php foreach ($newsList as $value):?>

            <h3><?php echo $value->get_title(); ?></h3>
            <p><?php echo $value->get_date(); ?></p>
            <p> <?php echo $value->get_short_content(); ?> <a href=<?php echo '/news/'.$value->get_id(); ?>>читать дальше...</a></p>
             
              <?php endforeach; ?>
            
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->








<?php
include_once SITE_ROOT.'/views/common/footer.php';

?>
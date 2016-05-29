<?php

include_once SITE_ROOT . '/views/common/header.php';
?>



        <div id="content" class="faq float_r">
			<h2>Новости</h2>
                            <!-- $newsList из контролера   -->
                            <!-- сокращенная запись -->

            <?php foreach ($newsList as $value): ?>
         <h3><?php echo $value['title']; ?></h3>            <p><?php echo $value['date']; ?></p>
               <p><?php echo $value['time_create']; ?></p>
            <p> <?php echo substr($value['content'], 0, 150); ?> <a href=<?php echo '/news/' . $value['id']; ?>>читать дальше...</a></p>

              <?php endforeach;?>

        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->





<?php
include_once SITE_ROOT . '/views/common/footer.php';

?>
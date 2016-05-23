<?php

include_once SITE_ROOT.'/views/common/header.php';
?>
    


        <div id="content" class="faq float_r">

                            <!-- $news из контролера   -->
                            <!-- сокращенная запись -->
           
    
            <h2><?php echo $news->get_title(); ?></h2>
            <p><?php echo $news->get_date(); ?></p>
            <p> <?php echo $news->get_full_content(); ?></p>
                         <p>Автор: <?php echo $news->get_author(); ?></p>
                         <p><a href="/news/"> Вернуться к списку новостей</a></p>
           
            
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->








<?php
include_once SITE_ROOT.'/views/common/footer.php';

?>
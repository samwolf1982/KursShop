<?php

include_once SITE_ROOT . '/views/common/header.php';
?>



        <div id="content" class="faq float_r">

                            <!-- $news из контролера   -->
                            <!-- сокращенная запись -->


            <h2><?php echo $news[0]['title']; ?></h2>
            <p><?php echo $news[0]['date']; ?></p>
            <p><?php echo $news[0]['time_create']; ?></p>
            <p> <?php echo $news[0]['content']; ?></p>
                         <p>Автор: <?php echo $news[0]['name']; ?></p>
                         <p><a href="/news/"> Вернуться к списку новостей</a></p>


        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->







<?php
include_once SITE_ROOT . '/views/common/footer.php';

?>
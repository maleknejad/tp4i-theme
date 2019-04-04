         <div class="container">
             <div class=" slider owl-carousel owl-rtl  owl-drag" data-items="1">
                 <?php
                    global $redux_tp4;
                    foreach ($redux_tp4['opt-slider'] as $slide) {?>
                        <a href="<?php echo $slide['url'] ?>"><img src="<?php echo $slide['image'] ?>" alt="banner">  
                        <h3 class="text-white"><?php echo $slide['title'] ?></h3>
                        </a>
                 <?php } ?>
             </div>

         </div>
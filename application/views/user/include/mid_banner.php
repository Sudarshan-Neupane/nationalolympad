<div class="container"> 
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <?php
            foreach ($banner_image as $bi) {
                ?>
                <img src="<?php echo base_url(); ?>images/<?php echo $bi->img; ?>" data-thumb="<?php echo base_url(); ?>images/<?php echo $bi->img; ?>" alt="" title="<?php echo $bi->title; ?>" width="960px" height="315px"/>
                <!--<img src="<?php echo base_url(); ?>images/<?php echo $bi->img; ?>" alt="" width="960px" height="300px"/>-->
            <?php } ?> 
        </div>
    </div>
</div>
<div class="container top-margin10"> 
    <script>
        jQuery(document).ready(function($) {

            $('#banner-slide').bjqs({
                animtype: 'slide',
                responsive: true,
                randomstart: true
            });

        });
    </script>
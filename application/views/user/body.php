<div class="container bottom-margin30">
    <div class="col-8 col-lg-8 col-md-6 col-sm-12 col-xs-12 bottom-margin10">
        <div class="featureWrap right-padding20">


            <div class="content_up_right">
                <?php foreach ($welcome as $wel) {
                    ?>
                    <h3><?php echo strtoupper($wel->pagetitle); ?></h3>
                    <p style="text-align: justify;"><?php echo $wel->description; ?></p>
                <?php } ?>

            </div>

            <!-- ---------------------------------------------------------
            PROGRAMS & PROJECT PAGE START
----------------------------------------------------------->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-margin30">
                <h3>In collaboration With</h3>
                <div style="width:25%; float:left; margin:15px;"><a href="https://www.facebook.com/pages/ESPRO-Foundation/166237550232808">
                        <img src="<?php echo base_url() ?>user_include/images/EFC.jpg" alt=""/>
                    </a>
                </div>
                <div style="width:25%; float:left; margin:15px;"><a href="https://www.facebook.com/NASONepal">
                        <img src="<?php echo base_url() ?>user_include/images/NASO.png" alt=""/></a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-margin30">
                <h3>Outreach Partner</h3>
                <div style="width:35%; float:left; margin:15px;"><a href="http://viewyourchoice.org/">
                        <img src="<?php echo base_url() ?>user_include/images/media1.png" alt=""/>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- ---------------------------------------------------------
            PROGRAMS & PROJECT PAGE CLOSE
----------------------------------------------------------->

        </div>
    </div>
    <div class="col-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 200px;">
            <h3>News and Events</h3>

            <ul id="vertical-ticker" style="overflow: hidden; padding: 5px; height: 400px;"> 
                <?php
                foreach ($news_event as $ne) {
                    ?>
                    <li>
                        <div class="info" >

                            <b><a href="<?php echo site_url('welcome/newsevent') . '/' . $ne->id ?>" style="color: red;"><?php echo $ne->name; ?></a></b>
                            <span class="cat"><?php echo substr($ne->description, 0, 60); ?>...</span>
                        </div>

                    </li>
                <?php } ?>
            </ul>

        </div>
        <br>
        <br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Facebook Likes</h3>

            <div class="fb-like-box" data-href="http://www.facebook.com/NationalOlympiad" data-width="325" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
        </div>
        <img src="http://s11.flagcounter.com/count/jmWq/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_12/viewers_0/labels_1/pageviews_1/flags_0/" alt="Flag Counter" border="0">

        <div class="clearfix"></div>

    </div>
    <div class="clearfix"></div>
</div>
</div>

<div class="container"> 
  <!------------------------------------------
    Open of Slider
   ------------------------------------------------>
  <div class="col-lg-8">
  <div id="banner-slide">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <?php
     foreach($banner_image as $bi){
    ?>
          <li><img src="<?php echo base_url();?>images/<?php echo $bi->img;?>" title="<?php echo $bi->title;?>"/></li>
           <?php }?> 
         
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
     
  </div>
  <!------------------------------------------
    Close of Slider
   ------------------------------------------------> 
  <!-- Button trigger modal -->
  
  <div class="col-lg-4">
    <div class="right-contain-border">
     <div class="heading">
        <h2>News And Events</h2>
      </div>
      <div class="news_show" style="padding: 5px;">
      <ul>
    <?php foreach($news_event as $news)
            {
             ?>
             <li>
				<div class="info" >
                                   <b><a href="<?php echo site_url('welcome/newsevent').'/'.$news->id?>"><?php echo $news->name;?></a></b> 
                                    <span class="cat"><?php echo substr($news->description,0,80);?></span>
				</div>
			
	    </li>
            <?php } ?>
      </ul>
      
   
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="container top-margin10"> 

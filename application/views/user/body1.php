
  <!------------------------------------------
    Open of left contain
   ------------------------------------------------>
  
  <div class="col-lg-8 ">
    <div class="row">
      <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
        <!-- Indicators -->
        
        <div class="carousel-inner">
          <div class="item active">

            <ul class="list-inline">
              <li>
                <div class="col-lg-4 top-margin10"> <img src="<?php echo base_url();?>include_file/images/thumbs.jpg" alt="">
                  <p class="caption-page"><a href="#" class="white-color" style="outline: none;">Rincon, Puerto Rico</a></p>
                </div>
                <div class="col-lg-4 top-margin10"> <img src="<?php echo base_url();?>include_file/images/thumbs.jpg" alt="">
                  <p class="caption-page"><a href="#" class="white-color" style="outline: none;">Rincon, Puerto Rico</a></p>
                </div>
                <div class="col-lg-4 top-margin10"> <img src="<?php echo base_url();?>include_file/images/thumbs.jpg" alt="">
                  <p class="caption-page"><a href="#" class="white-color" style="outline: none;">Rincon, Puerto Rico</a></p>
                </div>
                <div class="clearfix"></div>
              </li>
              
              </ul>
          </div>
          <div class="item">
            <ul class="list-inline">
              <li>
                <div class="col-lg-4 top-margin10"> <img src="<?php echo base_url();?>include_file/images/thumbs.jpg" alt="">
                  <p class="caption-page"><a href="#" class="white-color" style="outline: none;">Rincon, Puerto Rico</a></p>
                </div>
                <div class="col-lg-4 top-margin10"> <img src="<?php echo base_url();?>include_file/images/thumbs.jpg" alt="">
                  <p class="caption-page"><a href="#" class="white-color" style="outline: none;">Rincon, Puerto Rico</a></p>
                </div>
                <div class="col-lg-4 top-margin10"> <img src="<?php echo base_url();?>include_file/images/thumbs.jpg" alt="">
                  <p class="caption-page"><a href="#" class="white-color" style="outline: none;">Rincon, Puerto Rico</a></p>
                </div>
                <div class="clearfix"></div>
              </li>
              
            </ul>
          </div>
          <div class="item">
            <ul class="list-inline">
              <li>
                <div class="col-lg-4 top-margin10"> <img src="<?php echo base_url();?>include_file/images/thumbs.jpg" alt="">
                  <p class="caption-page"><a href="#" class="white-color" style="outline: none;">Rincon, Puerto Rico</a></p>
                </div>
                <div class="col-lg-4 top-margin10"> <img src="<?php echo base_url();?>include_file/images/thumbs.jpg" alt="">
                  <p class="caption-page"><a href="#" class="white-color" style="outline: none;">Rincon, Puerto Rico</a></p>
                </div>
                <div class="col-lg-4 top-margin10"> <img src="<?php echo base_url();?>include_file/images/thumbs.jpg" alt="">
                  <p class="caption-page"><a href="#" class="white-color" style="outline: none;">Rincon, Puerto Rico</a></p>
                </div>
                <div class="clearfix"></div>
              </li>
              <li></li>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="top-margin20">
     <div class="content_up_right">
    <?php foreach($welcome as $wel){
     ?>   
        <h3><?php echo strtoupper($wel->pagetitle);?></h3>
      <p style="text-align: justify;"><?php echo substr($wel->description,0,1500);?></p>
    <?php } ?>
        <div class="learn_div" id="learn_div"><strong style="color: #3399FF;"> READ MORE</strong></div>
    </div><!-- content_up_right ends-->
    
    <!--read more -->
        <div class="content_up_right_more">
       <?php foreach($welcome as $wel){
        ?>   
           <h3><?php echo strtoupper($wel->pagetitle);?></h3>
          <?php echo $wel->description;?>
       <?php } ?>
          <div class="learn_div" id="learn_div_less"><strong style="color: #3399FF;"> LESS -- <strong></div>
          <br />
       </div>
    
    </div>
  </div>
  <!------------------------------------------
    Close of Contain
   ------------------------------------------------>
  <div class="col-lg-4 top-margin10">
    <div class="right-contain-border bottom-margin10">
      <div class="heading">
        <h2>Our Products</h2>
      </div>
       <div class="news_show" style="padding: 5px;">
      <ul>
    <?php foreach($client as $client)
            {
             ?>
             <li>
				<div class="info" >
                
                                   <b><a href="<?php echo site_url('welcome/products').'/'.$client->id?>"><?php echo $client->name;?></a></b> 
                                    <span class="cat"><?php echo substr($client->description,0,60);?></span>
				</div>
                
			
	    </li>
            <?php } ?>
      </ul>  
      </div>
      
    </div>
    <div class="right-contain-border top-margin10 bottom-margin10">
      <div class="fb-like-box" data-href="https://www.facebook.com/greenhoodnepal" data-width="280" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
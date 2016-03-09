
<div id="footer">
  <div class="container top-padding10">
    <div class="col-lg-4 right-border">
      <h3 class="white-color left-padding10">QUICK MENU</h3>
      <ul class="blog-list">
          <?php foreach($menu as $menu){
        ?>
        <li>
       <a href="<?php echo base_url('welcome/main_pages')."/".$menu->cat_id;?>" ><?php echo $menu->categories;?></a>
        </li>
        <?php }?>
        
      </ul>
    </div>
    <div class="col-lg-4 right-border">
    <?php foreach($midfooter as $msg){
        ?>
      <h3 class="white-color bottom-padding10 "><?php echo $msg->title;?></h3>
      <span  class=" white-color top-padding10"> 
      <?php echo substr($msg->description,0,240);
      }?>
      </span>       </div>
    <div class="col-lg-4 ">
    <?php foreach ($rightFooter as $rf){?>
      <h3 class="white-color bottom-padding10"><?php echo $rf->title;?></h3>
      <span class="white-color"> <?php echo $rf->description;}?> </span> </div>
    <div class="clearfix"></div>
    <p class="text-center white-color"> &copy;Copyright Deltanepal.com </p>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>include_file/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>include_file/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>include_file/js/bjqs-1.3.min.js"></script>
<script src="<?php echo base_url();?>include_file/js/jquery-latest.pack.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>include_file/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
  <script>
        jQuery(document).ready(function($) {
          
          $('#banner-slide').bjqs({
            animtype      : 'slide',
            height        : 320,
            width         : 620,
            responsive    : true,
            randomstart   : true
          });
          
        });
      </script>
      <script type="text/javascript">
$(function() {
	$(".news_show").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1300
	});
});
</script> 
<script>
$(document).ready(function(){
   $(".box11").hide();
   $(".content_up_right_more").hide();
   $(".c1").hide();
      $("#hide").click(function(){
       $(".box1").hide();
       $(".box11").show();
  });
  $("#show").click(function(){
    $(".box11").hide();
    $(".box1").show();
  });
  $('#learn_div').click(function(){
      $(".content_up_right").hide();
      $(".content_up_right_more").show();
  });
  $('#learn_div_less').click(function(){
       $(".content_up_right").show();
      $(".content_up_right_more").hide();
  });
   $('#firsttest').click(function(){
       $(".c1").show();
       $(".b1").hide();
  });
    $('#secondtest').click(function(){
       $(".c1").show();
       $(".b1").hide();
  });
  $('#firstless').click(function(){
       $(".c1").hide();
       $(".b1").show();
  });
    $('#secondless').click(function(){
       $(".c1").hide();
       $(".b1").show();
  });
  
});
</script>

     
</body>
</html>

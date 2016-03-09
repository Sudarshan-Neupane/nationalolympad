
<link href="<?php echo base_url()?>user_include/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>user_include/css/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css" />
<!-- banner ends-->
<div class="container top-margin10">
<div class="content">

<div class="content_contactus">
<h3 style="color: #3399FF;">Gallery</h3>
<div class="gal">
            <?php foreach($gallery as $gal){
            ?>
            <div style="width: 200px; height: 200px; float: left;margin: 8px;">
            <a class="fancybox" rel="group" href="<?php echo base_url()?>images/<?php echo $gal->image;?>" ><img src="<?php echo base_url()?>images/<?php echo $gal->image;?>" alt="<?php echo $gal->title;?>" width="200px" height="133px" title="<?php echo $gal->title;?>"/></a>
		    </div>
            <?php }
            ?>
        

</div>
</div><!-- content_aboutus ends-->


</div><!-- content ends-->
</div>
</div>
        
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        
        <script src="<?php echo base_url()?>user_include/js/fancybox/jquery.fancybox.js"></script>
		<script src="<?php echo base_url()?>user_include/js/fancybox/jquery.fancybox-buttons.js"></script>
		<script src="js/fancybox/jquery.fancybox-thumbs.js"></script>
        <script src="<?php echo base_url()?>user_include/js/fancybox/jquery.easing-1.3.pack.js"></script>
		<script src="<?php echo base_url()?>user_include/js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript">
			$(document).ready(function() {
			$(".fancybox").fancybox();
			});
		</script>
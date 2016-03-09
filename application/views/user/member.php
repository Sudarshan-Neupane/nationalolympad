<div class="content">
<div class="content_contactus">
<h3 style="color: #3399FF;">Our Team</h3>
<?php foreach($client as $client){?>
<div style="float: left;">
<div style="width: 180px; height: 150px; float: left; margin: 5px;">
  <img  src="<?php echo base_url()?>/images/<?php echo $client->image;?>" height="150px" width="180px"/>
</div>
<div style="width: 750px; float: right; margin: 5px;">
<?php echo $client->description;?>
</div>
</div>





<?php }?>

</div><!-- content_aboutus ends-->


</div>
</div>
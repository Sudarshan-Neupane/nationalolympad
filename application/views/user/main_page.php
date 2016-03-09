<style>
#image{
    border: none;
}
#image    img {  
            border-radius: 30px;
            -moz-border-radius: 30px;
            -khtml-border-radius: 30px;
            -webkit-border-radius: 30px;
            opacity: 1;
    
    
}

</style>
<div class="content">
<div class="content_contactus">
<?php foreach($main_page as $mp){?>
<br /><h3 style="color: #3399FF;"><?php echo $mp->categories;?></h3>
<div>
<div style="float: left; width: 620px;text-align: justify; margin: 5px;">
<?php echo $mp->Description;
 $id = $this->uri->segment(3);
 if($id == 41){
    ?>
    <div style="width: 200px !important;float:left">
    <a href="<?php echo base_url()?>user_include/images/handbook.pdf" target="_blank">
    <img src="<?php echo base_url()?>user_include/images/handbook.jpg" width="170px" height="190px"/></a>
    </div>
     <div style="width: 180px !important;float:right;">
    <a href="<?php echo base_url()?>user_include/images/press_english.jpg" target="_blank">
    <img src="<?php echo base_url()?>user_include/images/press_english.jpg" width="150px" height="190px"/></a>
    </div>
     <div style="width: 180px !important;float:right; margin-right: 27px;">
    <a href="<?php echo base_url()?>user_include/images/press_nepali.jpg" target="_blank">
    <img src="<?php echo base_url()?>user_include/images/press_nepali.jpg" width="150px" height="190px"/></a>
    </div>
    <?php
    
 }
 ?>
</div>
<div  id="image" style="float: right; width: 310px;">
<img  src="<?php echo base_url()?>images/<?php echo $mp->image;?>" height="280px" width="300px" alt="<?php echo $mp->image;?>" border="0px" />
</div>
</div>
<br />

<br />
<?php }?>

</div><!-- content_aboutus ends-->
</div>
</div>
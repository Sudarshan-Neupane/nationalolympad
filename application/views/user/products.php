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

<?php foreach($products as $p){?>
<br /><h3 style="color: #3399FF;"><?php echo $p->name;?></h3>
<div>
<div style="float: left; width: 620px;text-align: justify; margin: 5px;">
<?php echo $p->description;?>
</div>
<div  id="image" style="float: right; width: 310px;">
<img  src="<?php echo base_url()?>images/<?php echo $p->image;?>" height="280px" width="300px" alt="<?php echo $p->image;?>" border="0px" />
</div>
</div>
<br />

<br />
<?php }?>

</div><!-- content_aboutus ends-->
</div>
</div>
<h2>Gallery Images
</h2>
<h2>Manage Gallery Image </h2>


<table>
<tr><th colspan="3"></th><th><a href="<?php echo site_url('gallery/add_images');?>"><input type="button" value="Add Images"/></a></th></tr>
<tr><th width="15%"><strong>Sno</strong></th><th width="30%"><strong>Name</strong></th><th width="45%">Image</th><th width="20%"><strong>Action</strong></th></tr>
<?php  
      $i=1;
      foreach($images as $r) { ?>
        <tr><td ><?php echo $i++;?></td><td ><?php echo $r->title;?></td>
        <td><a href="<?php echo base_url();?>images/<?php echo $r->image;?>"><img src="<?php echo base_url();?>images/<?php echo $r->image;?>" alt="<?php echo $r->image;?>" height="90" width="150"/></a>
       
        </td>
        <td >
        <a href="<?php echo site_url('gallery/edit_img/'.$r->id)?>">EDIT</a> |
        <a href="<?php echo site_url('gallery/delete_image/'.$r->id)?>"> DELETE</a></td></tr>
<?php } ?>
</table>
<script>
$(document).ready(function()
{
   //for table row
  $("tr:even").css("background-color", "#5094FA");
  $("tr:odd").css("background-color", "#25B4AC");
});
</script>


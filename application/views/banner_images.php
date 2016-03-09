<h2>Image Banners
</h2>
<h2>Manage image banner </h2>


<table>
<tr><th colspan="3"></th><th><a href="<?php echo site_url('slidebanner/add_images');?>"><input type="button" value="Add Images"/></a></th></tr>
<tr><th width="15%"><strong>Sno</strong></th><th width="30%"><strong>Name/Links</strong></th><th width="45%">Image</th><th width="20%"><strong>Action</strong></th></tr>
<?php  
      $i=1;
      foreach($images as $r) : ?>
        <tr><td ><?php echo $i++;?></td><td ><?php echo $r->title;?></td>
        <td><img src="<?php echo base_url();?>images/<?php echo $r->img;?>" alt="<?php echo $r->img;?>" height="90" width="150"/></a>
       
        </td>
        <td >
        <a href="<?php echo site_url('slidebanner/edit_img/'.$r->id)?>">EDIT</a> |
        <a href="<?php echo site_url('slidebanner/delete_image/'.$r->id)?>"onclick="return confirm('Do You Want To Delete This Image?')"> DELETE</a></td></tr>
<?php endforeach;?>
</table>
<script>
$(document).ready(function()
{
   //for table row
  $("tr:even").css("background-color", "#5094FA");
  $("tr:odd").css("background-color", "#25B4AC");
});
</script>


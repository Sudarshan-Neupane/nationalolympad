<div id="content">
 <h2>Content management | Add New Menu</h2>
 <p>Manage content using the editor below. All content entered
  will be displayed according to the layout and style of the website.
   When pasting content from MS word, please ensure that you remove all styling 
   (you will be prompted to do so in the popup box).
 </p>
 <br />
<table>
<tr><th colspan="4"></th><th><a href="<?php echo site_url('categories/add_categories');?>"><input type="button"  style="font-size: 18px;"value="Add Menu"/></a></th></tr>
<tr><th width="4%"><strong>Sno</strong></th><th width="20%"><strong>Menu Name</strong></th><th width="15%">Image</th><th width="50%"> Description</th><th width="100%"><strong>Action</strong></th></tr>
<?php  
      $i=1;
      foreach($row as $r) : ?>
        <tr><td><?php echo $i++;?></td>
        <td width="20%"><?php echo $r->categories;?></td>
        <td><img  src="<?php echo base_url();?>images/<?php echo $r->image;?>" width="100px" width="100px" style="margin:0px 20px;"/></td>
        <td><?php echo $r->Description;?></td>
        <td><a href="<?php echo site_url('categories/edit_data/'.$r->cat_id)?>">EDIT</a> |
        <a href="<?php echo site_url('categories/deletedata/'.$r->cat_id)?>" onclick="return confirm('Do You Want To Delete This Event ??')"> DELETE</a></td></tr>
        
<?php endforeach;?>
</table>
 
 </div>
 <script>
$(document).ready(function()
 {
   //for table row
   $("tr").css("height","28px")
  $("tr:even").css("background-color", "#5094FA","border:none");
  $("tr:odd").css("background-color", "#25B4AC");
});
</script>
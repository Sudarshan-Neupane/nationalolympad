<div id="content">
 <h2>Content management | Add sub Menu</h2>
 <p>Manage content using the editor below. All content entered
  will be displayed according to the layout and style of the website.
   When pasting content from MS word, please ensure that you remove all styling 
   (you will be prompted to do so in the popup box).
 </p>
 <br />
<table>
<tr><th colspan="5"></th><th><a href="<?php echo site_url('additems/additem');?>"><input type="button" value="Add Sub Menu"/></a></th></tr>
<tr><th width="10%"><strong>Sno</strong></th><th width="20%"><strong>Name</strong></th><th>Image</th><th width="60%"><strong>description</strong></th><th>Menu</th><th width="20%"><strong>Action</strong></th></tr>
<?php  
      $i=1;
      foreach($row as $r) : ?>
        <tr><td width="10%"><?php echo $i++;?></td><td width="20%"><?php echo $r->name;?></td>
        <td><a href="<?php echo base_url()?>images/<?php echo $r->image;?>"><img src="<?php echo base_url()?>images/<?php echo $r->image;?>" height="120px" width="120px"/></a> </td>
        <td><?php echo  substr($r->description,0,250);?></td>
        <td width="60%">
        <?php echo $this->categories_model->display_category_name($r->cat_id);?>
        </td>
        <td width="20%">
        <a href="<?php echo site_url('additems/edititem/'.$r->id)?>">EDIT</a> |
        <a href="<?php echo site_url('additems/deletedata/'.$r->id)?>" onclick="return confirm('Do You Want To Delete This Event ??')"> DELETE</a></td></tr>
        
<?php endforeach;?>
</table>
 
 </div>
 <script>
$(document).ready(function()
 {
   //for table row
  $("tr:even").css("background-color", "#5094FA","border:none");
  $("tr:odd").css("background-color", "#25B4AC");
});
</script>


<h2>Add Items
</h2>
Manage content using the editor below. All content entered will be displayed according to the layout and style of the website. When pasting content from MS word, please ensure that you remove all styling (you will be prompted to do so in the popup box). 
<table>
<tr><th colspan="6"></th><th><a href="<?php echo site_url('categories/add_items/'.$item_type_id);?>"><input type="button" value="Add New Items"/></a></th></tr>
<tr><th width="10%"><strong>Sno</strong></th><th width="20%"><strong>Name</strong></th><th width="15%">Image</th><th width="15%"> Price</th><th width="60%"><strong>Description</strong></th><th width="20%"><strong>Featured Product</strong></th><th width="20%"><strong>Action</strong></th></tr>
     <?php  
      $i=1;
      foreach($row as $r) :
      ?>
        <tr><td ><?php echo $i++;?></td><td ><?php echo $r->name;?></td>
        <td><img src="<?php echo base_url();?>images/<?php echo $r->image;?>" alt="<?php echo $r->image;?>" height="90" width="120"/></a>
        <td><?php echo $r->Price;?> </td>
        </td>
        <td><?php echo substr($r->description,0,200);?></td>
        <td><?php echo $r->featured;?></td>
        <td width="20%">
        <a href="<?php echo site_url('categories/update_insert/'.$r->id)?>">EDIT</a> |
        <a href="<?php echo site_url('categories/deleteid/'.$r->id)?>"onclick="return confirm('Do You Want To Delete This Item ??')"> DELETE</a></td></tr>
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


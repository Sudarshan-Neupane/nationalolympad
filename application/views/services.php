<div id="content">
 <h2>content management | Comming News &amp; Events</h2>
 <p>Manage content using the editor below. All content entered
  will be displayed according to the layout and style of the website.
   When pasting content from MS word, please ensure that you remove all styling 
   (you will be prompted to do so in the popup box).
 </p>
 <br />
<table>
<tr><th colspan="4"></th><th><a href="<?php echo site_url('add_service');?>"><input type="button" value="Add Events"/></a></th></tr>
<tr><th width="10%"><strong>Sno</strong></th><th width="20%"><strong>Title</strong></th><th>Date Time</th><th width="60%"><strong>Description</strong></th><th width="20%"><strong>Action</strong></th></tr>
<?php  
      $i=1;
      foreach($row as $r) : ?>
        <tr><td width="10%"><?php echo $i++;?></td><td width="20%"><?php echo $r->name;?></td>
          <td><?php echo $r->date_time;?></td>
        <td width="60%">
        <?php echo substr($r->description,0,200);?></td><td width="20%">
        <a href="<?php echo site_url('service/editdata/'.$r->id)?>">EDIT</a> |
        <a href="<?php echo site_url('service/deletedata/'.$r->id)?>" onclick="return confirm('Do You Want To Delete This Event ??')"> DELETE</a></td></tr>
        
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


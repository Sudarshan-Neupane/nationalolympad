<h2>Our Team
</h2>
Our customers are essential members of the pangolinweb solution.
 We work with them, rather than for them. 
 They are our knowledge base, our collaborators, and our partners.
 These are just some of the clients we are proud to be working with.
<table>
<tr><th colspan="4"></th><th><a href="<?php echo site_url('addclients/add_clients');?>"><input type="button" value="Add Members"/></a></th></tr>
<tr><th width="10%"><strong>Sno</strong></th><th width="20%"><strong>Name</strong></th><th width="15%">Image</th><th width="60%"><strong>Short Description</strong></th><th width="20%"><strong>Action</strong></th></tr>
<?php  
      $i=1;
      foreach($row as $r) : ?>
        <tr><td ><?php echo $i++;?></td><td ><?php echo $r->name;?></td>
        <td><img src="<?php echo base_url();?>images/<?php echo $r->image;?>" alt="<?php echo $r->image;?>" height="90" width="120"/></a>
       
        </td>
        <td>
        <?php echo substr($r->description,0,200);?></td><td width="20%">
        <a href="<?php echo site_url('addclients/update_insert/'.$r->id)?>">EDIT</a> |
        <a href="<?php echo site_url('clients/deleteclient/'.$r->id)?>"onclick="return confirm('Do You Want To Delete ??')"> DELETE</a></td></tr>
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


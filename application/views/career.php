<h2>Our current JOb's</h2>
<?php 
for($i=0;$i<2;$i++){
    echo "<br>";
}?>
<table>
<tr><th colspan="3"></th><th><a href="<?php echo site_url('careers/add_career');?>"><input type="button" value="Add New Job"/></a></th></tr>
<tr><th width="10%"><strong>Sno</strong></th><th width="20%"><strong>Name</strong></th><th width="60%"><strong>Description</strong></th><th width="20%"><strong>Action</strong></th></tr>
<?php  
      $i=1;
      foreach($row as $r) : ?>
        <tr><td width="10%"><?php echo $i++;?></td><td width="20%"><?php echo $r->job_title;?></td><td width="60%">
        <?php echo substr($r->description,0,200);?></td><td width="20%">
        <a href="<?php echo site_url('careers/editdata/'.$r->id)?>">EDIT</a> |
        <a href="<?php echo site_url('careers/deletedata/'.$r->id)?>"> DELETE</a></td></tr>
<?php endforeach;?>
</table>
 

 <script>
$(document).ready(function()
{
   //for table row
  $("tr:even").css("background-color", "#5094FA","border:none");
  $("tr:odd").css("background-color", "#25B4AC");
});
</script>


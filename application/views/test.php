<div id="content">
<h2>Content Management system | Add services</h2>
 
 <?php 
   //$attributes=array('class'=>'add_service','id'=>'add_service','name'=>'add_service');
   echo form_open('test/form/'.$id);
 ?>
 
    <label>Service Name:</label>
    <input type="text" name="sname" id="sname" value="<?php echo set_value('sname',$services['name']);?>" />
    
    <label>Description:</label>
    <textarea name="description" class="ckeditor"><?php echo set_value('description',$services['description']);?></textarea>
    
    <input type="hidden" name="s_id" value="<?php echo $id; ?>" />
    <input type="submit" value="Add Service"/>
 
 <?php   echo form_close(); ?>
 
  
</div>
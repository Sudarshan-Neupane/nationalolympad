<br /><br /><br />
<h2>Edit Menu</h2>
<div id="content" style="border: 1px solid white;padding: 5px;;">
 <?php  echo form_open_multipart('categories/do_upload'); 
?>
<?php foreach($row as $row){?>

<input  type="text" name="id" value="<?php echo $row->cat_id?>" style="display: none;"/>

 <strong><label> Display Name</label></strong>
 <p><input type="text" name="categories_name"  id="categories_name" size="50" value="<?php echo $row->categories;?>" placeholder="Software" required/></p>
 
 <label>Menu Description</label>
<textarea class="ckeditor" name="description" id="dedscription"><?php echo $row->Description;?></textarea>
<br />
  <label>Image:</label>
  (Only click the browser If you want to replace the old image )<br />
 <img  src="<?php echo base_url();?>images/<?php echo $row->image;?>" width="200px" width="200px" style="margin:0px 20px;"/>
<br /><br />

 <input  type="file" name="userfile"/>
 <br />
  <?php
  }
 ?>
  <input type="submit" value="Update Categories" name="submit"/>
  
  <?php echo form_close();?>
 </div>

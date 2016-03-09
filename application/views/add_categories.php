<br /><br /><br />
<h2>Add New Menu</h2>
<div id="content" style="border: 1px solid white;padding: 5px;;">
 <?php  echo form_open_multipart('categories/do_upload'); 
?>

 <strong><label> Display Name</label></strong>
 <p><input type="text" name="categories_name"  id="categories_name" size="50" value="" placeholder="Software" required/></p>
 
 <label>Menu Description</label>
<textarea class="ckeditor" name="description" id="dedscription"></textarea>
<br />
 <input  type="file" name="userfile"/>
 <br /><br /><br />
  <input type="submit" value="Add Categories" name="submit"/>
  
  <?php echo form_close();?>
 </div>
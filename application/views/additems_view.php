<br /><br /><br />
<h2>Add New Sub Menu</h2>
<div id="content" style="border: 1px solid white;padding: 5px;;">
 <?php echo form_open_multipart('additems/do_upload')?>


 <strong><label>Type<i style="color: red;">(Please Choose Your Header Menu For Sub Menu)</i></label></strong><br />

     <select name="menu" style="width: 180px; height: 30px; font-size: 16px;" >
        <?php foreach($categories as $cat)
         {
        ?> 
        <option value="<?php echo $cat->cat_id;?>"><?php echo $cat->categories;?></option>
        <?php   
         }
         ?>     
     </select>
 <br /><br />
  <strong><label>Menu Display Name</label></strong>
 <p><input type="text" name="sub_menu" size="50" value="" required/></p>
 <br />
 <label>Page Description</label><br />
 
 <textarea class="ckeditor" name="description" id="description"></textarea>
 <br />
 <label>Image</label><br />
 <input  type="file" name="userfile"/>
 <br /><br />
  <input type="submit" value="Add Sub Menu" name="submit"/>
  <?php echo form_close();?>
 </div>
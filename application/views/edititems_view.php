<br /><br /><br />
<h2>Edit Menu</h2>
<div id="content" style="border: 1px solid white;padding: 5px;;">
 <?php echo form_open_multipart('additems/do_upload')?>
 <?php foreach($row as $row){?>
 <input  type="text" name="id" value="<?php echo $row->id?>" style="display: none;"/>
<br />
  <strong><label>Menu Display Name</label></strong>
 <p><input type="text" name="sub_menu" size="50" value="<?php echo $row->name;?>" required/></p>
 <br />
 <label>Page Description</label><br />
 
 <textarea class="ckeditor" name="description" id="description"><?php echo $row->description;?></textarea>
 <br />
 <img src="<?php echo base_url();?>images/<?php echo $row->image;?>" width="120px" height="120px"/>
 <br />
 <label>Image</label><br />
 <input  type="file" name="userfile"/>
 <br />

 
  <strong><label>Type<i style="color: red; font-size: 20px;">(Please Choose Your Item Type)</i></label></strong><br />

     <select name="menu" style="width: 180px; height: 30px; font-size: 16px;" >
       <option value="<?php echo $row->cat_id?>"><?php echo  $this->login_model->get_category_fromid($row->cat_id);?></option>
        <?php foreach($categories as $cat)
         {
        ?> 
        <option value="<?php echo $cat->cat_id;?>"><?php echo $cat->categories;?></option>
        <?php   
         }
         ?>     
     </select>
 <br /><br />
  <?php 
 }
 ?>
  <input type="submit" value="Update" name="submit"/>
  <?php echo form_close();?>
 </div>
<h2>Latest News
</h2>
Manage content using the editor below. All content entered will be displayed according to the layout and style of the website. When pasting content from MS word, please ensure that you remove all styling (you will be prompted to do so in the popup box).
<?php foreach($row as $r):?>
<?php echo form_open_multipart('categories/edit_upload/'.$r->id);?>

<label>Item Name</label>
<br />
<input  type="hidden" name="item_type_id" value="<?php echo $r->item_type_id ;?>"/>
<input  type="text" name="item_name" size="50" value="<?php echo $r->name;?>" required />
<label>Price</label>
<br />
<input  type="text" name="Price" size="50" value="<?php echo $r->Price;?>"/>
<label>Description</label>
<br />
<textarea class="ckeditor" name="description" id="dedscription"> <?php echo $r->description; ?></textarea>
<label>Featured Items</label>
<br />
<?php 
$featured=$r->featured;
?>
<input  type="radio" name="f_item" value="YES" <?php if($featured=='YES'){?> checked=""<?php }?> />YES <br />
<input  type="radio" name="f_item" value="NO" <?php if($featured=='NO'){?> checked=""<?php }?>/>NO<br /><hr  style="width: 220px; color: red; float: left;"/><br />
<label>Image</label><br />
<img src="<?php echo base_url();?>images/<?php echo $r->image;?>" alt="<?php echo $r->image;?>" height="90" width="150"/><br />
<?php endforeach?>
<input  type="file" name="userfile"/>
<br /> <br />
<input  type="submit" name="submit" value="Update Items"/>
<?php echo form_close();?>



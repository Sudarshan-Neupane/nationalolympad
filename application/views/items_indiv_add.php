<h2>Latest News
</h2>
Manage content using the editor below. All content entered will be displayed according to the layout and style of the website. When pasting content from MS word, please ensure that you remove all styling (you will be prompted to do so in the popup box).
<?php echo form_open_multipart('categories/do_upload');?>
<input type="hidden"  name="item_type_id" value="<?php   echo $id; ?>" />
<label>Item Name</label>
<br />
<input  type="text" name="item_name" size="50" placeholder="Item Name" required />
<label>Price</label>
<br />
<input  type="text" name="Price" size="50" placeholder="Item Price"/>
<label>Description</label>
<br />
<textarea class="ckeditor" name="description" id="dedscription"></textarea>
<label>Featured Items</label>
<br />
<input  type="radio" name="f_item" value="YES" />YES <br />
<input  type="radio" name="f_item" value="NO" checked=""/>NO<br /><hr  style="width: 220px; color: red; float: left;"/><br />
<label>Image</label>
<input  type="file" name="userfile"/>
<br /> <br />
<input  type="submit" name="submit" value="Add Items"/>
<?php echo form_close();?>



<br /><br /><br />

<h2>Welcome page</h2>
<div id="content" style="border: 1px solid white;padding: 5px;;">
 <?php 
 echo form_open_multipart('home/do_upload');?> 
 <?php foreach($values as $val):?>
 <input type="hidden" value="<?php echo $val->id;?>" name="id"/>
 <strong><label>Display Title</label></strong>
 <p><input type="text" name="title" size="50" value="<?php echo $val->title;?>"/></p>
 <strong><label>Description</label></strong><br />
 <textarea class="ckeditor" id="description" name="description"> 
 <?php echo $val->description?>
 </textarea>
 <?php endforeach;?>
 <br />
 <img src="<?php echo base_url();?>images/<?php echo $val->image;?>" alt="<?php echo $val->image;?>" height="150" width="160"/>
 <br /><br />
<input type="file" name="userfile" /><br /><br />

 <input type="submit" value="update" name="submit"/>
 <?php echo form_close();?>
 </div>
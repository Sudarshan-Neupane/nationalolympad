<br /><br /><br />
<h2>Welcome page</h2>
<div id="content" style="border: 1px solid white;padding: 5px;;">
 <?php echo form_open('dashboard/edit_update')?>
 <?php foreach($values as $val):?>
 <input type="hidden" value="<?php echo $val->id;?>" name="id"/>
 <strong><label>Display Title</label></strong>
 <p><input type="text" name="pagetitle" size="50" value="<?php echo $val->pagetitle;?>"/></p>
 <strong><label>Description</label></strong><br />
 <textarea class="ckeditor" id="description" name="description"> 
 <?php echo $val->description?>
 </textarea>
 <?php endforeach;?>
 <br />
  <input type="submit" value="update" name="submit"/>
  <?php echo form_close();?>
 </div>
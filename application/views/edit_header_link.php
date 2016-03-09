<div id="content">
<h2>Manage header Links</h2>
<p>Manage content using the editor below. All content entered will be displayed 
according to the layout and style of the website. When pasting content from MS word, please ensure
 that you remove all styling (you will be prompted to do so in the popup box).</p>
 <?php 
   echo form_open('add_header_links/add_links');
    foreach($row as $r):
  
 ?> 
  <label>Display Name</label>
  <input  type="hidden" value="<?php echo $r->id;?>" name="id"/>
  <p><input  type="text" name="title" size="50" value="<?php echo $r->title;?>"/></p>
  <label>Description ::</label>
 <textarea name="description" class="ckeditor">
 <?php echo $r->description;?>
  </textarea><br />
  
 <?php
   endforeach;
   echo form_submit('add_links','Update Links');
   echo form_close();
   ?>
  
</div> 
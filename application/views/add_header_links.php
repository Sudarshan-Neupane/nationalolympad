<div id="content">
<h2>Manage header Links</h2>
<p>Manage content using the editor below. All content entered will be displayed 
according to the layout and style of the website. When pasting content from MS word, please ensure
 that you remove all styling (you will be prompted to do so in the popup box).</p>
 <?php 
   echo form_open('add_header_links/add_links');
    
 ?> 
  <label>Display Name</label>
  <input  type="hidden" value="" name="id"/>
  <p><input  type="text" name="title" size="50" value=""/></p>
  <label>Description ::</label>
  <p><textarea name="description" class="ckeditor"></textarea></p>
  
 <?php
   echo form_submit('add_links','Add Links');
   echo form_close();
   ?>
  
</div> 
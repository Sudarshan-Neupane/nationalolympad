<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style type="text/css" src="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"></style>
<div id="content">
<h2>Content Management system | Edit Events</h2>
<p>Manage content using the editor below. All content entered will be displayed 
according to the layout and style of the website. When pasting content from MS word, please ensure
 that you remove all styling (you will be prompted to do so in the popup box).</p>
 <?php 
   echo form_open('service/edit_services');
    foreach($rows as $ro):
 ?> 
  <label>Service Name</label>
  <input  type="hidden" value="<?php echo  $ro->id;?>" name="id"/>
  <p><input  type="text" name="s_name" size="50" value="<?php echo $ro->name;?>"/></p>
  <p>Date: <br /><input type="text" id="date_time" name="date_time"  size="50"  value="<?php echo $ro->date_time;?>"/></p>
  <label>Description ::</label>
  <p><textarea name="description" class="ckeditor"><?php echo $ro->description;?></textarea></p>
  <?php endforeach;?>
 <?php
   echo form_submit('add_service','Update Events');
   echo form_close();
   ?>
  
</div>
 <script>
$(function() {
   $( "#date_time" ).datepicker({ dateFormat: "yy-mm-dd" });
$( "#date_time" ).datepicker();
//$("#datepicker").formatDate( "yy-mm-dd");
});
</script>
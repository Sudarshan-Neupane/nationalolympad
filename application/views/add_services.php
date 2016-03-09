<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style type="text/css" src="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"></style>
<div id="content">
<h2>Content Management system | Add Events</h2>
<p>Manage content using the editor below. All content entered will be displayed 
according to the layout and style of the website. When pasting content from MS word, please ensure
 that you remove all styling (you will be prompted to do so in the popup box).</p>
 <?php 
   $attributes=array('class'=>'add_service','id'=>'add_service','name'=>'add_service');
   echo form_open('add_service/adddata',$attributes);
   echo  form_hidden('s_id',NULL);
   echo form_label('Add Event Title', 'services');
   $data_title=array('name'=>'sname','id'=>'name','placeholder'=>'Add services','size'=>'50','required');
   echo form_input($data_title);
   ?>
   <p>Date: <input type="text" id="date_time" name="date_time"  size="50" /></p>
   <?php
   echo form_label('Page Description', 'description');
   echo "<br>";
   $data_desc=array('class'=>'ckeditor','name'=>'description');
   echo form_textarea($data_desc);
   echo "<br><br>";
   echo form_submit('add_service','Add Events');
   echo form_close();
 ?>
  
</div>
 <script>
$(function() {
 $( "#date_time" ).datepicker({ dateFormat: "yy-mm-dd" });
$( "#date_time" ).datepicker();
});
</script>
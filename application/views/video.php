<br />
<br />
<h2>
video

</h2> 
  <?php 
   echo form_open('dashboard/insert_video');
  
 ?> 
  <label>Youtube video .latest uploaded video only display on your page</label><br />

  <h2>Please insert name</h2>
 Name: <input  type="text" name="name" size="50"/>
<h2>Please insert the youtube link</h2>
  <input  type="text" name="urls" size="50"/>
  <input type="submit" name="submit" />
  
 <?php   echo form_close(); ?>
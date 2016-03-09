<h2> Gallery Image
</h2>
<h2>Add New Items For Gallery  </h2>
<div style="border: 1px solid white;padding: 5px 10px;">
  <?php 
   echo form_open_multipart('gallery/do_upload'); 
   ?>
 <label>Image Title</label>
 <p>
    <input  type="text" size="50" name="title" id="c_name" placeholder="Please Enter The Name Of The Image"/></p>

   <label>Image:</label>
   <p>
 <input  type="file" name="userfile" required/>
 </p>
 <br />
 <input type="submit" value="Add Images" name="submit"/>
 <?php   echo form_close(); ?>
 </div>
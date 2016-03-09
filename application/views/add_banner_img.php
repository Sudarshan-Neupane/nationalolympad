<h2> Banners Image
</h2>
<h2>Add New Items For Moving Images  </h2>
<div style="border: 1px solid white;padding: 5px 10px;">
  <?php 
   echo form_open_multipart('slidebanner/do_upload'); 
 
   ?>
 <label>Image Title Links</label>
 <p>
    <input  type="text" size="50" name="title" id="c_name" placeholder="Name Of The Image Link "/></p>

   <label>Image:</label>
   <p>
   Please Insert 520X290 Image For Better Look
   <br />
 <input  type="file" name="userfile" required/>
 </p>
 <br />
 <input type="submit" value="Add Images" name="submit"/>
 <?php   echo form_close(); ?>
 </div>
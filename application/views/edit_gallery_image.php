
<h2>Gallery Image
</h2>
<h2>Edit Existing Items For Gallery Images  </h2>
<div style="border: 1px solid white;padding: 5px 10px;">
  <?php 
   echo form_open_multipart('gallery/do_upload'); 
   ?>
 <label>Image Title</label>
 <p>
 <?php foreach($row as $row):?>
   <input  type="hidden" value="<?php echo $row->id;?>" name="id"/>
    <input  type="text" size="50" name="title" id="title" value="<?php echo $row->title;?>"/></p>

   <label>Image:</label>
  (Only click the browser If you want to replace the old image )
   <p><img src="<?php echo base_url()?>images/<?php echo $row->image;?>" height="120" width="120"/></p>
   <p>
 <input  type="file" name="userfile" />
 </p>
 <?php endforeach;?>
 <br />
 <input type="submit" value="Update Images" name="submit"/>
 <?php   echo form_close(); ?>
 </div>
<h2>Edit Member</h2>
Our customers are essential members of the pangolinweb  solution. We work with them, rather than for them. 
They are our knowledge base, our collaborators, 
and our partners. These are just some of the clients we are proud to be working with. 
 <br />
 <?php 
   echo form_open_multipart('addclients/do_upload'); 
 ?>
 <label>Name</label>
 <p>
 <?php 
       foreach($row as $ro):?>
       <input  type="hidden" value="<?php echo  $ro->id;?>" name="id"/>
       <input  type="text" size="50" name="c_name" id="c_name" value="<?php echo $ro->name;?>" required/></p>
       <label>Description</label>
    
       <textarea name="description" class="ckeditor">
      <?php echo $ro->description;?>
       </textarea>
       <br />
       <img  src="<?php echo base_url()?>images/<?php echo $ro->image;?>" height="120" width="120"/>
 <?php endforeach; ?>
 <br />
 <input  type="file" name="userfile"/>
 <br /><br />
 <input type="submit" value="Update" name="submit"/>
 <?php   echo form_close(); ?>
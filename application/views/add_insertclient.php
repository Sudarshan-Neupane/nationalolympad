<h1 style="color: red">~Add Members ~</h1>
A content management system (CMS) is a computer software system for organizing
and facilitating collaborative creation of documents and other content.  CMS?s make web page content management
simple for even non-technical users, allowing designated users to change most aspects
of their sites themselves, without the intervention of a web developer. Anyone with
basic word processing skills can easily learn to manage the CMS deployed for your
website.
 <br />
 <br />
 <?php 
   echo form_open_multipart('addclients/do_upload'); 
 ?>
 <label>Name:</label>
 <p>
       <input  type="text" size="50" name="c_name" id="c_name" value=""/></p>
       <label>Description</label>
    
       <textarea name="description" class="ckeditor">
       </textarea>
 <br />
 <label>Image</label><br />
 <input  type="file" name="userfile"/>
 <br /><br />
 <input type="submit" value="ADD MEMBER" name="submit"/>
 <?php   echo form_close(); ?>
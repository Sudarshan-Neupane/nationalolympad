<br />
<br />
<h2>
Change Your Top banner

</h2> 
 <?php 
   echo form_open_multipart('dashboard/do_upload'); 
  ?>
  <label>Company Logo</label><br />
  <p style="color: red;">Please insert the image of size 1200 x 160.The image which is latest inserted will be display in your website</p>
  <input  type="file" name="userfile" id="userfile"/><br />
  <br />
  
  <input type="submit" value="Add Images" name="submit"/>
 <?php   echo form_close(); ?>
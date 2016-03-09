<h2>Change Password
</h2>

<div style="border: 1px solid white;padding: 5px 10px;">
<h3><?php echo "<b style='color: red;'>",$err,"</b><br>"; ?></h3>
  <?php 
   echo form_open_multipart('users/checkpassword'); 
   ?>
<label style="color: black;">User Name </label>
 <p>
  <?php echo "<b style='color: red;'>",form_error('username'),"</b>";?>
    <input  type="text" size="50" name="username" id="username" placeholder="Please Enter Your Username"/></p>

   <label  style="color: black;"> Old Password </label>
    <p>
    <?php echo "<b style='color: red;'>",form_error('oldpass'),"</b>";?>
    <input  type="text" size="50" name="oldpass" id="newpass" placeholder="Please Enter Old Password"  /></p>

 <label> New Password </label>
    <p>
    <?php echo "<b style='color: red;'>",form_error('newpass'),"</b>";?>
    <input  type="password" size="50" name="newpass" id="newpass" placeholder="Please Enter New Password " required/></p>
 <label> Confirmation  Password </label>
    <p>
   
  <input  type="password" size="50" name="conpass" id="conpass" placeholder="Re-Enter New Password " required/></p>

 </p>
 <br />
 <input type="submit" value="Change Password" name="submit"/>
 <?php   echo form_close(); ?>
 </div>
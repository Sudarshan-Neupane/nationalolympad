<html>
<head>
<title><?php echo $title?></title><body>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/style.css"/>
</body>
<div id="wrapper">
<div id="login_form">
<fieldset>
<legend><h3>Login Form</h3></legend>
 
  <?php
  echo form_open('login321/validate_credentials');
  ?>
  <input  type="text" name="username" placeholder='username' required/>
  <input  type="password" name="password" placeholder='password' required/>
  <input  type="submit" name="Login" value="LOGIN"/>
   <input type="reset" name="reset" value="Reset" />  
  <?php
  echo  form_close();
  ?>
  <p style="text-align: center; color: red;text-transform: capitalize;">If You are Unauthorized user.We retrieve your IP details
  <br />
  Design And Develop By <a href="pangolinweb.com">pangolinweb.com</a>
  </p>
</fieldset>
</div>
</div>
</head></html>
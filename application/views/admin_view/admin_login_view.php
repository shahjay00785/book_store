<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin login</title>
</head>
<body>

  <form method="post" action="<?php echo base_url('Admin_controller/Admin/manage_admin_login/check'); ?>">
    Username:<br>
    <input type="text" name="username" maxlength="40">
    <br><br>
    Password:<br>
    <input type="password" name="password" maxlength="40">
    <br><br>
    <input class="button" type="submit" value="Login">
    <br><br>
    <a href="modules/register.html"><b>Sign Up</b></a>
  </form>

  </html>
</body>

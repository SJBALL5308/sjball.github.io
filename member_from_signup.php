<?php session_start();?>
<?php
include('member/connections1.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  </head>
  <body>
    <div class="signup-form">
      <form class="" action="member_form_add_db.php" method="post">
        <h1>Sign Up</h1>
        <input type="text" id="m_user" placeholder="Full Name" class="txtb">
        <input type="email" id="m_email" placeholder="Email" class="txtb">
        <input type="password" id="m_pass" placeholder="Password" class="txtb">
        <input type="submit" value="Create Account" class="signup-btn">
        <a href="#">Already Have one ?</a>
      </form>
    </div>
  </body>
</html>

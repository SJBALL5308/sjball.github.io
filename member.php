<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
      <h3> สวัสดี คุณ <?php echo $a_name; ?></h3>
        <?php include('member/menu_left.php');?>
      </div>

      <div class="col-md-9">
      <a href="member.php?act=add" class="btn btn-success"> เพิ่ม</a>
      <p></p>

      <?php
$act = $_GET['act'];
if($act == 'add'){
include('member/member_form_add.php');
}elseif ($act == 'edit') {
include('member/member_form_edit.php');
}
else {
include('member/member_list.php');
}
?>

      </div>

    </div>
  </div>
  </body>
</html>

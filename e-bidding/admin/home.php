<?php
session_start();
$user=$_SESSION["user"];
if($_SESSION["authenticated"] !== TRUE){
    header('location: ./admin.php');}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Admin</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="home.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header"><!-- end .header --></div>
  <div class="content">
    <p align="right"><a href="../mybidello/logout.php">Logout</a></p>
    <h2>Welcome ,<?php echo $user;?></h2>
    <table width="207" height="157" border="1">
      <tr>
        <th height="47" scope="row"> <div align="left"><a href="./approval/approval.php">Request for approval</a></div></th>
      </tr>
      <tr>
       
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  <!-- end .content --></div>
  <div class="footer">
    <p></p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>


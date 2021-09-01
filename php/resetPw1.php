<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  session_start();//开启SESSION
  include("conn.php");//包含连接数据库代码页面
  $username=$_SESSION["username"];//使用SESSION读取需要修改的用户名
  $pw=$_POST["pw1"];
  $conn->query("update user_Info set password = '$pw' where username='$username' ") ;
  echo "<script> alert('修改密码成功！'); location.href='../login.html';</script>";
?>
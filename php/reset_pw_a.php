<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $pw=$_POST["pw"];
  $pw1=$_POST["pw1"];
  $result=$conn->query("select * from admin");//创建结果集
  $row=$result->fetch_assoc();//读取结果集第一行记录
  $password=$row["password"];
  if($password!=$pw){
	  echo "<script> alert('原密码错误！ ');location.href='../admin_index.html';</script>";
  }
  else{
    $conn->query("update admin set password='$pw1' ");
	echo "<script> alert('修改密码成功！'); location.href='../adminlog.html';</script>";
  }
?>
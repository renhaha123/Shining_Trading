<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $username=$_POST["username"];
  session_start();//开启SESSION
  $_SESSION["username"]=$_POST["username"];//使用SESSION读取需要修改的用户名
  $result=$conn->query("select * from user_info");//创建结果集
  $n=$result->num_rows;
  for($i=0;$i<$n;$i++){
	  $row=$result->fetch_assoc();
    if($row["username"]==$username){
		$tel=$row["telephone"];
		echo "<script> location.href='../resetPw1.php?tel=$tel';</script>";
	}
  }
  echo "<script> alert('用户名不存在，请重新输入！');location.href='../resetPw.html';</script>";
?>
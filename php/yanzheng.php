<!--检验用户名和密码的php代码-->
    
	<?php
	  session_start();//开启SESSION
	  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
	  include("conn.php");//包含连接数据库代码页面
	  $username=$_POST["username"];
	  $pw=$_POST["pw"];
	  $_SESSION["username"]=$_POST["username"];//将用户名存入SESSION中，方便网站其他页面读取
	  $result=$conn->query("select * from user_info where username='$username'");//创建结果集
	  $row=$result->fetch_assoc();//读取结果集中的第一行记录，然后结果集指针移向下一项记录
	  if($row["username"]==$username && $row["password"]==$pw && $row["ban"]==0){
			header("location:index.php");//进入主页
      }
	  else if($row["ban"]==1){
		  echo "<script> alert('你的账号已被禁止登陆，请联系管理员！'); location.href='../login.html';</script>";
	  }
		
    

	 else{
		  echo "<script> alert('用户名或密码错误！'); location.href='../login.html';</script>";
	  }
	?>
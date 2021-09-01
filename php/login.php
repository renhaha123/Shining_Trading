<!--检验用户名和密码的php代码-->
	<?php
	  include("conn.php");//包含连接数据库代码页面
	  $username=$_POST["username"];
	  $pw=$_POST["pw"];
	  $result=$conn->query("select * from user_info");//创建结果集
	  $i=0;//当前结果集记录行数
	  while($row=$result->fetch_assoc()){//读取结果集中的第一行记录，然后结果集指针移向下一项记录
		if($row["username"]==$username && $row["password"]==$pw){
			echo "<script> alert('用户名或密码正确！'); location.href='register.php';</script>";
			break;
        }
		$i++;
	  }
	  if($i==$result->num_rows){
		  echo "<script> alert('用户名或密码错误！'); location.href='../login.html';</script>";
	  }
	?>
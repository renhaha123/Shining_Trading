<!--用户注册的php代码-->
<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $username=$_POST["username"];
  $pw=$_POST["pw"];
  $department=$_POST["department"];
  $class=$_POST["classReg"];
  $xingming=$_POST["xingming"];
  $telephone=$_POST["telephone"];
  $qq=$_POST["qq"];
  $weixin=$_POST["weixin"];
  $result=$conn->query("select * from user_info");
  $n=$result->num_rows;
  for($i=0;$i<$n;$i++){
	  $row=$result->fetch_assoc();
	  if($row["telephone"]==$telephone){
		   echo "<script> alert('电话已被注册，请重新输入！'); location.href='../register.html';</script>";
		   return;
	  }
	  else if($i==$n-1){
		  $sql="insert into user_info(username,password,department,class,yourname,telephone,qq,weixin) values( '$username','$pw','$department','$class','$xingming','$telephone','$qq','$weixin')";
          $conn->query($sql) or die("注册失败！"); //将表单的数据插入到数据库中
          echo "<script> alert('注册成功！'); location.href='../login.html';</script>";
	  }
  }
?>
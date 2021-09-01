 <?php
	  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
	  include("conn.php");//包含连接数据库代码页面
	  $username=$_POST["username"];
	  $pw=$_POST["pw"];
	  $result=$conn->query("select * from admin");//创建结果集
	  $row=$result->fetch_assoc();//读取结果集中的第一行记录
	  if($row["admin_name"]==$username && $row["password"]==$pw){
			header("location:../admin_index.html");//进入管理页面
      }
	  else{
		  echo "<script> alert('用户名或密码错误！ '); location.href='../adminlog.html';</script>";
	  }
?>

<?php
  session_start();//开启SESSION 
  include("conn.php");//包含连接数据库代码页面
  $s_name=$_SESSION["username"];//卖家用户名
  $result=$conn->query("select * from user_info where username='$s_name'");//创建结果集
  $row=$result->fetch_assoc();
  echo "<p>用户名:              ";
  echo $row["username"]."</p><p>telephone:";
  echo $row["telephone"]."</p><p>QQ:";
  echo $row["qq"]."</p><p>微信:";
  echo $row["weixin"]."</p>";
?>
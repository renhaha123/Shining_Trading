<?php 
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $result=$conn->query("select * from user_info");//创建结果集
  echo '<div id="userDiv"><table class="admin_tb" border="1" width=""  ><tr><th colspan="7">用户基本信息</th></tr><tr><td>用户ID</td><td>用户名</td><td>电 话</td><td>Q Q</td><td>微 信</td><td>操 作</td></tr>';
  $i=0;
  while($row=$result->fetch_assoc()){
   
   echo '<tr><td id="user_id';
   echo $i.'">';
   echo $row["user_id"].'</td><td>';
   echo $row["username"].'</td><td>';
   echo $row["telephone"].'</td><td>';
   echo $row["qq"].'</td><td>';
   echo $row["weixin"].'</td><td><a onClick="alterUserInfo(';
   echo $i.')" >修改</a></td> ';
   $i++;
  }
  echo '</table></div>';
?>
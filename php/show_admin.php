<?php 
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  include("conn.php");//包含连接数据库代码页面
  $result=$conn->query("select * from admin");//创建结果集
  $row=$result->fetch_assoc();//读取结果集第一行记录
  $admin_name=$row["admin_name"];
  $password=$row["password"];
  echo '<div id="adminDiv"><form method="post" action="php/reset_pw_a.php" onsubmit="return checkInfo()"><table class="admin_tb" border="1"><tr><th>管理员信息</th></tr><tr><td>用户名：';
  echo $admin_name.'</td></tr><tr><td>原密码:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="pw" type="password" name="pw"/></td></tr><tr><td>新密码:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="pw1"  name="pw1" type="password"/></td></tr><tr><td>确认新密码:<input id="pw2" type="password"/></td></tr><tr><td><input type="submit" value="提交" style="height:20px; width:80px;border:none;"/></td></tr></table></form></div>';
?>
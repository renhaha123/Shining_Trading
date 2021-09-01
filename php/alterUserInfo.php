<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  $user_id=$_GET["user_id"];
  include("conn.php");//包含连接数据库代码页面
  $result=$conn->query("select * from user_info where user_id='$user_id'");//创建结果集
  $row=$result->fetch_assoc();//读取结果集第一行记录
  $username=$row["username"];
  $pw=$row["password"];
  $telephone=$row["telephone"];
  $qq=$row["qq"];
  $weixin=$row["weixin"];
  echo '<div id="alterUserDiv"><form action="php/updateUser.php?user_id=';
  echo $user_id.'" method="post" onsubmit="return checkInfoUser()"><table class="admin_tb" cellspacing="5" cellpadding="5"><tr><td colspan="2">用户信息</td></tr><tr><td>用户名</td><td>';
  echo $username.'</td></tr><tr><td>密 &nbsp;&nbsp;码</td><td><input value="';
  echo $pw.'" type="password" id="resetPw1" name="pw"/></td></tr><tr><td>确认密码</td><td><input value="';
  echo $pw.'" type="password" id="resetPw2"/></td></tr><tr><td>电 &nbsp;&nbsp;话</td><td><input name="telephone" value="';
  echo $telephone.'" type="text" id="telephone"/></td></tr><tr><td>Q &nbsp;&nbsp;Q</td><td><input name="qq" type="text" value="';
  echo $qq.'"/></td></tr><tr><td>微 &nbsp;&nbsp;信</td><td><input name="weixin" value="';
  echo $weixin.'" type="text"/></td></tr><tr><td>禁止登陆  </td><td> 是 <input type="radio" name="ban" value="1"> 否 <input name="ban" type="radio" value="0" checked="checked"></td></tr><tr><td colspan="2"><input style="width:50px;height:22px;" type="submit" value="保存" name="baocun"/></td></tr>';
  echo '</table></form></div>';
?>
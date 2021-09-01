<?php
  error_reporting(7);//只显示严重错误提示
  session_start();//开启SESSION
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  $conn=mysql_connect("localhost","root","");
  mysql_query("set names 'utf8'");
  mysql_select_db("db_ShanLiang",$conn);
  $user_name_s=$_SESSION["username"];//卖家用户名
  $result1=mysql_query("select * from user_info where username='$user_name_s'",$conn);//创建结果集
  $row1=mysql_fetch_assoc($result1);//读取结果集中的第一行
  $user_id_s=$row1["user_id"];//卖家用户ID
  mysql_free_result($result1);//释放结果集
  $result2=mysql_query("select * from sale_goods where user_id='$user_id_s'",$conn);//创建结果集
  while($row2=mysql_fetch_assoc($result2)){
    $goods_name=$row2["goods_name"];
	$goods_id=$row2["goods_id"];
	echo '<div class="user_info_item2_content_Liuyan1">买家对商品<a onClick="show_myLiuyan1(';
	echo $goods_id.')">';
	echo $goods_name.'</a>的留言</div>';
  }
?>
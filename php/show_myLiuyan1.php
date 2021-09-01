<?php
  error_reporting(7);//只显示严重错误提示
  session_start();//开启SESSION
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  $good_id=$_GET["goods_id"];
  $conn=mysql_connect("localhost","root","");
  mysql_query("set names 'utf8'");
  mysql_select_db("db_ShanLiang",$conn);
  $sql="select * from liuyan inner join user_info on liuyan.user_id=user_info.user_id and goods_id='$good_id'  ";//使用链表查询
  $result1=mysql_query($sql,$conn);//创建结果集
  while($row1=mysql_fetch_assoc($result1)){
    $username=$row1["username"];
    $content=$row1["content"];
	echo '<div class="user_info_item2_content_Liuyan2">买家';
	echo $username.'对你的留言：';
	echo $content.'</div>';
  }
  
?>
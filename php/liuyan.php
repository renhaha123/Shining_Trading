<?php
  error_reporting(7);//只显示严重错误提示
  session_start();//开启SESSION
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  $conn=mysql_connect("localhost","root","");
  mysql_query("set names 'utf8'");
  mysql_select_db("db_ShanLiang",$conn);
  $liuyan=$_GET["liuyan"];
  $goods_id=$_GET["goods_id"];//商品id
  $s_name=$_GET["s_name"];//卖家用户名
  $username=$_SESSION["username"];//买家用户名
  $result1=mysql_query("select * from user_info where username='$username'",$conn);//创建结果集
  $row1=mysql_fetch_assoc($result1);
  $user_id=$row1["user_id"];//查找出买家用户名对应的用户id
  $sql1="insert into liuyan(content,user_id,goods_id) values( '$liuyan','$user_id','$goods_id')";
  mysql_query($sql1);//将留言内容存入数据库中
  mysql_free_result($result1); 
  $result2=mysql_query("select * from liuyan where user_id = '$user_id' and goods_id='$goods_id'",$conn);
  while($row2=mysql_fetch_assoc($result2)){
    echo "<p>";
	echo $username."留言给";
	echo $s_name.":";
	echo $row2["content"]."</p>";
  }
?>
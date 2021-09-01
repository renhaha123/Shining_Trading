<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  session_start();//开启SESSION
  include("conn.php");//包含连接数据库代码页面
  $goods_name_n=$_POST["goods_name_n"];
  $goods_type=$_POST["goods_type"];
  $price_n=$_POST["price_n"];
  $place=$_POST["place_n"];
  $description=$_POST["description_n"];
  $type_id=$_POST["goods_type"];
  $username=$_SESSION["username"];
  $result=$conn->query("select * from user_info where username='$username'");//创建结果集
  $row=$result->fetch_assoc();
  $user_id=$row["user_id"];//查找出用户名对应的用户id
  $time=date("Y-m-d");//获取当前日期
  $sql="insert into need_goods(goods_name,price,deal_place,description,time,user_id,type_id) values( '$goods_name_n','$price_n','$place','$description','$time','$user_id','$type_id')";
  $conn->query($sql) or die("发布失败！"); //将表单的数据插入到数据库中
  echo "<script> alert('发布求购信息成功！'); location.href='need_goods.php';</script>";
?>
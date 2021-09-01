<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  session_start();//开启SESSION
  include("php/conn.php");//包含连接数据库代码页面
  move_uploaded_file($_FILES["myfile1"]["tmp_name"],getcwd()."\\photos\\".$_FILES["myfile1"]["name"]);
  move_uploaded_file($_FILES["myfile2"]["tmp_name"],getcwd()."\\photos\\".$_FILES["myfile2"]["name"]);
  move_uploaded_file($_FILES["myfile3"]["tmp_name"],getcwd()."\\photos\\".$_FILES["myfile3"]["name"]);//将上传的图片移动到服务器目录下
  $photo1=$_FILES["myfile1"]["name"];
  $photo2=$_FILES["myfile2"]["name"];
  $photo3=$_FILES["myfile3"]["name"];//获取上传的图片的路径
  $goods_name_s=$_POST["goods_name_s"];
  $type_id=$_POST["goods_type"];
  $price_s=$_POST["price_s"];
  $place=$_POST["place"];
  $description=$_POST["description"];
  $username=$_SESSION["username"];
  $result=$conn->query("select * from user_info where username='$username'");//创建结果集
  $row=$result->fetch_assoc();
  $user_id=$row["user_id"];//查找出用户名对应的用户id
  $time=date("Y-m-d");//获取当前日期
  $sql="insert into sale_goods(goods_name,price,deal_place,description,photo1,photo2,photo3,time,user_id,type_id) values( '$goods_name_s','$price_s','$place','$description','$photo1','$photo2','$photo3','$time','$user_id','$type_id')";
  $conn->query($sql) or die("发布失败！"); //将表单的数据插入到数据库中
  echo "<script> alert('发布商品成功！'); location.href='php/index.php';</script>";
?>
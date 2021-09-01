
<?php
//连接数据库的代码
  $conn=new mysqli();//创建$conn对象
  $conn->connect("localhost","root","");//连接数据库服务器
  $conn->query("set names utf8");//设置字符集
  $conn->select_db("db_ShanLiang");//选择数据库
?>
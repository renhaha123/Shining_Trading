<?php
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  $type_id=$_GET["type_id"];
  $newTypeName=$_POST["newTypeName"];
  include("conn.php");//包含连接数据库代码页面
  $sql="update goods_type set type_name='$newTypeName' where type_id='$type_id'";
  $conn->query($sql)or die("保存失败！");
  echo '<script > alert("success"); location.href="../admin_index.html";</script>';
?>
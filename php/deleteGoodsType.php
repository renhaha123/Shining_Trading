<?php
   header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
   include("conn.php");//包含连接数据库代码页面
   $type_id=$_GET["type_id"];
   $sql="delete from goods_type where type_id='$type_id'";
   $conn->query($sql)or die("失败！");
   echo '<script > alert("删除成功"); location.href="../admin_index.html";</script>';
?>
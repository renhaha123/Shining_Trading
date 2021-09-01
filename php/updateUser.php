<?php
    header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
    include("conn.php");//包含连接数据库代码页面
	$user_id=$_GET["user_id"];
    $pw=$_POST["pw"];
    $telephone=$_POST["telephone"];
    $qq=$_POST["qq"];
    $weixin=$_POST["weixin"];
    $ban=$_POST["ban"];
    $sql="update user_info set password='$pw',telephone='$telephone',qq='$qq',weixin='$weixin',ban='$ban' where user_id='$user_id'";
    $conn->query($sql)or die("保存失败！");
	echo '<script > alert("success"); location.href="../admin_index.html";</script>';
 ?>

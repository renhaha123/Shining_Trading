<?php
    header("Content-Type:text/html;charset=utf-8");//��ֹ������ʾ�������Ϊ����
    include("conn.php");//�����������ݿ����ҳ��
	$user_id=$_GET["user_id"];
    $pw=$_POST["pw"];
    $telephone=$_POST["telephone"];
    $qq=$_POST["qq"];
    $weixin=$_POST["weixin"];
    $ban=$_POST["ban"];
    $sql="update user_info set password='$pw',telephone='$telephone',qq='$qq',weixin='$weixin',ban='$ban' where user_id='$user_id'";
    $conn->query($sql)or die("����ʧ�ܣ�");
	echo '<script > alert("success"); location.href="../admin_index.html";</script>';
 ?>

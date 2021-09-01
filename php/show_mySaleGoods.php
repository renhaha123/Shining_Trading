<?php
  error_reporting(7);//只显示严重错误提示
  session_start();//开启SESSION
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  $conn=mysql_connect("localhost","root","");
  mysql_query("set names 'utf8'");
  mysql_select_db("db_ShanLiang",$conn);
  $s_name=$_SESSION["username"];//当前登录的用户名
  $result1=mysql_query("select * from user_info where username='$s_name'",$conn);//创建结果集
  $row1=mysql_fetch_assoc($result1);
  $user_id=$row1["user_id"];
  mysql_free_result($result1);
  $result2=mysql_query("select * from sale_goods where user_id='$user_id'",$conn);//创建结果集
  $n=mysql_num_rows($result2);//记录结果集总记录数
  for($i=0;$i<$n;$i++){
    $row2=mysql_fetch_assoc($result2);
	$goods_id=$row2["goods_id"];
    $photo1=$row2["photo1"];
    $goods_name=$row2["goods_name"];
    $time=$row2["time"];
	$flag=$row2["flag"];
	echo '<div class="user_info_item2_content_dvis"><img src="../photos/';
	echo $photo1.'"/>  商品ID：<span id="user_info_item2_content_goodsId_s';
	echo $i.'">';
	echo $goods_id.'</span>&nbsp;&nbsp;&nbsp;商品名：';
	echo $goods_name.'   上架时间：  ';
	echo $time.'<a style="color:red;" onClick="yichu_sale_check(';
	echo $i.')">&nbsp;&nbsp;&nbsp;移除</a>';
	if($flag==1){
		echo '<a id="sale_xiajia_a" style="color:red;" onClick="xiajia_sale_check(';
	    echo $i.')">&nbsp;&nbsp;下架</a></div>'; 
	}
	else{
		echo'<a id="sale_shangjia_a" style="color:red;" onClick="shangjia_sale_check(';
	    echo $i.')">&nbsp;&nbsp;上架</a></div>';
		}
  } 
?>
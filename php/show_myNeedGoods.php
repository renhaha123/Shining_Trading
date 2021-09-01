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
  $result2=mysql_query("select * from need_goods where user_id='$user_id'",$conn);//创建结果集
  $n=mysql_num_rows($result2);//记录结果集总记录数
  for($i=0;$i<$n;$i++){
    $row2=mysql_fetch_assoc($result2);
	$flag=$row2["flag"];
    $goods_name=$row2["goods_name"];
	$goods_id=$row2["goods_id"];
    $time=$row2["time"];
	echo '<div class="user_info_item2_content_dvin">  商品ID：<span id="user_info_item2_content_goodsId_n';
	echo $i.'">';
	echo $goods_id.'</span>&nbsp;&nbsp;&nbsp;商品名：';
	echo $goods_name.'   上架时间：  ';
	echo $time.'<a style="color:red;" onClick="yichu_need_check(';
	echo $i.')">&nbsp;&nbsp;&nbsp;移除</a>';
	if($flag==1){
		echo '<a style="color:red;" onClick="xiajia_need_check(';
	    echo $i.')">&nbsp;&nbsp;下架</a></div>'; 
	}
	else{
		echo'<a  style="color:red;" onClick="shangjia_need_check(';
	    echo $i.')">&nbsp;&nbsp;上架</a></div>';
		}
  } 
?>
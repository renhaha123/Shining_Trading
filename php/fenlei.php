<?php
  error_reporting(7);//只显示严重错误提示
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  session_start();//开启SESSION
  $conn=mysql_connect("localhost","root","");
  mysql_query("set names 'utf8'");
  mysql_select_db("db_ShanLiang",$conn);
  $type_name=$_GET["fenlei"];
  $result1=mysql_query("select * from goods_type where type_name='$type_name'",$conn);//创建结果集
  $row1=mysql_fetch_assoc($result1);//读取结果集中的第一行记录，然后结果集指针移向下一项记录
  $type_id=$row1["type_id"];
  mysql_free_result($result1);
  $result2=mysql_query("select * from sale_goods where type_id='$type_id' and flag=1 ",$conn );//创建结果集
  $n=mysql_num_rows($result2);//记录结果集总记录数
  for($i=0;$i<$n;$i++){
			 $row2=mysql_fetch_assoc($result2);//读取结果集中的第一行记录，然后结果集指针移向下一项记录
			 $photo1=$row2["photo1"];//第一张图片的路径
			 $goods_name=$row2["goods_name"];
			 $price=$row2["price"];
			 $goods_id=$row2["goods_id"];
			 echo '<div class="content_items"><a onClick="addClickAccount(';
			 echo $i.')" href="goods_info.php?goods_id=';
			 echo $goods_id.'"><img class="content_items_img" src="../photos/';
			 echo $photo1.'"/></a><br/><span class="content_items_span1">'; 
			 echo $goods_name .'</span><br/><span class="content_items_span2">￥'; 
			 echo $price.'</span><span class="content_items_span3">点击数';
			 echo $row2["clickAccount"].'</span><span style="display:none;" id="content_items_a';
			 echo $i.'">';
			 echo $goods_id.'</span></div>';
		 }
?>
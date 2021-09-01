<?php
  include("conn.php");//包含连接数据库代码页面
  $keyword=$_GET["keyword"];
  $result=$conn->query("select * from sale_goods where goods_name like '%$keyword%' and flag=1 order by goods_id desc");//创建结果集
  $n=$result->num_rows;//记录结果集总记录数
  for($i=0;$i<$n;$i++){
			 $row=$result->fetch_assoc();//读取结果集中的第一行记录，然后结果集指针移向下一项记录
			 $photo1=$row["photo1"];//第一张图片的路径
			 $goods_name=$row["goods_name"];
			 $price=$row["price"];
			 $goods_id=$row["goods_id"];
			 echo '<div class="content_items"><a href="goods_info.php?goods_id=';
			 echo $goods_id.'"><img class="content_items_img" src="../photos/';
			 echo $photo1.'"/></a><br/><span class="content_items_span1">'; 
			 echo $goods_name .'</span><br/><span class="content_items_span2">￥'; 
			 echo $price.'</span></div>';
		 }
?>
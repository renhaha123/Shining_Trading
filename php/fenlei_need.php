<?php 
  error_reporting(7);//只显示严重错误提示
  session_start();//开启SESSION
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  $type_name=$_GET["fenlei"];
  $conn=mysql_connect("localhost","root","");
  mysql_query("set names 'utf8'");
  mysql_select_db("db_ShanLiang",$conn);
  $result2=mysql_query("select * from goods_type where type_name='$type_name'",$conn);//创建结果集
  $row2=mysql_fetch_assoc($result2);//读取结果集中的第一行记录，然后结果集指针移向下一项记录
  $type_id=$row2["type_id"];
  mysql_free_result($result2);
  $sql="select * from need_goods inner join user_info on need_goods.user_id=user_info.user_id where flag=1 and type_id='$type_id'  ";//使用链表查询
  $result1=mysql_query($sql,$conn);//创建结果集
  $n=mysql_num_rows($result1);//记录结果集总记录数
  for($i=0;$i<$n;$i++){
			 $row1=mysql_fetch_assoc($result1);
			 $goods_name=$row1["goods_name"];
			 $price=$row1["price"];
			 $deal_place=$row1["deal_place"];
			 $time=$row1["time"];
			 $description=$row1["description"];
             $username=$row1["username"];
			 $department=$row1["department"];
			 $class=$row1["class"];
			 $telephone=$row1["telephone"];
			 $qq=$row1["qq"];
			 $weixin=$row1["weixin"];
             echo '<div class="need_content_items"> <img src="../images/user_info.jpg" /><ul class="need_content_items_ul1"><li>求购物品:';
			 echo $goods_name.'</li><li>价格：';
			 echo $price.'元</li><li>交易地点：';
             echo $deal_place.'</li><li>上传时间';
			 echo $time.'</li><li>描述:';
			 echo $description.'</li></ul>';
			 echo '<ul class="need_content_items_ul2"><li>买家:';
			 echo $username.'</li><li>院系：';
			 echo $department.'</li><li>班级：';
             echo $class.'</li><li>电话';
			 echo $telephone.'</li><li>QQ:';
			 echo $qq.'</li><li>微信:';
			 echo $weixin.'</li></ul>';
			 echo '</div>';
}
?>
<?php 
  error_reporting(7);//只显示严重错误提示
  session_start();//开启SESSION
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  $conn=mysql_connect("localhost","root","");
  mysql_query("set names 'utf8'");
  mysql_select_db("db_ShanLiang",$conn);
  $goods_id=$_GET["goods_id"];
  $result1=mysql_query("select * from sale_goods where goods_id = '$goods_id'",$conn);//创建商品信息的结果集
  $row1=mysql_fetch_assoc($result1);//读取商品信息结果集中的第一行记录，然后结果集指针移向下一项记录
  $user_id_s=$row1["user_id"];//卖家的用户id
  $user_name_b=$_SESSION["username"];//买家的用户名
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="icon" href="../images/sun.png"/> <!--链接网页标题图标-->
  <link rel="stylesheet" href="../css/style.css" type="text/css"/><!--链接网页css文件-->
  <script src="../javascript/javascript.js" type="text/JavaScript"></script><!--链接网页js文件-->
  <title>商品信息</title>
 </head>
 <body >
   <!--头部区域-->
   <div id="head">
      <div id="head1">
	    <img style="width:50px; height:40px; " src="../images/sun.png"/>
		<span id="span1" style="color:yellow;">闪亮</span>
	  </div>
	  <div id="head2">
	    <ul id="head_ul">
		  <li><a href="index.php">闪亮出售</a></li>
		  <li><a href="need_goods.php"">闪亮求购</a></li>
		  <li><a>关于我们</a></li>
	    </ul>
	  </div>
      <div id="head3">
	    <span style="font-size:16px; color:;">欢迎您:  <a href="user_info.php"> <?php echo $_SESSION["username"]; ?> </a>同学| <a href="../login.html">注销</a> |</span>
	  </div>
   </div>
   <div id="sale_good_content">
     <div id="sale_good_info">
	 <img id="sale_good_info_img" src="../photos/<?php echo $row1["photo1"]?>"/>
	 <ul>
	   <li class="sale_good_info_li1"><img onClick="replaceImg(1)" id="sale_good_info_li1_img1" src="../photos/<?php echo $row1["photo1"]?>" /></li>
	   <li class="sale_good_info_li1"><img onClick="replaceImg(2)" id="sale_good_info_li1_img2" src="../photos/<?php echo $row1["photo2"]?>"/></li>
	   <li class="sale_good_info_li1"><img onClick="replaceImg(3)" id="sale_good_info_li1_img3" src="../photos/<?php echo $row1["photo3"]?>"/></li>
	 </ul>
	 <ul id="sale_good_info_ul">
	   <li>商品编号：<span id="sale_good_info_ul_goods_id"><?php echo $row1["goods_id"]?></span><li>
	   <li><span>商品名称：<?php echo $row1["goods_name"]?></span><li>
	   <li><span>价格：<?php echo $row1["price"]?>元</span><li>
	   <li><span>交易地点：<?php echo $row1["deal_place"]?></span><li>
	   <li><span>上市时间：<?php echo $row1["time"]?></span><li>
	   <li><span>商品描述：<?php echo $row1["description"]?></span><li>
	   <?php
         mysql_free_result($result1);
         $result2=mysql_query("select * from user_info where user_id = '$user_id_s'",$conn);//创建卖家信息的结果集
         $row2=mysql_fetch_assoc($result2);//读取卖家信息结果集中的第一行记录，然后结果集指针移向下一项记录
		 $user_name_s=$row2["username"];//卖家用户名
       ?>
	   <li>卖家：<span id="sale_good_info_u_s_name"><?php echo $row2["username"]?></span><li>
	   <li><span>院系：<?php echo $row2["department"]?></span><li>
       <li><span>专业：<?php echo $row2["class"]?></span><li>
	   <li><span>电话：<?php echo $row2["telephone"]?></span><li>
	   <li><span>QQ：<?php echo $row2["qq"]?></span><li>
	   <li><span>微信：<?php echo $row2["weixin"]?></span><li>
	 </ul>
	 </div>
	 <div id="sale_good_liuyan">
	  <p>留言区</p>
	  <input id="liuyan" type="text" name="" size="100" style="height:30px;" />
      <input type="button" value="留言" style="height:30px; width:80px;" onClick="liuyan()"/>
	  <div id="liuyan_update">
	   <?php 
	     mysql_free_result($result2);
	     $result3=mysql_query("select * from user_info where username='$user_name_b'",$conn);//创建结果集
         $row3=mysql_fetch_assoc($result3);
         $user_id=$row3["user_id"];//查找出买家用户名对应的用户id
	     mysql_free_result($result3);
		 $result4=mysql_query("select * from liuyan where user_id = '$user_id' and goods_id='$goods_id'",$conn);
         while($row4=mysql_fetch_assoc($result4)){
         echo "<p>";
	     echo $user_name_b."留言给";
	     echo $user_name_s.":";
	     echo $row4["content"]."</p>";
        }
	   ?>
	  </div>
	 </div>
   </div>
 </body>
</html>
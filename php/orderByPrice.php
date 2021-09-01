<?php 
  error_reporting(7);//只显示严重错误提示
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
  session_start();//开启SESSION
  $conn=mysql_connect("localhost","root","");
  mysql_query("set names 'utf8'");
  mysql_select_db("db_ShanLiang",$conn);
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
  <title>闪亮二手交易</title>
 </head>
 <body onload="setInterval(autoplayimg,2000)">


   <!--头部区域-->
   <div id="head">
      <div id="head1">
	    <img style="width:50px; height:40px; " src="../images/sun.png"/>
		<span id="span1" style="color:yellow;">闪亮</span>
	  </div>
	  <div id="head2">
	    <ul id="head_ul">
		  <li><a href="index.php">闪亮出售</a></li>
		  <li><a href="need_goods.php">闪亮求购</a></li>
		  <li><a>关于我们</a></li>
	    </ul>
	  </div>
      <div id="head3">
	    <span style="font-size:16px; color:;">欢迎您:  <a href="user_info.php"> <?php echo $_SESSION["username"]; ?> </a>同学| <a href="../login.html">注销</a> |</span>
	  </div>
   </div>

   <!--左边分类区域-->
   <div id="left">
     <ul id="left_ul">
	      <li >商品分类</li>
		  <li><a Onclick="type1(1)" id="left_ul_li1">手机</a></li>
		  <li><a Onclick="type1(2)" id="left_ul_li2">电脑</a></li>
		  <li><a Onclick="type1(3)" id="left_ul_li3">电子数码</a></li>
		  <li><a Onclick="type1(4)" id="left_ul_li4">常用电器</a></li>
		  <li><a Onclick="type1(5)" id="left_ul_li5">衣服鞋帽</a></li>
		  <li><a Onclick="type1(6)" id="left_ul_li6">书籍</a></li>
		  <li><a Onclick="type1(7)" id="left_ul_li7">艺术乐器</a></li>
		  <li><a Onclick="type1(8)" id="left_ul_li8">运动器材</a></li>
		  <li><a Onclick="type1(9)" id="left_ul_li9">其他</a></li>
	    </ul>
   </div>

    <!--轮播图-->
   <div id="ad">
     <img src="../images/ad0.jpg" style="width:1226px;height:px; display:block;"  />
	 <img src="../images/ad1.jpg" style="width:1226px;height:px; display:none;" />
	 <img src="../images/ad2.jpg" style="width:1226px;height:px; display:none;" />
	 <img src="../images/ad3.jpg" style="width:1226px;height:px; display:none;" />
	 <div id="ad_circle">
	   <span style="background-color:yellow;"></span>
	   <span></span>
	   <span></span>
	   <span></span>
	 </div>
   </div>

   <div id="right">
     <ul id="right_ul">
		  
		  <li><a href="../need.html">我要求购</a></li>
		  <li><a href="../sale.html">我要出售</a></li>
		  
	    </ul>
   </div>



   <!--主体内容-->
   <div id="middle">
     <div id="search">
	   
	     <span style="color:#fff;">闪亮快搜</span> <input id="keyword" type="text" name="" size="100" style="color:#fff;height:30px;border:none;padding:0;background:rgba(0,0,0,0.7);" />
         <input type="button" value="搜索" style="height:30px; width:80px;border:none;background:rgba(0,255,255,0.5);color:#fff;border-radius:2px;" onClick="search()"/>
	   
	 </div>
     
	 <div id="content">
	 
	   <?php
	     $result1=mysql_query("select * from sale_goods where flag=1 ",$conn);//创建结果集
         $count=mysql_num_rows($result1);//记录结果集总记录数
		 $pageSize=16;//每页显示的数量
         $pageCount=ceil($count/$pageSize);//总页码数
		 if(isset($_GET["n"]) && $_GET["n"]>0){
             $n=$_GET["n"];//从本页面获取页码
		 }
		 else{
			 $n=1;//页码默认为1
		 }
         mysql_free_result($result1);
         $result2=mysql_query("select * from sale_goods where flag=1 order by price desc limit ".($n-1)*$pageSize.",".$pageSize,$conn);//创建结果集
         $o=mysql_num_rows($result2);//记录结果集总记录数
	     echo '<div id="order">手动排序<a href="orderByTime.php">时间</a><a href="orderByPrice.php">价格</a><a href="orderByName.php">商品名</a></div>';
	     for($i=0;$i<$o;$i++){
			 $row=mysql_fetch_assoc($result2);//读取结果集中的第一行记录，然后结果集指针移向下一项记录
			 $photo1=$row["photo1"];//第一张图片的路径
			 $goods_name=$row["goods_name"];
			 $price=$row["price"];
			 $goods_id=$row["goods_id"];
			 echo '<div class="content_items"><a onClick="addClickAccount(';
			 echo $i.')" href="goods_info.php?goods_id=';
			 echo $goods_id.'"><img class="content_items_img" src="../photos/';
			 echo $photo1.'"/></a><br/><span class="content_items_span1">'; 
			 echo $goods_name .'</span><br/><span class="content_items_span2">￥'; 
			 echo $price.'</span><span class="content_items_span3">点击数';
			 echo $row["clickAccount"].'</span><span style="display:none;" id="content_items_a';
			 echo $i.'">';
			 echo $goods_id.'</span></div>';
		 }
		 mysql_free_result($result2);
		 if($n==1){
		   echo '<div id="yema">上一页&nbsp;&nbsp;';//页码为1，不显示上一页的超链接
		 }
		 else{
           echo '<div id="yema"><a href="?n=';
		   echo ($n-1).'">上一页&nbsp;&nbsp;</a>';
		 }
		 for($i=1;$i<=$pageCount;$i++){
			 if($i==$n){
				 echo '&nbsp;&nbsp;'.$i;//当前页不显示超链接
			 }
			 else{
				 echo '<a href="?n='.$i.'">'.$i.'</a>';
			 }
		 }
		 if($n==$pageCount){
		   echo '&nbsp;&nbsp;下一页';//页码为总页数，不显示下一页的超链接
		 }
         else{
           echo '<a href="?n='.($n+1).'">&nbsp;&nbsp;下一页</a>';
		 }
		 echo '</div>';
	   ?>
	 </div>
	 
   </div>
 </body>
</html>

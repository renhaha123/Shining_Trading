<?php 
  error_reporting(7);//只显示严重错误提示
  session_start();//开启SESSION
  header("Content-Type:text/html;charset=utf-8");//防止弹出提示框的内容为乱码
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
		  <li><a href="">闪亮求购</a></li>
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
		  <?php
		    $result3=mysql_query("select * from goods_type",$conn);//创建结果集
            $j=mysql_num_rows($result3);//记录结果集总记录数
			for($i=1;$i<=$j;$i++){
				$row3=mysql_fetch_assoc($result3);//读取结果集中的第一行记录，然后结果集指针移向下一项记录
				echo '<li><a onClick="type2(';
				echo $i.')" id="left_ul_lin';
				echo $i.'">';
				echo $row3["type_name"].'</a></li>';
			}
           mysql_free_result($result3);
		  ?>
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
		  <li><a href="../need_0.php">我要求购</a></li>
		  <li><a href="../sale_0.php">我要出售</a></li>
	    </ul>
   </div>
    <div id="middle">
     <div id="search">
	     <span style="color:#fff;">闪亮快搜</span> <input id="keyword_n" type="text" name="" size="100" style="color:#fff;height:30px;border:none;padding:0;background:rgba(0,0,0,0.7);" />
         <input type="button" value="搜索" style="height:30px; width:80px;border:none;background:rgba(0,255,255,0.5);color:#fff;border-radius:2px;" onClick="search_need()"/>
	 </div>
   <!--主体内容-->
   <div id="middle">
	 <div id="need_content">
	   <?php
	     $result1=mysql_query("select * from need_goods inner join user_info on need_goods.user_id=user_info.user_id where flag=1 ",$conn);//创建结果集
         $count=mysql_num_rows($result1);//记录结果集总记录数
		 $pageSize=4;//每页显示的数量
         $pageCount=ceil($count/$pageSize);//总页码数
		 if(isset($_GET["n"]) && $_GET["n"]>0){
             $n=$_GET["n"];//从本页面获取页码
		 }
		 else{
			 $n=1;//页码默认为1
		 }
         mysql_free_result($result1);
         $result2=mysql_query("select * from need_goods inner join user_info on need_goods.user_id=user_info.user_id where flag=1 limit ".($n-1)*$pageSize.",".$pageSize,$conn);//创建结果集
         $o=mysql_num_rows($result2);//记录结果集总记录数
	     echo '<div id="order">手动排序<a href="orderByTime_n.php">时间</a><a href="orderByPrice_n.php">价格</a><a href="orderByName_n.php">商品名</a></div>';
	     for($i=0;$i<$o;$i++){
			 $row1=mysql_fetch_assoc($result2);
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
		 if($n==1){
		   echo '<div id="yema_n">上一页';//页码为1，不显示上一页的超链接
		 }
		 else{
           echo '<div id="yema_n"><a href="?n=';
		   echo ($n-1).'">上一页</a>';
		 }
		 for($i=1;$i<=$pageCount;$i++){
			 if($i==$n){
				 echo '&nbsp;'.$i;//当前页不显示超链接
			 }
			 else{
				 echo '<a href="?n='.$i.'">'.$i.'</a>';
			 }
		 }
		 if($n==$pageCount){
		   echo '下一页';//页码为总页数，不显示下一页的超链接
		 }
         else{
           echo '<a href="?n='.($n+1).'">下一页</a>';
		 }
		 echo '</div>';
	   ?>
	 </div>
   </div>
 </body>
</html>
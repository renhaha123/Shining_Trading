<?php 
  session_start();//开启SESSION 
  include("conn.php");//包含连接数据库代码页面
  $username=$_SESSION["username"];
  $result=$conn->query("select * from user_info where username='$username'");//创建结果集
  $row=$result->fetch_assoc();
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
 <body>
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
	    <span style="font-size:16px; color:;">欢迎您:  <a href=""> <?php echo $_SESSION["username"]; ?> </a>同学| <a href="../login.html">注销</a> |</span>
	  </div>
   </div>
 
 <div id="user_info_item1">
   <img src="../images/user_info.jpg"/>
   <ul>
     <li>闪亮用户:<?php echo $_SESSION["username"];?></li>
	 <li>学院：<?php echo $row["department"];?></li>
	 <li>专业：<?php echo $row["class"];?></li>
	 <li>姓名：<?php echo $row["yourname"];?></li>
   </ul>
 </div>

 <div id="user_info_item2">
   <ul id="user_info_item2_ul">
     <li><a onClick="show_user_info()">个人信息</a></li>
	 <li><a onClick="show_mySaleGoods()">我出售的商品</a></li>
	 <li><a onClick="show_myNeedGoods()">我求购的商品</a></li>
	 <li><a onClick="show_myLiuyan()">我的留言</a></li>
	
   </ul>
   <div id="user_info_item2_content">
     
   </div>
 </div>

</body>
</html>
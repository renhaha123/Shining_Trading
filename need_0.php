<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="icon" href="images/sun.png"/> <!--链接网页标题图标-->
  <link rel="stylesheet" href="css/style.css" type="text/css"/><!--链接网页css文件-->
  <script src="javascript/javascript.js" type="text/JavaScript"></script><!--链接网页js文件-->
  <title>闪亮二手交易</title>
  <!--设置背景图片-->
  <style>
  body{
    background-image:url(images/needbg.jpg);
  }
  </style>

 </head>
 <body>
  
  <div id="head">
      <div id="head1">
	    <img style="width:50px; height:40px; " src="images/sun.png"/>
		<span id="span1" style="color:yellow;">闪亮</span>
	  </div>
	  <div id="head2">
	    <ul id="head_ul">
		   <ul id="head_ul">
		  <li><a href="php/index.php">闪亮出售</a></li>
		  <li><a href="php/need_goods.php">闪亮求购</a></li>
		  <li><a>关于我们</a></li>
	    </ul>
	    </ul>
	  </div>
      
   </div>
   <div id="need">
   <form id="need_form" action="php/need.php" method="post"  onsubmit="return checkInfoNeed()"><!--若出现错误，可返回false给onsubmit事件，阻止表单提交-->
	    <table cellpadding="30px" cellspacing="30px">
		<tr><td><p align="center" style="font-size:25px;">求购商品</p></td></tr>
		<tr><td>商品名称：<input type="text"  size="50" name="goods_name_n" id="goods_name_n"/></td></tr>
		<tr><td>商品类型：<select name="goods_type">
		<?php
		     include("php/conn.php");//包含连接数据库代码页面
			 $result=$conn->query("select * from goods_type");//创建结果集
			 $n=$result->num_rows;//记录结果集总记录数  
			 for($i=1;$i<=$n;$i++){
			   $row=$result->fetch_assoc();
               echo '<option value="';
			   echo $row["type_id"].'">';
			   echo $row["type_name"].'</option>';
			 }
		  ?>
		  
		</select></td></tr>
		<tr><td>期望价格：<input  type="text" name="price_n" size="50"  id="price_n"/></td></tr>
		<tr><td>交易地点：<input  type="text" name="place_n" size="50" id="place_n" /></td></tr>
		<tr><td>商品描述：<textarea  name="description_n"  rows="5" cols="53" id="description_n"/></textarea></td></tr>
		<tr><td><input  type="submit" value="提交" style="width:100px;height:30px;"/></td></tr>
		</table>
	  </form>
   </div>
 </body>
</html>

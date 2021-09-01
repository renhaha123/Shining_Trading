<?php 
header("Content-Type:text/html;charset=utf-8"); 
?>
<html>
<head>
<title>欢迎注册闪亮二手交易</title>
<link rel="icon" href="../images/sun.png"/> <!--链接网页标题图标-->
<script src="../javascript/javascript.js" type="text/JavaScript" ></script><!--链接网页js文件-->
<!--设置背景图片-->
  <style>
  body{
    background-image:url(../images/loginbg.jpg);
  }
  </style>
</head>
<body onload="createKey()">
    <div style="border:1px solid white;position:absolute;top:100px;left:785px;width:420px;height:350px;" >
	  <form action="" method="post" onsubmit="return checkInfo()"><!--若出现错误，可返回false给onsubmit事件，阻止表单提交-->
	    <table cellpadding="0px" cellspacing="20px" style="color:white;font-size:20px;">
		<tr><td><p style="color:white;font-size:20px;";>欢迎注册闪亮账号</p></td></tr>
		<tr><td></td></tr>
		<tr><td>用户名：<input  type="text" name="username" id="un"/></td></tr>
		<tr><td>密&nbsp;&nbsp;码：<input type="password" name="pw" id="pw" /></td></tr>
		<tr><td>密保问题1：您喜爱的运动  <select name="sport">
		<option value="跑步">跑步</option>
		<option value="游泳">游泳</option>
		<option value="跳绳">跳绳</option>
		<option value="打篮球">打篮球</option>
		<option value="踢足球">踢足球</option>
		</select></td></tr>
		<tr><td>密保问题2：您喜爱的水果  <select name="fruit">
		<option value="苹果">苹果</option>
		<option value="香蕉">香蕉</option>
		<option value="菠萝">菠萝</option>
		<option value="葡萄">葡萄</option>
		<option value="樱桃">樱桃</option>
		</td></tr>
		<tr><td>验证码：<input type="text" name="yanzheng" id="yz"/><span id="selectKey" onClick="createKey()"></span></td></tr>
		<tr><td align="center"><input type="submit" value="注册" style="width:120px;height:40px;" /></td></tr>
		</table>
	  </form>
	</div>
	<div  style="color:white;
  font-size:25px;
  position:absolute;
  top:100px;
  right:200px;
  width:420px;
  height:340px;">
	<p >[闪 亮 因 你 而 亮]</p>
	<img src="../images/log_img.jpg" style="width:245px;height:220px;"/>
	</div>
 </body>
</html>
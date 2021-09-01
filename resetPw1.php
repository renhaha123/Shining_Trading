<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>重置密码</title>
  <link rel="icon" href="images/sun.png"/> <!--链接网页标题图标-->
  <script src="javascript/javascript.js" type="text/JavaScript"></script><!--链接网页js文件-->
  <link rel="stylesheet" href="css/style.css" type="text/css"/><!--链接网页css文件-->
   <!--设置背景图片-->
  <style>
  body{
    background-image:url(images/resetPwbg.jpg);
  }
  </style>

 </head>
 <body onload="createKey()">
  <div id="resetPwdiv1" style="width:450px;height:400px;" >
	<form action="php/resetPw1.php" method="post" onsubmit="return checkInfoReset1()">
	    <table cellpadding="30px" cellspacing="20px">
		<tr><td align="center">重置密码</td></tr>
        <tr><td>电 &nbsp;&nbsp;话：&nbsp;&nbsp;&nbsp; <span id="tel"><?php echo $_GET["tel"];?></span></td></tr>
		<tr><td>短 信 验 证：<input type="text" id="mg" name="mg"/><input type="button" value="获取短信验证码" onClick="getMg()"/><div id="mgYanzheng" style="display:none;"></div></td></tr>
		<tr><td>新 &nbsp;&nbsp;密 &nbsp;&nbsp;&nbsp;码:&nbsp; <input id="pw1" type="password" name="pw1"/></td></tr>
		<tr><td>确认新密码:&nbsp;&nbsp;<input id="pw2" type="password" name="pw2"/></td></tr>
		<tr><td>验 &nbsp;&nbsp;证 &nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;<input type="text" name="yanzheng" id="yzReset1"/><span id="selectKey" onClick="createKey()"></span></td></tr>
		<tr><td><input  type="submit" value="确定" style="width:120px;height:40px;" /></td></tr>
		</table>
	  </form>
	</div>
	
 </body>
</html>
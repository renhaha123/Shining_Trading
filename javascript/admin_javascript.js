/*管理员登录页面js开始*/
/*检查用户输入的各项信息是否为空*/
function checkInfoLog(){
	var username=document.getElementById("un");
	var password=document.getElementById("pw");
	if(username.value==""){
		alert("用户名不能为空！");
		return false;
	}
	else if(password.value==""){
		alert("密码不能为空！");
		return false;
	    }
}
/*管理员登录页面js结束*/
/*管理员主页js开始*/
function show_admin(){
	var content=document.getElementById("content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_admin.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function checkInfo(){
	var pw=document.getElementById("pw");
	var pw1=document.getElementById("pw1");
	var pw2=document.getElementById("pw2");
	if(pw.value==""){
		alert("原密码不能为空！");
		return false;
	}
	else if(pw1.value==""){
		alert("新密码不能为空！");
		return false;
	     }
   else if(pw2.value==""){
		alert("确认新密码不能为空！");
		return false;
	    }
  else if(pw1.value!=pw2.value){
		alert("两次的新密码不一样！");
		return false;
	    }
  else if(pw.value==pw2.value){
		alert("新密码和原密码不能一样！");
		return false;
	    }
}
function show_userInfo(){
	var content=document.getElementById("content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_userInfo.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function alterUserInfo(m){
	var content=document.getElementById("content");
	var user_id=document.getElementById("user_id"+m);
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/alterUserInfo.php?user_id="+user_id.innerHTML,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function checkInfoUser(){
	var resetPw1=document.getElementById("resetPw1");
	var resetPw2=document.getElementById("resetPw2");
	var telephone=document.getElementById("telephone");
	if(telephone.value==""){
		alert("电话不能为空！");
		return false;
	}
	else if(resetPw1.value!=resetPw2.value){
		alert("两次的密码不一样！");
		return false;
	     }
}
function show_goods_type(){
	var content=document.getElementById("content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_goods_type.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function alterGoodsType(m){
	var content=document.getElementById("content");
	var type_id=document.getElementById("type_id"+m);
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/alterGoodsType.php?type_id="+type_id.innerHTML,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function addNewGoodsType(){
    var content=document.getElementById("content");
	
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/addNewGoodsType.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function show_saleGoods(){
    var content=document.getElementById("content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_saleGoods.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function show_needGoods(){
    var content=document.getElementById("content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_needGoods.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function dropNeedGoods(m){
  var content=document.getElementById("content");
	var dropNeedGoods=document.getElementById("dropNeedGoods"+m);
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
             content.innerHTML=xmlhttp.responseText;  
		}
	}
	xmlhttp.open("GET","php/dropNeedGoods1.php?goods_id="+dropNeedGoods.innerHTML,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function dropSaleGoods(m){
  var content=document.getElementById("content");
	var dropSaleGoods=document.getElementById("dropSaleGoods"+m);
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/dropSaleGoods1.php?goods_id="+dropSaleGoods.innerHTML,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
/*管理员主页js结束*/
/*登录页面js代码开始*/
/*验证码js实现*/
function createKey(){
  var selectKey="";//定义验证码
  var keyLength=5;//定义验证码长度
  var keys=new Array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');//创建验证码字符数组
  for(var i=0;i<keyLength;i++){
	  var index=Math.floor(Math.random()*36);//随机产生0-35的整数
	  selectKey=selectKey+keys[index];
  }
  var sk=document.getElementById("selectKey");
  sk.style.color="#f00";
  sk.style.fontFamily="Microsoft YaHei";
  sk.innerHTML=selectKey;
}
/*检查用户输入的各项信息是否为空*/
function checkInfo(){
	var username=document.getElementById("un");
	var password=document.getElementById("pw");
	var yanzheng=document.getElementById("yz");
	var sk=document.getElementById("selectKey");
	if(username.value==""){
		alert("用户名不能为空！");
		return false;
	}
	else if(password.value==""){
		alert("密码不能为空！");
		return false;
	     }
   else if(yanzheng.value==""){
		alert("验证码不能为空！");
		return false;
	    }
	else if(yanzheng.value!=sk.innerHTML){
		alert("验证码错误！");
		return false;
	    }
}
/*登录页面js代码结束*/
/*注册页面js代码开始*/
function checkInfoReg(){
	var username=document.getElementById("unReg");
	var password=document.getElementById("pwReg");
	var department=document.getElementById("department");
	var classes=document.getElementById("classReg");
	var xingming=document.getElementById("xingming");
	var telephone=document.getElementById("telephone");
	var yanzheng=document.getElementById("yzReg");
	var sk=document.getElementById("selectKey");
	if(username.value==""){
		alert("用户名不能为空！");
		return false; 
	}
	else if(password.value==""){
		alert("密码不能为空！");
		return false;
	     }
	else if(department.value==""){
		alert("院系不能为空！");
		return false;
	     }
	else if(classes.value==""){
		alert("班级不能为空！");
		return false;
	     }
	else if(xingming.value==""){
		alert("姓名不能为空！");
		return false;
	     }
	else if(telephone.value==""){
		alert("电话不能为空！");
		return false;
	     }
   else if(yanzheng.value==""){
		alert("验证码不能为空！");
		return false;
	    }
	else if(yanzheng.value!=sk.innerHTML){
		alert("验证码错误！");
		return false;
	    }
}
/*注册页面js代码结束*/
/*找回密码页面js代码开始*/
function checkInfoReset(){
	var username=document.getElementById("un");
	var yanzheng=document.getElementById("yzReset");
	var sk=document.getElementById("selectKey");
	var mg=document.getElementById("mg");
	if(username.value==""){
		alert("用户名不能为空！");
		return false;
	}
    else if(yanzheng.value==""){
		alert("验证码不能为空！");
		return false;
	    }
	else if(yanzheng.value!=sk.innerHTML){
		alert("验证码错误！");
		return false;
	    }
}
function checkInfoReset1(){
	var mg=document.getElementById("mg");
	var pw1=document.getElementById("pw1");
	var pw2=document.getElementById("pw2");
	var yanzheng=document.getElementById("yzReset1");
	var sk=document.getElementById("selectKey");
	var mgYanzheng=document.getElementById("mgYanzheng");
	if(mg.value==""){
		alert("短息验证码不能为空！");
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
	else if(yanzheng.value==""){
		alert("验证码不能为空！");
		return false;
	    }
	else if(yanzheng.value!=sk.innerHTML){ 
		alert("验证码错误！");
		return false;
	    }
	else if(pw1.value!=pw2.value){ 
		alert("两次密码不一样！");
		return false;
	    }
   else if(mg.value!=mgYanzheng.innerHTML){ 
		alert("短信验证码错误！");
		return false;
	    }
}
function getMg(){
	var tel=document.getElementById("tel");
	var mgYanzheng=document.getElementById("mgYanzheng");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               mgYanzheng.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","sendMessage.php?tel="+tel.innerHTML,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
/*找回密码页面js代码结束*/
/*主页js代码开始*/
/*自动轮播图函数*/
var index=0;//初始播放的图片
function autoplayimg(){
  var ad=document.getElementById("ad");
  var adimg=ad.getElementsByTagName("img");
  var ad_circle=document.getElementById("ad_circle");
  var adspan=ad_circle.getElementsByTagName("span");
  if(index>3){
	  for(var i=0;i<index;i++){//重置之前的样式
       adimg[i].style.display="none"; 
       adspan[i].style.backgroundColor="white";
	}
	  index=0;
      adimg[index].style.display="block"; 
      adspan[index].style.backgroundColor="yellow";
      index++;
  }
  else{
    for(var i=0;i<index;i++){//重置之前的样式
       adimg[i].style.display="none"; 
       adspan[i].style.backgroundColor="white";
	} 
	adimg[index].style.display="block"; 
    adspan[index].style.backgroundColor="yellow";
    index++;
  }
}
/*搜索框的js代码*/
function search(){
	var keyword=document.getElementById("keyword");

	if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
			
             var content=document.getElementById("content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/search.php?keyword="+keyword.value,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
/*左部分类查询的js代码*/
function type1(n){
	var li=document.getElementById("left_ul_li"+n);
    
	if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
			
             var content=document.getElementById("content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/fenlei.php?fenlei="+li.innerHTML,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
//手动排序js代码
function orderByTime(){
	 if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
             var content=document.getElementById("content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/orderByTime.php?",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function orderByPrice(){
	 if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
             var content=document.getElementById("content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/orderByPrice.php?",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function orderByName(){
	 if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
             var content=document.getElementById("content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/orderByName.php?",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
//点击数的统计
function addClickAccount(m){
  var content_items_a=document.getElementById("content_items_a"+m);
  if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
  else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
  xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
		}
	}
  xmlhttp.open("GET","../php/addClickAccount.php?goods_id="+content_items_a.innerHTML,true);//请求的类型、URL 以及异步处理请求
  xmlhttp.send();
}
/*主页js代码结束*/
/*求购主页js代码开始*/
/*搜索框的js代码*/
function search_need(){
	var keyword=document.getElementById("keyword_n");
	if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
             var content=document.getElementById("need_content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/search_need.php?keyword="+keyword.value,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
/*左部分类查询的js代码*/
function type2(n){
	var li=document.getElementById("left_ul_lin"+n);
	if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
             var content=document.getElementById("need_content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/fenlei_need.php?fenlei="+li.innerHTML,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
//手动排序js代码
function orderByTime_n(){
	 if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
             var content=document.getElementById("need_content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/orderByTime_n.php?",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function orderByPrice_n(){
	 if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
             var content=document.getElementById("need_content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/orderByPrice_n.php?",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function orderByName_n(){
	 if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
             var content=document.getElementById("need_content");
			 content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/orderByName_n.php?",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
/*求购主页js代码结束*/
/*出售商品js代码开始*/
function checkInfoSale(){
    var goods_name=document.getElementById("goods_name_s");
	var price=document.getElementById("price_s");
	var place=document.getElementById("place");
	var description=document.getElementById("description");
	var photo1=document.getElementById("photo1");
	if(goods_name.value==""){
		alert("商品名称不能为空！");
		return false;
	}
    else if(price.value==""){
		alert("出售价格不能为空！");
		return false;
	    }
   else if(place.value==""){
		alert("交易地点不能为空！");
		return false;
	    }
	else if(description.value==""){
		alert("商品描述不能为空！");
		return false;
	    }
	else if(photo1.value==""){
		alert("商品图片1不能为空！");
		return false;
	    }
}
/*出售商品js代码开始*/
//发布商品js代码开始
function checkInfoNeed(){
    var goods_name=document.getElementById("goods_name_n");
	var price=document.getElementById("price_n");
	var place=document.getElementById("place_n");
	var description=document.getElementById("description_n");
	if(goods_name.value==""){
		alert("商品名称不能为空！");
		return false;
	}
    else if(price.value==""){
		alert("出售价格不能为空！");
		return false;
	    }
   else if(place.value==""){
		alert("交易地点不能为空！");
		return false;
	    }
	else if(description.value==""){
		alert("商品描述不能为空！");
		return false;
	    }
}
//发布商品js代码结束
//商品信息js代码开始
function replaceImg(n){
  var img=document.getElementById("sale_good_info_li1_img"+n);
  var sale_good_info_img=document.getElementById("sale_good_info_img");
  sale_good_info_img.src=img.src;
}
function liuyan(){
	var liuyan=document.getElementById("liuyan");
	var goods_id=document.getElementById("sale_good_info_ul_goods_id");
	var s_name=document.getElementById("sale_good_info_u_s_name");
	if(liuyan.value==""){
		return;
	}
    var liuyan_update=document.getElementById("liuyan_update");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               liuyan_update.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/liuyan.php?liuyan="+liuyan.value+"&goods_id="+goods_id.innerHTML+"&s_name="+s_name.innerHTML,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
//商品信息js代码结束
//用户个人信息页面js代码开始
function show_user_info(){
	var user_info_item2_content=document.getElementById("user_info_item2_content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               user_info_item2_content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/show_user_info.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function show_mySaleGoods(){
	var user_info_item2_content=document.getElementById("user_info_item2_content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               user_info_item2_content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/show_mySaleGoods.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function show_myNeedGoods(){
	var user_info_item2_content=document.getElementById("user_info_item2_content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               user_info_item2_content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/show_myNeedGoods.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function show_myLiuyan(){
	var user_info_item2_content=document.getElementById("user_info_item2_content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               user_info_item2_content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/show_myLiuyan.php",true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function show_myLiuyan1(m){
	var goods_id=m;
	var user_info_item2_content=document.getElementById("user_info_item2_content");
    if(window.XMLHttpRequest){//检查浏览器是否支持XMLHttpRequest对象
		var xmlhttp=new XMLHttpRequest();
	}
	else{//不支持就创建ActiveXObject对象
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState改变时就触发onreadystatechange事件
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//请求已完成且响应已就绪
               user_info_item2_content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","../php/show_myLiuyan1.php?goods_id="+goods_id,true);//请求的类型、URL 以及异步处理请求
	xmlhttp.send();
}
function yichu_need_check(m){
	var goods_id=document.getElementById("user_info_item2_content_goodsId_n"+m);
	if(confirm("确认移除该求购商品吗？")){
		location.href='../php/yichu_need.php?goods_id='+goods_id.innerHTML;
	}
	else{
		return; 
	}
}
function xiajia_need_check(m){
	var goods_id=document.getElementById("user_info_item2_content_goodsId_n"+m);
	if(confirm("确认下架该求购商品吗？")){
		location.href='../php/xiajia_need.php?goods_id='+goods_id.innerHTML;
	}
	else{
		return;
	}
}
function shangjia_need_check(m){
	var goods_id=document.getElementById("user_info_item2_content_goodsId_n"+m);
	if(confirm("确认上架该求购商品吗？")){
		location.href='../php/shangjia_need.php?goods_id='+goods_id.innerHTML;
	}
	else{
		return;
	}
}
function yichu_sale_check(m){
	var goods_id=document.getElementById("user_info_item2_content_goodsId_s"+m);
	if(confirm("确认移除该出售商品吗？")){
		location.href='../php/yichu.php?goods_id='+goods_id.innerHTML;
	}
	else{
		return;
	}
}
function xiajia_sale_check(m){
	var goods_id=document.getElementById("user_info_item2_content_goodsId_s"+m);
	if(confirm("确认下架该出售商品吗？")){
		location.href='../php/xiajia.php?goods_id='+goods_id.innerHTML;
	}
	else{
		return;
	}
}
function shangjia_sale_check(m){
	var goods_id=document.getElementById("user_info_item2_content_goodsId_s"+m);
	if(confirm("确认上架该出售商品吗？")){
		location.href='../php/shangjia.php?goods_id='+goods_id.innerHTML;
	}
	else{
		return;
	}
}
//用户个人信息页面js代码结束




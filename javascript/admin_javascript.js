/*����Ա��¼ҳ��js��ʼ*/
/*����û�����ĸ�����Ϣ�Ƿ�Ϊ��*/
function checkInfoLog(){
	var username=document.getElementById("un");
	var password=document.getElementById("pw");
	if(username.value==""){
		alert("�û�������Ϊ�գ�");
		return false;
	}
	else if(password.value==""){
		alert("���벻��Ϊ�գ�");
		return false;
	    }
}
/*����Ա��¼ҳ��js����*/
/*����Ա��ҳjs��ʼ*/
function show_admin(){
	var content=document.getElementById("content");
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_admin.php",true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
function checkInfo(){
	var pw=document.getElementById("pw");
	var pw1=document.getElementById("pw1");
	var pw2=document.getElementById("pw2");
	if(pw.value==""){
		alert("ԭ���벻��Ϊ�գ�");
		return false;
	}
	else if(pw1.value==""){
		alert("�����벻��Ϊ�գ�");
		return false;
	     }
   else if(pw2.value==""){
		alert("ȷ�������벻��Ϊ�գ�");
		return false;
	    }
  else if(pw1.value!=pw2.value){
		alert("���ε������벻һ����");
		return false;
	    }
  else if(pw.value==pw2.value){
		alert("�������ԭ���벻��һ����");
		return false;
	    }
}
function show_userInfo(){
	var content=document.getElementById("content");
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_userInfo.php",true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
function alterUserInfo(m){
	var content=document.getElementById("content");
	var user_id=document.getElementById("user_id"+m);
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/alterUserInfo.php?user_id="+user_id.innerHTML,true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
function checkInfoUser(){
	var resetPw1=document.getElementById("resetPw1");
	var resetPw2=document.getElementById("resetPw2");
	var telephone=document.getElementById("telephone");
	if(telephone.value==""){
		alert("�绰����Ϊ�գ�");
		return false;
	}
	else if(resetPw1.value!=resetPw2.value){
		alert("���ε����벻һ����");
		return false;
	     }
}
function show_goods_type(){
	var content=document.getElementById("content");
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_goods_type.php",true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
function alterGoodsType(m){
	var content=document.getElementById("content");
	var type_id=document.getElementById("type_id"+m);
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/alterGoodsType.php?type_id="+type_id.innerHTML,true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
function addNewGoodsType(){
    var content=document.getElementById("content");
	
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/addNewGoodsType.php",true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
function show_saleGoods(){
    var content=document.getElementById("content");
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_saleGoods.php",true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
function show_needGoods(){
    var content=document.getElementById("content");
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/show_needGoods.php",true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
function dropNeedGoods(m){
  var content=document.getElementById("content");
	var dropNeedGoods=document.getElementById("dropNeedGoods"+m);
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
             content.innerHTML=xmlhttp.responseText;  
		}
	}
	xmlhttp.open("GET","php/dropNeedGoods1.php?goods_id="+dropNeedGoods.innerHTML,true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
function dropSaleGoods(m){
  var content=document.getElementById("content");
	var dropSaleGoods=document.getElementById("dropSaleGoods"+m);
    if(window.XMLHttpRequest){//���������Ƿ�֧��XMLHttpRequest����
		var xmlhttp=new XMLHttpRequest();
	}
	else{//��֧�־ʹ���ActiveXObject����
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){//readyState�ı�ʱ�ʹ���onreadystatechange�¼�
		if(xmlhttp.readyState==4 && xmlhttp.status==200){//�������������Ӧ�Ѿ���
               content.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","php/dropSaleGoods1.php?goods_id="+dropSaleGoods.innerHTML,true);//��������͡�URL �Լ��첽��������
	xmlhttp.send();
}
/*����Ա��ҳjs����*/
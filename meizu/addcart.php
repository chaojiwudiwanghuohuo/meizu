<?php 
    header("Content-type:text/html;charset=utf-8");
    //接受数据
	$goodsImg =$_GET['goodsImg'];
	$phoneName=$_GET['phoneName'];
	$phoneDec=$_GET['phoneDec'];
	$money=$_GET['money'];
	//创建连接对象
	$conn=mysql_connect("localhost","root","root");
	
	//选择数据库
	mysql_select_db("cart");
	//操作数据库
	//mysql_query("insert into meizu values(phone)",$conn);
	// 查询
	$result = mysql_query("select * from goods where goodsName='$phoneName'",$conn);
	$num = mysql_num_rows($result);
	if($num=="1"){
		echo "1";
	}
	else{
		mysql_query("insert into goods(goodsImg,goodsName,goodsDec,money)values('$goodsImg','$phoneName','$phoneDec','$money')",$conn);
		echo "0";
	}
	mysql_close($conn);
?> 
<?php
    
	$phoneNumber =$_POST['phoneNumber'];
	//创建连接对象
	$conn=mysql_connect("localhost","root","root");
	
	
	
	//选择数据库
	mysql_select_db("meizu");
	
	
	//操作数据库
	//mysql_query("insert into meizu values(phone)",$conn);
	// 查询
	$result = mysql_query("select * from phonenumber where phone='$phoneNumber'",$conn);
	$num = mysql_num_rows($result);
	if($num=="1"){
		echo "1";
	}else{
		mysql_query("insert into phonenumber (phone) values('$phoneNumber')",$conn);
		echo "0";
	}
	mysql_close($conn);
?>
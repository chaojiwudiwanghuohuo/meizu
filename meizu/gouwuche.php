<?php 
    header("content-Type: text/html; charset=utf-8");//字符编码设置 
    // 创建连接
    $conn = mysqli_connect("localhost","root","root","cart");

    // 检测连接 
    if (mysqli_connect_errno()){ 
		echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    } 
    
    $sql = "SELECT * FROM goods"; 
    $result = mysqli_query($conn,$sql); 
    
    $arr = array(); 
    while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){ 
		$count=count($row);//不能在循环语句中，由于每次删除 row数组长度都减小 
		for($i=0;$i<$count;$i++){ 
		unset($row[$i]);//删除冗余数据 
		}
		array_push($arr,$row);
    } 
    echo json_encode($arr,JSON_UNESCAPED_UNICODE); 
    mysqli_close($conn);
?>

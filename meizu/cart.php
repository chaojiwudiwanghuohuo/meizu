<?php
    //1. 连接数据库
    $conn = mysqli_connect("localhost", "root", "root", "cart");
    //　2. 执行 MySql 语句查询数据表
    $sql ="SELECT * FROM goods";
    $result = mysqli_query($conn,$sql);
    $i = 0 ;
    $output = [] ;
    //3. 使用 while 循环
    //在 while 的循环条件里使用了 mysql_fetch_assoc($result) 函数，它会在 $result 结果集里循环取出每一行的值，直到最后值取完，返回 false ，while 循环也就结束了；
    //在 while 的循环外部使用 $output[$i] = $row 来保存当前获取到的 json 数组 ；
    while( $row = mysqli_fetch_assoc($result)){
        $output[$i] = $row;
        $i++ ;
    }
    echo json_encode($output);
    mysqli_close($conn);
?>
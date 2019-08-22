<!index html>
<html>
<head>
<meta charset="utf-8">
<title>新时代房产租房管理系统</title>
</head>
<body>

<div id="header" style="background-color:#E0EEE0;">
<h1>新时代房产租房管理系统 v1.0</h1>
</div>

<div id="menu" style="background-color:#E0FFFF;width:100px;float:left;font-size:20px;">
<a href=all.html>所有租房<a><br/><br/>
<a href=add.html>新增租房<a><br/><br/>
</div>

<div id="" style="text-align:center;font-size:20px;">
<form name="input" action="" method="post"> 
查询N日内要收租的房子：<input type="text" name="days">
<input type="submit" value="查询">
</form>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tsuvaon";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password,$dbname);
 
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM rentLog";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - 地址: " . $row["address"]."<br>";
    }
} else {
    echo "0 结果";
}

?>



</body>
</html>
<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../admin/config.php"); ?>
<?php if(file_exists($configRootDir."admin/.initlock")) header("Location: ".$_SERVER['HTTP_REFERER']); ?>
		<title>初始化世界管理者数据中……</title>
	</head>
	<body>
<?php
	if(!file_exists($configRootDir."admin/.initlock")){
		echo "重连接至世界……<br/>\n";
		require_once($configRootDir."admin/databaseInfo.php");
		echo "开始向世界提交管理者数据……<br/>\n";
		$sql = "INSERT INTO user (username, password, nickname, admin) VALUES ('".$_POST['adminUsername']."', '".hash("sha256", $_POST['adminPassword'])."', '世界管理者', '1');";
		mysqli_query($conn, $sql);
		echo "开始制作初始化终结标记……<br/>\n";
		$fileInitLock = fopen($configRootDir."admin/.initlock", "w");
		fwrite($fileInitLock, "樱花落下的速度是每秒五厘米");
		fclose($fileInitLock);
		echo "<button onclick=\"window.location.href='/admin/init.php'\">返回</button>";
	}
?>
	</body>
</html>
<!DOCTYPE HTML>
<html>
	<head>
		<?php if(file_exists("../../admin/.initlock")) header("Location: ".$_SERVER['HTTP_REFERER']); ?>
		<title>请求初始化中……</title>
	</head>
	<body>
<?php if(!file_exists("../../admin/config.php")) header("Location: /admin/actionGetRootDir.php"); ?>
<?php require_once("../../admin/config.php"); ?>
<?php
	if(!file_exists($configRootDir."admin/databaseInfo.php")){
		echo "<form action=\"getDatabaseInfo.php\" method=\"POST\">\n";
		echo "	<h3>请求初始化世界数据……</h3>\n";
		echo "	数据库地址：　<input name=\"databaseAddress\" value=\"localhost\"/><br/>\n";
		echo "	数据库名：　　<input name=\"databaseName\" value=\"sashimi\"/><br/>\n";
		echo "	数据库用户名：<input name=\"databaseUsername\" value=\"root\"/><br/>\n";
		echo "	数据库密码：　<input type=\"password\" name=\"databasePassword\"/><br/>\n";
		echo "	<input type=\"submit\" value=\"开始初始化\"/>";
		echo "</form>\n";
	}else{
		echo "<form action=\"getAdmin.php\" method=\"POST\">\n";
		echo "	<h3>请求初始化世界管理者……</h3>\n";
		echo "	管理者用户名：<input name=\"adminUsername\" value=\"admin\"/><br/>\n";
		echo "	管理者密码：　<input type=\"password\" name=\"adminPassword\"/><br/>\n";
		echo "	用户名不要小于3个字符，大于64个字符；密码不要小于6个字符，大于64个字符。否则一旦初始化，您将无法再进入管理员账号。<br/>\n";
		echo "	<input type=\"submit\" value=\"开始初始化\"/>\n";
		echo "</form>\n";
	}
?>
	</body>
</html>

<?php
	unlink("../admin/.initlock");
	echo "Removed file /../admin/.initlock<br/>";
	unlink("../admin/config.php");
	echo "Removed file /../admin/config.php<br/>";
	unlink("../admin/databaseInfo.php");
	echo "Removed file /../admin/databaseInfo.php<br/>";
	echo "Now you may reinstall sashimi project.<br/>";

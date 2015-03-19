<?php

	require 'database_connection.php';

	header(MY_HEADER);

	$blog_title = addslashes($_REQUEST['blog_title']);
	$blog_text = addslashes($_REQUEST['blog_text']);
	$blog_ID = $_REQUEST['_ID'];
	$tableName = MY_TABLE_NAME;

	$date = date_create();
	$_timeStamp = date_format($date, 'Y-m-d H:i:s');

	$sql = "UPDATE $tableName SET `title`='{$blog_title}',`content`='{$blog_text}', `timestamp` = '{$_timeStamp}' WHERE id = {$blog_ID}";

	$conn->query($sql);
	$conn->close();

?>
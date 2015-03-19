<?php

	require 'database_connection.php';

	header(MY_HEADER);

	$blog_title = $_REQUEST['blog_title'];
	$blog_text = $_REQUEST['blog_text'];
	$blog_date = date("m/d/y");
	$table = MY_TABLE_NAME;

	$date = date_create();
	$_timeStamp = date_format($date, 'Y-m-d H:i:s');

	$sql = "INSERT INTO $table (title, public_date, content, timestamp)
	VALUES ('$blog_title', '$blog_date', '$blog_text', '$_timeStamp')";
	$conn->query($sql);
	$conn->close();	

?>
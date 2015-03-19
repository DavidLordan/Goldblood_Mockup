<?php
	
	require 'database_connection.php';

	header(MY_HEADER);

	$blog_title = $_REQUEST['delete_ID'];
	$sql = "DELETE FROM " . MY_TABLE_NAME . " WHERE id=" . $blog_title;

	$conn->query($sql);
	$conn->close();	

?>
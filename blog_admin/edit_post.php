<?php

require 'scripts/database_connection.php';
include 'scripts/functions.php';

	$blog_ID = $_REQUEST['_ID'];
	$sql = "SELECT * FROM " . MY_TABLE_NAME . " WHERE id=" . $blog_ID;
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	$tempTitle = htmlspecialchars($row['title'],ENT_QUOTES);
	$tempText = htmlspecialchars($row['content'],ENT_QUOTES);

echo "<html>
	<head>
	</head>
	<body>
		<h1>Test blog!</h1>
		<form action='scripts/push_edit.php' method='POST'>
			<fieldset>
					<legend>Edit blog post:</legend>
					Title: <input type='text' id='blog_title' name='blog_title' value='$tempTitle'><br>
					<textarea id='blog_text' name='blog_text' cols='65' rows='8'>$tempText</textarea>
			</fieldset>
			<br>
			<fieldset class='center'>
					<input type='hidden' id='_ID' name='_ID' value='$blog_ID'>
					<input type='submit' value='Save Changes'/>
					<input type='reset' value='Restart'/>
			</fieldset>
		</form>";

showList();

echo "</body></html>";


?>
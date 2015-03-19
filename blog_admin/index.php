<?php

include 'scripts/functions.php';

echo "<html>
	<head>
	</head>
	<body>
		<h1>Test blog!</h1>
		<form action='scripts/new_entry.php' method='POST'>
			<fieldset>
					<legend>Write a new blog post:</legend>
					Title: <input type='text' id='blog_title' name='blog_title'><br>
					<textarea id='blog_text' name='blog_text' cols='65' rows='8'></textarea>
			</fieldset>
			<br>
			<fieldset class='center'>
					<input type='submit' value='Post'/>
					<input type='reset' value='Clear and Restart'/>
			</fieldset>
		</form>";

	showList();

	echo "</body></html>";

?>


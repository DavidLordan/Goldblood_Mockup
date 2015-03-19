<?php
require 'database_connection.php';

function showList(){

	global $conn;
	$sql = "SELECT * FROM `test_blog_table` WHERE 1 ORDER BY `test_blog_table`.`ID` DESC";

	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
  	  // output data of each row
    	while($row = $result->fetch_assoc()) {
    		echo "<div class='blog_entry' style='border-style:solid;'>
    				<div class='blog_title'>{$row['title']} - {$row['public_date']}</div>
    				<div class='blog_content'>{$row['content']}</div>
    				    <form action='scripts/delete.php' method='POST'>
    					   <input type='hidden' id='delete_ID' name='delete_ID' value='{$row['ID']}'>
    					   <input type='submit' value='Delete'/>
    					</form>
    					<form action='edit_post.php' method='POST'>
    					   <input type='hidden' id='_ID' name='_ID' value='{$row['ID']}'>
    					   <input type='submit' value='Edit'/>
    					</form>
    			</div>";
    	}
	} 
	else {
    echo "0 results";
	}

	$conn->close();
}

?>
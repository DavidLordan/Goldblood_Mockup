<?php
require 'database_connection.php';

function showList(){

	global $conn;
	$sql = "SELECT * FROM `test_blog_table` ORDER BY `ID` DESC";

	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
  	  // output data of each row
    	while($row = $result->fetch_assoc()) {
    		echo "<div class='blog'>
    				<div class='blogHeader'>{$row['title']} - {$row['public_date']}</div>
    				<div class='blogContent'>{$row['content']}</div>
    			</div>";
    	}
	} 
	else {
    echo "0 results";
	}

	$conn->close();
}

?>
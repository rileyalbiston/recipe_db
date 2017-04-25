<?php

//
// This is the original test file for showing a single recipe before
// seperating it into a (rough) MVC format
//

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tracrecipe_db";  

	// Create connection
	$db = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	} 

	//Select from Database
	$sql = "SELECT r.recipe_id, r.recipe_date, r.recipe_name, r.recipe_comments, m.method_desc 
			FROM recipe r, method m 
			WHERE r.recipe_id = m.recipe_id
			AND r.recipe_id ='9'";
	$result = $db->query($sql);

	//Show single output of recipe details
	$row = mysqli_fetch_assoc($result);

	echo "Name: " . $row['recipe_name'] . "<br />";
	echo "Date: " . $row['recipe_date'] . "<br />";

	echo "<h2>Mehod</h2>";

	$i = 1;
/*
	foreach ($result as $results) {
	    // $arr[3] will be updated with each value from $arr...
	    echo "Step " . $i++ . "<br>";
	    echo $results['method_desc'] . "<br>";
	    //print_r($result);
	}
*/  

	foreach ($result as $results) {
		    echo "Step " . $i++ . "<br>";
		    echo $results['method_desc'] . "<br>";
	    //print_r($result);
	}

	echo "<h2>Comments</h2>";
	echo $row['recipe_comments'] . "<br />";

	/* close connection */
	$db->close();

?>
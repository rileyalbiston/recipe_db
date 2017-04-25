<?php

//
// The first file I created when I started playing around with the php interface
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
			WHERE r.recipe_id = m.recipe_id";
	$result = $db->query($sql);

	
//error testing 

	var_dump($result);
	
	$array = array($sql);

	echo "<br>";

	print_r(array_values($array));

echo "<br>";

foreach ($result as $results) {
    // $arr[3] will be updated with each value from $arr...
    echo $results['recipe_id'], $results['recipe_date'], $results['recipe_name'], $results['recipe_comments'], $results['method_desc'] . "<br>";
    //print_r($result);
}

/* close connection */
$db->close();

?>
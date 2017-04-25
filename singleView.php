<?php

	require_once('nav.php');
	
	echo "<a href='/tracrecipe/'>Home</a><br />";

	echo "Name: " . $row['recipe_name'] . "<br />";
	echo "Date: " . $row['recipe_date'] . "<br />";

	echo "<h2>Ingredients</h2>";

	foreach ($result as $results) {
		if ($results['recipe_id'] == $id) {
		    echo "<p>" . $results['ing_qty'] . " " . $results['ing_mesure'] . " " . $results['ing_name'] . "</p>";
		}
	    //print_r($result);
	}

	echo "<h2>Method</h2>";

	
/*
	foreach ($result as $results) {
	    // $arr[3] will be updated with each value from $arr...
	    echo "Step " . $i++ . "<br>";
	    echo $results['method_desc'] . "<br>";
	    //print_r($result);
	}
*/  
	$i = 1;

	foreach ($result2 as $results2) {
		if ($results2['recipe_id'] == $id) {
		    echo "Step " . $i++ . "<br>";
		    echo $results2['method_desc'] . "<br>";
		}
	    //print_r($result);
	}

	echo "<h2>Comments</h2>";
	echo $row['recipe_comments'];


<?php

	$id = $_GET['id'];

	require_once 'dbModel.php';
	$db = new connectDB();
// This worked for 2 tablesS
/*	
	$sql = "SELECT r.recipe_id, r.recipe_date, r.recipe_name, r.recipe_comments, m.method_desc 
			FROM recipe r, method m 
			WHERE r.recipe_id = m.recipe_id
			AND r.recipe_id = $id"; 
*/
// Try recipe and ingredients table
			
	$sql = "SELECT r.recipe_id, r.recipe_date, r.recipe_name, r.recipe_comments, i.ing_name, i.ing_qty, i.ing_mesure 
			FROM recipe r, ingredients i
			WHERE r.recipe_id = i.recipe_id 
			AND r.recipe_id = $id"; 

/*
	$sql = "SELECT r.recipe_id, r.recipe_date, r.recipe_name, r.recipe_comments, i.ing_id, i.ing_name, i.ing_qty, i.ing_mesure, m.method_id, m.method_desc
		    FROM recipe r
		    	INNER JOIN ingredients i
		    		ON i.recipe_id = r.recipe_id
		    	INNER JOIN method m
		    		ON m.method_recipe_id = i.recipe_id 
		    WHERE r.recipe_id = $id 
		    ";
*/

	$result = $db->query($sql);

	//Show single output of recipe details
	$row = mysqli_fetch_assoc($result);

	
	$sql = "SELECT  r.recipe_id, m.method_desc 
			FROM recipe r,method m 
			WHERE r.recipe_id = m.method_recipe_id
		    ";


	$result2 = $db->query($sql);

	//Show single output of recipe details
	//$row2 = mysqli_fetch_assoc($result2);

	require('singleView.php');

	// close connection 
	$db->close();


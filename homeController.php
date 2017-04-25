<?php

	require_once('dbModel.php');
	$db = new connectDB();

	//$result = new singleRecipe();
	//$result = getRecipe();

	//Select from Database
	$sql = "SELECT recipe_id, recipe_date, recipe_name, recipe_overview, recipe_servings 
			FROM recipe"; 
			
	$result = $db->query($sql);

	
	require('homeView.php');

	/* close connection */
	$db->close();



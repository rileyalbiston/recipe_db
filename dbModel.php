<?php

 //$id = $_GET['id'];

class connectDB extends mysqli 
{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "tracrecipe_db"; 
	
	function __construct() 
	{
		parent::__construct($this->servername, $this->username, $this->password, $this->dbname);
		if (mysqli_connect_error()) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
	    }
	    parent::set_charset('utf-8');
	}
/*
	public function getRecipe() 
		{
			$db = connectDB();

			$sql = "SELECT recipe_id, recipe_date, recipe_name FROM recipe"; 
				
			$result = $db->query($sql);

			$db->close();
			return $result;
		}
*/
}
/*
class singleRecipe extends connectDB
{
	public function getRecipe()
	{
		$db = connectDB();

		$sql = "SELECT recipe_id, recipe_date, recipe_name FROM recipe"; 
			
		$result = $db->query($sql);

		$db->close();
		return $result;
	}
}
*/
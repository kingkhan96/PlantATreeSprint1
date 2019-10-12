<?php

if(!isset($_SESSION)){
    session_start();
}
$user_logged_in = false;
try{
	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);

	$conn = new mysqli($server, $username, $password, $db);
} catch(Exception $e) 
{
	echo "unable to connect".$e->getMessage();
	exit;
}
// LOG IN
try{
	$table_make = "CREATE TABLE IF NOT EXISTS `users` (
  			`id` INT(11) NOT NULL AUTO_INCREMENT,
 			`username` VARCHAR(60) NOT NULL,
  			`description` VARCHAR(60) NOT NULL,
  			`session_id` VARCHAR(255),
  			PRIMARY KEY (`id`))";
	
	mysqli_query($conn,$table_make);
	
	$table_make = "CREATE TABLE IF NOT EXISTS `treedb` (
  			`id` INT(11) NOT NULL AUTO_INCREMENT,
 			`tree` VARCHAR(60) NOT NULL,
  			`price` int(60) NOT NULL,
  			`growth` int(60) NOT NULL,
  			`condition` VARCHAR(50) NOT NULL,
  			`category` VARCHAR(50) NOT NULL,
  			PRIMARY KEY (`id`))";
	
	mysqli_query($conn,$table_make);
	
	$check_user = mysqli_query($conn,"SELECT * FROM users WHERE session_id = '".session_id()."' LIMIT 1");
	while ($row=mysqli_fetch_row($check_user)){
				if(count($row) > 0) {
					$user_logged_in = true;
					$_SESSION['id'] = $row[0];
					$_SESSION['username'] = $row[1];
				}
			}
}catch(Exception $e){
	echo "Not able to check if a user is logged in ".$e->getMessage();
	exit;
}

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
	$check_user = mysqli_query($conn,"SELECT * FROM users WHERE session_id = '".session_id()."' LIMIT 1");
	while ($row=mysqli_fetch_row($check_user)){
				if(count($row) > 0) {
					$user_logged_in = true;
					$_SESSION['user_id'] = $row[0];
					$_SESSION['username'] = $row[1];
				}
			}
}catch(Exception $e){
	echo "Not able to check if a user is logged in ".$e->getMessage();
	exit;
}

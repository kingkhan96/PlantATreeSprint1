<?php
include('config.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="Styles.css" />
		<title>Plant A Tree</title>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<a href="home.php"><img src="images/Banner.jpg" width="956" height="130" alt="Banner" /></a>
			</div><!--header-->
			<div id="menu">
				<a href="home.php"><img src="images/Home.jpg" width="140" height="180" alt="Home" /></a>
				<a href="treesearch.php"><img src="images/treesearch.jpg" width="140" height="180" alt="treesearch" /></a>
				<a href="findafriend.php"><img src="images/findafriend.jpg" width="140" height="180" alt="findafriend" /></a>
				<a href="gallery.php"><img src="images/gallery.jpg" width="140" height="180" alt="Top 10" /></a>
			</div><!--menu-->
			<div id="main">
				<h1><u><b>Plant A Tree</b></u></h1>
				<h2>This is a website that is in testing that allows the purchase of trees through an account.</h2>
				<?php
					if(isset($_POST['submit']))
					{
						$username = $_POST['username'];
						$password = $_POST['password'];
						$user_results = mysqli_query($conn, "SELECT * FROM users WHERE username = '" .$username. "' AND password = '" .$password. "' LIMIT 1");
						$row=mysqli_fetch_row($user_results);
						if(count($row) > 0) 
						{
							$updateQuery = "
								UPDATE users
								SET session_id = '" .session_id(). "'
								WHERE user_id = '" .$row[0]. "'";
				
								mysqli_query($conn,$updateQuery);
							echo "You have logged in!";
						}
						else
						{
								echo "<h1>Login</h1>";
								echo " Your username and password don't seem to match.";
								echo "<form action = '' method ='post'>";
								echo "<h3>Username: <input type='text' name='username'><br>";
								echo "Password: <input type='text' name='password'><br>";
								echo "<input type='submit' name='submit'>";
								echo "</form>" ;
								echo "<a href='register.php'><p>register for an account here</p></a>";
						}
												
					}
					else
					{
						if(isset($_POST['register']))
						{
							$username = $_POST['username'];
							$password = $_POST['password'];
							$insertQuery = "
									INSERT INTO users(username, password)
									VALUES ('" .$username. "', '".$password."')";
							mysqli_query($conn, $insertQuery);
							echo "You have registered an account succesfully, please login below ".$username."<br>";
						}
						echo "<h1>Login</h1>";
						echo "<form action = '' method ='post'>";
						echo "<h3>Username: <input type='text' name='username'><br>";
						echo "Password: <input type='text' name='password'><br>";
						echo "<input type='submit' name='submit'>";
						echo "</form>" ;
						echo "<a href='register.php'><p>register for an account here</p></a>";
					}
				?>	
			</div><!--main-->
			<div id="footer">
			<p>Software engineering 2019</p>
			</div><!--footer-->
		</div><!--container-->
	</body>
</html>

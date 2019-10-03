<?php
	$message = "";
	if(isset($_POST['submit']))
	{ //check if form was submitted
		$username = $_POST['username'];
		$password = $_POST['password'];
		$message = "You have logged in succesfully, welcome back ".$username;
	}	
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
				<a href="Index.html"><img src="Images/Banner.jpg" width="956" height="130" alt="Banner" /></a>
			</div><!--header-->
			<div id="menu">
				<a href="Index.html"><img src="Images/Home.jpg" width="140" height="180" alt="Home" /></a>
				<a href="treesearch.html"><img src="Images/treesearch.jpg" width="140" height="180" alt="treesearch" /></a>
				<a href="findafriend.html"><img src="Images/findafriend.jpg" width="140" height="180" alt="findafriend" /></a>
				<a href="fill.html"><img src="Images/fill.jpg" width="140" height="180" alt="Top 10" /></a>
			</div><!--menu-->
			<div id="main">
				<h1><u><b>Plant A Tree</b></u></h1>
				<p>This is a website is in testing that allows the purchase of trees through an account.</p>
				<h1>Login</h1>
				<?php echo $message; ?>
				<form action = "" method ="post">
					<h3>Username: <input type="text" name="username"><br>
						Password: <input type="text" name="password"><br>
					<input type="submit" name="submit">
				</form>
			</div><!--main-->
			<div id="footer">
			<p>Software engineering 2019</p>
			</div><!--footer-->
		</div><!--container-->
	</body>
</html>
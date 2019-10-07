<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="Styles.css" />
		<title>Plant A Tree</title>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<a href="Index.html"><img src="images/Banner.jpg" width="956" height="130" alt="Banner" /></a>
			</div><!--header-->
			<div id="menu">
				<a href="home.php"><img src="images/Home.jpg" width="140" height="180" alt="Home" /></a>
				<a href="treesearch.php"><img src="images/treesearch.jpg" width="140" height="180" alt="treesearch" /></a>
				<a href="findafriend.php"><img src="images/findafriend.jpg" width="140" height="180" alt="findafriend" /></a>
				<a href="fill.php"><img src="images/fill.jpg" width="140" height="180" alt="Top 10" /></a>
			</div><!--menu-->
			<div id="main">
				<h1><u><b>Find a friend</b></u></h1>
				<p>You can insert a username of someone you know and we will search if they are in our system.</p>
				<?php
					if(isset($_GET['submit']))
					{ //check if form was submitted
						$username = $_GET['username'];
						echo "This username ".$username." does not exist in our database";
						
					}
					else
					{
						echo "<form action = '' method ='get'>";
						echo "<h3>Username: <input type='text' name='username'><br>";
						echo "<input type='submit' name='submit'><br>";
						echo "</form>";
					}		
				?>
			</div><!--main-->
			<div id="footer">
			<p>Software engineering 2019</p>
			</div><!--footer-->
		</div><!--container-->
	</body>
</html>

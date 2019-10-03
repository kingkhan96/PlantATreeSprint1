<?php
	$message = "";
	if(isset($_POST['submit']))
	{ //check if form was submitted
		$tree = $_POST['tree'];
		$message = "".$tree." exists!";
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
				<a href="Index.html"><img src="images/Banner.jpg" width="956" height="130" alt="Banner" /></a>
			</div><!--header-->
			<div id="menu">
				<a href="home.php"><img src="images/Home.jpg" width="140" height="180" alt="Home" /></a>
				<a href="treesearch.php"><img src="images/treesearch.jpg" width="140" height="180" alt="treesearch" /></a>
				<a href="findafriend.php"><img src="images/findafriend.jpg" width="140" height="180" alt="findafriend" /></a>
				<a href="fill.php"><img src="images/fill.jpg" width="140" height="180" alt="Top 10" /></a>
			</div><!--menu-->
			<div id="main">
				<h1><u><b>Tree Search</b></u></h1>
				<p>This page is allowing searching for trees</p>
				<?php echo $message; ?>
				<form id = "bookingform"> <!-- This form is used for the user to create a booking-->
					<h3>Tree: <input type="text" name="tree"><br>
					Min Price: <input type="text" name="price"><br>
					Min Growth rate: <input type="text" name="growth"><br>
					Condition: <input type="radio" name="condition" value="grass" checked="checked">Grass
					<input type="radio" name="condition" value="sand">Sand </br> 
					Category: <input type="radio" name="category" value="tree" checked="checked">Tree
					<input type="radio" name="category" value="bush">Bush </br>
					<input type="button" name="search" value="search"></h3>
				</form>
			</div><!--main-->
			<div id="footer">
			<p>Software engineering 2019</p>
			</div><!--footer-->
		</div><!--container-->
	</body>
</html>

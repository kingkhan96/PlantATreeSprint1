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
				<a href="Index.html"><img src="images/Banner.jpg" width="956" height="130" alt="Banner" /></a>
			</div><!--header-->
			<div id="menu">
				<a href="home.php"><img src="images/Home.jpg" width="140" height="180" alt="Home" /></a>
				<a href="treesearch.php"><img src="images/treesearch.jpg" width="140" height="180" alt="treesearch" /></a>
				<a href="findafriend.php"><img src="images/findafriend.jpg" width="140" height="180" alt="findafriend" /></a>
				<a href="gallery.php"><img src="images/gallery.jpg" width="140" height="180" alt="Top 10" /></a>
			</div><!--menu-->
			<div id="main">
				<h1><u><b>Tree Search</b></u></h1>
				<p>This page is allowing searching for trees</p>
				<?php
					if(isset($_POST['submit']))
					{
						
						$tree = $_POST['tree'];
						$price = $_POST['price'];
						$growth = $_POST['growth'];
						$condition = $_POST['condition'];
						$category = $_POST['category'];
						
						$result = "INSERT INTO users(tree, price, growth, condition, category)
								VALUES ('" .$tree. "', '".$price."','" .$growth. "','" .$condition. "','" .$category. "')";
						
						mysqli_query($conn, $result);
						
						$result = mysqli_query($conn, "SELECT * FROM treedb WHERE tree = '%" .$tree. "%' AND price = '%" .$price. "%' AND
						growth = '%" .$growth. "%' AND condition = '" .$condition. "' AND category = '" .$category. "'");
						
						echo "These are all the trees we have in the database";
						while ($row = mysqli_fetch_assoc($result)) //post all the trees that have the keyword
						{
							echo "<h2>", $row["tree"],"</h2>";
						}
						echo "<a href='treesearch.php'>Click here to search for trees</a>";
					}
					else
					{
						echo "<form action='' method='post'>";
						echo "<h3>Tree: <input type='text' name='tree'><br>";
						echo "Price: <input type='text' name='price'><br>";
						echo "Growth: <input type='text' name='growth'><br>";
						echo "Condition: <input type='radio' name='condition' value='grass' checked='checked'>Grass";
						echo "<input type='radio' name='condition' value='sand'>Sand </br>"; 
						echo "Category: <input type='radio' name='category' value='tree' checked='checked'>Tree";						
						echo "<input type='radio' name='category' value='bush'>Bush </br>";
						echo "<input type='submit' name='submit'></h3>";
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

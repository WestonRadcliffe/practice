<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
</head>
<body>
<div ID="container">
	<header>
		Header
		<div ID="menuButton">Menu</div>
	</header>
	<nav>
		<ul>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
		</ul>	
	</nav>
	<div ID="content">
	<div ID="main">
		<section>
		  <h1>Arrays</h1>
		  <?php
			$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
			ksort($age);
			echo "there are " . count($age) . " people <br>";
			
			foreach($age as $x=>$x_value)
			  {
			  echo $x . " is " . $x_value;
			  echo "<br>";
			  }
			?>
</canvas>
		</section>
		<section>
		  <h2>Functions</h2>
		  <?php
			function sum($x,$y)
			{
			$z=$x+$y;
			return $z;
			}
			
			echo "5 + 10 = " . sum(5,10) . "<br>";
			echo "7 + 13 = " . sum(7,13) . "<br>";
			echo "2 + 4 = " . sum(2,4);
			?>
		</section>
		<section>
		  <h2>Upload</h2>
		  <form action="" method="post" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file"><br>
			<input type="submit" name="submit" value="Submit">
			</form>		
		</section>
	</div>
	<Div ID="side">	
		<aside>
			Aside
		</aside>
	</Div>
	</div>
	<footer>
		Footer
	</footer>
</div>
</body>
<script>
	$("#menuButton").click(function(){
		$("nav").slideToggle();
	});
</script>
</html>
<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    //echo "Type: " . $_FILES["file"]["type"] . "<br>";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  //echo "Invalid file";
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<script src="assets/js/jquery-1.8.2.min.js"></script>
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
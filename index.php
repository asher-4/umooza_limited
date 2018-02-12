<?
php require('includes/connect.php')

?>

<!doctype html>
<meta charset=utf-8>
<head><title>welcome to umooza limited online auction system</title>
<link rel="stylesheet" href="css/umooza.css" type="text/css">
</head>

<body>
<div class="main">
 <nav>
<img src="images/asher3.JPG" width="200" height="80" class="img-nav">
<!--<form action="index.php" method="GET">
			<input type="text" name="query" />
			<input type="submit" value="Search">
			</form> -->
<?php require('includes/menu.php'); ?>	

<!--<form action="#">
      <button type="submit">Search</button>
      <input type="text" name="s" id="s" />
    </form> -->
		</nav>
</div>

	<div class="banner">
	   <img src="images/pexels-photo-277667.jpeg" alt="pexels" class="responsive">
	   <img src="images/canstockphoto1666166.jpg" alt="canstockphoto" class="responsive">
           <img src="images/Toyota-Innova-3.jpg" alt="toyota" class="responsive">
	</div>


</div>
<div class="maincontent">this is for the main content</div>
<div class="sidebar">this is the navibation bar</div>

<div id="footer">
  <div class="copyright">
    <p class="left">Copyright &copy; 2018, Umooza Limited Online, All Rights Reserved</p>
    <p class="right">Design by :asher mziya</a></p>
    <div class="cl"></div>
  </div>
<?php
//gets value sent over search form
	$query=$_GET['query'];
	$min_length= 3;

if(strlen($query)>= $min_length){

	$query=htmlspecialchars($query);
	$query=mysqli_real_escape_string($query);
	$raw_results=mysqli_query("select*from products where('product_name' like '%".$query."%') OR
				 ('product_description' like '%".$query."%')") or die(mysqli_error());
if(mysqli_num_rows($raw_results) > 0){
	while($results=mysqli_fetch_array($raw_results)){
		echo"<p><h3>" .$results['product_name']."</h3>".$results['product_description']."</p>";
}
}
	else{

	echo "no results";
}
}
	else{
	echo"minimum length is" .$min_length;
}


	?>



</body>
</html>

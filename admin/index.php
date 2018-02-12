<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
?>

<!doctype html>
<meta charset=utf-8>
<head><title>welcome the admin</title>
<link rel="stylesheet" href="admin_style.css" type="text/css">
</head>

<body>
<a href="index.php">
<?php
if ($username && $userid){
	echo"welcome <b> $username</b>, <a href='./logout.php'>Logout</a>";

}
	else
	echo"please login to access this page <a href='./login.php'>Login here<a/>";


?>
 
 <img src="images/asher3.JPG" width="200" height="80">

<div class="header"> <em>welcome the admin</em></div>
	
	<div class="sidebar">
		<h2><a href="#">Logout</a></h2>
		<h2><a href="#">manage user</a></h2>
		<h2><a href="#">manage items</a></h2>
		<h2><a href="#">manage bidding</a></h2>
		<h2><a href="#">manage payments</a></h2>
		<h2><a href="#">generate reports</a></h2>
	</div>
<h1>welcome to the umooza limited online auction admin panel. Please proceed with neccessary details to the system</h1>

<div id="footer">copyright @ 2017 Mr John Kaira owner of the system</div>
</body>
</html>

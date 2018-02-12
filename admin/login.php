<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
?>
<!doctype html>
<head>
	<title><em>Admin Login</em></title>
<style type="text/css">
body{
background-color:#fff;
margin-top:50px;
}




</style>
</head>
<body>
<div>
 
 <img src="asher3.JPG" width="200" height="80">
<?php
	$form= "<form method='post' action='../login.php'>
	<h1 align='center'>Admin Login</h1>
	<table width='500' border='10' align='center'>
	<tr>
		<td>username:</td>
		<td><input type='text' name='user'></td>
	</tr>
	
	<tr>
		<td>password:</td>
		<td><input type='password' name='password'></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type='submit' name='loginbtn' value='login'></td>
	</tr>

	</table>
	</form>";

		if($_POST['loginbtn']){
		$user=$_POST['user'];
		$password=$_POST['password'];
	if($user){
		if($password){
		require("includes/connect.php");
		$password=md5(md5("wliudhfv".$password."jsabjkf"));
				
		$query=mysqli_query("SELECT * FROM users WHERE username='$user'");
		$numrows= mysqli_num_rows($query);
	if($numrows==1){
		$row=mysqli_fetch_assoc($query);
		$dbid = $row['id'];
		$dbuser= $row['username'];
		$dbpass= $row['password'];
		$dbactive= $row['active'];
		
		if($password==$dbpass){
			if($dbactive==1){
		$_SESSION['userid']=$dbid;
		$_SESSION['username']=$dbuser;
		
		echo"you have been login in as <b>$dbuser</b>. <a href='./index.php'> click here</a>to go the admin page";
}
	else
	echo"you must activate your account to login. $form ";
}
	else
		echo"you did not enetr the correct password. $form";

}
	else
		echo"the username you entered  was not found. $form";
			mysqli_close();
} else
	echo"you must enter your password. $form";
}
else
	echo"you must enter your username. $form";
}
else
echo $form;
?>
</body>
</html>

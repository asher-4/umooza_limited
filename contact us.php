<?php
if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
	$contact_name=$_POST['contact_name'];
	$contact_name=$_POST['contact_email'];
	$contact_name=$_POST['contact_text'];

	if(!empty($contact_name) && ($contact_email) && !empty($_text)){
		if(strlen($contact_name)>50 || strlen($contact_email)> 100 || strlen($contact_text)>1000){
	echo'sorry some maxtext of the field has been exeeded';
	
}	else{

	$to='ashermz162@gmail.com';
	$subject='contact form submitted.';
	$body=$contact_name."\n".$contact_text;
	$headers='from:'.$contact_email;

	if(@mail($to,$subject,$body,$headers)) {
 
	echo"thanks for contacting us.we\'ll be in touch soon";
}	
	else{
	echo"sorry, an error occurred. please try again later";
}
}
} else{
	echo'all fields are required.';
}
}

?>
<!doctype html>
<head><title>Contact Us</title>
<link rel="stylesheet" href="css/umooza.css" type="text/css">
</head>

<body background="blue">

	
</head>

<body>

<div class="navbar">
 
<?php require('includes/menu.php'); ?>
		
</div>

<form action="index.php" method="POST">

	Name:<br><input type="text" name="contact_name" maxlength="50"><br><br>
	Email address:<br><input type="text" name="contact_email" maxlength="100"><br><br>
	<textarea name="contact_text" rows="6" colsp="30" maxlength="1000"></textarea><br><br>
	<input type="submit" value="Send">

</form>
</body>
</html>
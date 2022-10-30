<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
				<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/Hotelcss.css">

	<title>Registration
	</title>

</head>

<?php include '../views/header.php' ?>
<style type="text/css">
	html{
		font-size: 20px;
	}
	h2{
		font-size: 30px;
	}
	input
	{
		width: 150px;
	}

	label{
    float: left;
    width: 10em;
    margin-left: 20px;
}
input {
  float: left;
  margin-left: 9px;
}
</style>
<?php include '../databaseFolder/DatCon.php'; ?>
<body>
	<br>

<center><form action="../signup/signupdatabase.php" method="post" style="background-image: url('../image/h-1.jpg'); width: 550px; height: 540px;border-radius: 10px; text-align: center;">
	<br>
	<h2>Sign up</h2>
	<br>
	<?php 
	if(isset($_GET['SIGNUPMESG2']))
{
		$SIGNUPMESG2 = $_GET['SIGNUPMESG2'];
	echo $SIGNUPMESG2;
}
		?>
	<label for="userName">UserName:</label>
	<input id="sign" type="text" name="userName" />
	
		<?php 
	if(isset($_GET['Errormsguser']))
	{
		$Errormsguser = $_GET['Errormsguser'];
			echo $Errormsguser;
	}
	?>

	<br>
	<br>
	<label for="psw">Password:</label>
	<input id="sign" type="Password" name="psw">
	<?php 
	if(isset($_GET['Errormsgpsw']))
	{
		$Errormsgpsw = $_GET['Errormsgpsw'];
			echo $Errormsgpsw;
	}
	?>
	

	<br>
	<br>
	<label for="ConfirmPSW">Confirm Password:</label>
	<input id="sign" type="Password" name="ConfirmPSW">
<?php 
	if(isset($_GET['ErrorConf']))
	{
		$ErrorConf = $_GET['ErrorConf'];
					echo $ErrorConf;

	}


	?>

<?php 
if(isset($_GET['Confirmpswmsg']))
	{
		$Confirmpswmsg = $_GET['Confirmpswmsg'];
			echo $Confirmpswmsg;
	}


?>

	<br>
	<br>
	<label for="Email">Email:</label>
	<input id="sign" type="text" name="Email" style="width: 200px;">
	<?php 
	if(isset($_GET['msgEmail']))
	{
		$msgEmail= $_GET['msgEmail'];
	     echo $msgEmail;
	}
		
	?>

	<?php if(isset($_GET['ErrormsgEmail1']))
	{
		$ErrormsgEmail1= $_GET['ErrormsgEmail1'];
      	echo $ErrormsgEmail1;
	}
		?>

	<br>
	<br>
	<button type="submit" name="signupbut" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-3 rounded">submit</button>

</form>
</center>
</body>
<br>
<?php include '../views/footer.php' ?>
</html>
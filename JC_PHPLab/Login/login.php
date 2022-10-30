<!DOCTYPE html>
<html lang="en">
<?php ?>
	<meta charset="utf-8">
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../css/Hotelcss.css">


	<title>Login</title>
	<?php include '../views/header.php' ?>
<style type="text/css">
	form{
		width: 100% 100%;
		font-size: 20px;

	}
</style>

<body>
	<br>
<br>
	<center><h2 id="contact">Welcome to JC booking service </h2></center>
<br>
<center><form action="../Login/loginDB.php" method="post" style="	background-image: url('../image/h-1.jpg'); width: 560px; height: 460px;border-radius: 10px; 
">

<br>
	<h2 style="font-size:30px;">Login</h2>

<br>
	<label id="Login" for="userName">UserName:</label>
	<input id="log" type="text" name="userName" />
	<?php 
			if(isset($_GET['usermsg']))
			{
				$usermsg = $_GET['usermsg'];
				echo $usermsg;

			}
			
		?>


<br>
	<br>
	<label id="Login"for="psw">Password:</label>

	<input id="log"  type="password" name="psw">
	<?php 
			if(isset($_GET['pswmsg']))
			{
				$pswmsg = $_GET['pswmsg'];
				echo $pswmsg;

			}
			
		?>
		<?php 
			if(isset($_GET['Confirmpswmsg1']))
			{
				$Confirmpswmsg1 = $_GET['Confirmpswmsg1'];
				echo $Confirmpswmsg1;
			}

		?>
		
		<input type="hidden" name="ConfirmPSW" />

<br>
	<br>
	<a href="../review/SELECTDBREVIEW.php">Sign in as a guest</a>
<br>
	<br>
	<a href="../signup/signup.php">Sign up as a member</a>
<br>
	<br>
	<button name="logSub" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-3 rounded">submit</button>
</form></center>
</body>
<br>
<?php include '../views/footer.php' ?>

</html>
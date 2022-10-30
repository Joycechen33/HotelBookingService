<!DOCTYPE html>
<html>

			
<?php include '../databaseFolder/DatCon.php'; ?>

	<?php include '../views/header.php' ?>

	<meta charset="utf-8">
	<title>Review Form 1</title>


<div name="messageDel">
	<?php 
	if(isset($_POST['messageDel']))
			echo $messageDel;
	?>
</div>
<div name="SIGNUPMESG">
	<?php 
	if(isset($_POST['SIGNUPMESG']))
			echo $SIGNUPMESG;
	?>
</div>
<br>
<body>
	<center><h2>Welcome to JC booking service </h2></center>
<br>
	<center><form action="../databaseFolder/UpdateDB.php" method="post" style="background-image: url('../image/h-1.jpg'); width: 500px; height: 400px; border-radius:10px;">
		<br>
		<h2 style="font-size:30px;">Review</h2>
		 <input type="hidden" name="CommentsID" value="<?php if(isset($_POST['CommentsID'])) echo $_POST['CommentsID'] ?>">
		 <br>
		 <br>

		<label id="rev" for="userName">UserName: </label>
		<input id="rev1" type="text" name="userName" value="<?php if(isset($_POST['userName'])) 
		echo $_POST['userName']; ?>" />
		<br/>
		<br/>

		<label id="rev">Hotel: </label>
	<input  id="rev1" type="text" name="Hotel" value="<?php if(isset($_POST['Hotel'])) 
		echo $_POST['Hotel']; ?>" />
	
		<br/>
				<br/>
	<label for="Location" id="rev">Location: </label>
	<input id="rev1" type="text" name="Location"  value="<?php if(isset($_POST['Location'])) 
		echo $_POST['Location']; ?>" />
	<br>
	<br>
		<label for="Comments" id="rev">Comments: </label>
		<input id="rev1" type="text" name="Comments" value="<?php if(isset($_POST['Comments'])) 
		echo $_POST['Comments']; ?>" / >
		<br>
		<br>
	<button type="submit" name="UpBut" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-3 rounded">submit</button>
	<br>
	</form>
</center>
</body>
<br>
<?php include '../views/footer.php' ?>

</html>
<!DOCTYPE html>
<html lang="en">

	<meta charset="utf-8">
		
		<?php include '../views/header.php' ?>

	<title>Review Form 1</title>
	<br>
	<br>

<?php include '../databaseFolder/DatCon.php'; ?>
<br>
<?php
 if(isset($_GET['signmsg']))
{
	$signmsg = $_GET['signmsg'];
	echo $signmsg;
}

?>

<body>
	<center><h2>Welcome to JC booking service </h2></center>
<br>

	<center><form action="../review/reviewInsert.php" method="post" style="	background-image: url('../image/h-1.jpg'); width: 600px; height: 500px;border-radius: 10px;" >

	
<br>
		<h2 id="review">Review</h2>


<br>

					<?php	
	//if(isset($_GET['emailval']))
	//{
	//	$emailval =  $_GET['emailval'];
	 //    echo $emailval;
	//}
		
	?>
		<label for="userName" id="rev">UserName: </label>
		<input  id="rev1" type="text" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName'];  ?>"/>
		<?php 
		if(isset($_GET['MSGUSER']))
		{
			$MSGUSER = $_GET['MSGUSER'];

			echo $MSGUSER;
		}

		?>
		<br>
		<br>
		<label id="rev">Hotel: </label>
		<input  id="rev1" type="text" name="Hotel" />
		<?php 
			if(isset($_GET['MSGHot'])){
				$MSGHot = $_GET['MSGHot'];
				echo $MSGHot;
			}

		 ?>
		<br/>
				<br/>
	<label for="Location" id="rev">Location:	</label>
	<input  id="rev1" type="text" name="Location"  />

<?php if(isset($_GET['MSGLoc'])) 
{
	 $MSGLoc = $_GET['MSGLoc'];
	 echo $MSGLoc;
} ?>
	<br>
	<br>
		<label for="Comments" id="rev">Comments: </label>
		<input  id="rev1" type="text" name="Comments" / >
	<?php 
		if(isset($_GET['MSGCom']))
		{

			$MSGCom = $_GET['MSGCom'];
			echo $MSGCom;
		}

		?>
<br>
		<br>
	<button type="submit" name="reviewBut" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-3 rounded">submit</button>
	
	</form>
</center>
</body>
<br>
<?php include '../views/footer.php'; ?>

</html>
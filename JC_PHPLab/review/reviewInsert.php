<?php include '../views/header.php' ?>

<?php include '../databaseFolder/DatCon.php'; ?>

<div name="messageDel">
	<?php 
	if(!empty($_POST['messageDel']))
			echo $messageDel;
	?>
</div>

<?php
if(isset($_POST['reviewBut']))
{
	if(!empty($_POST['userName']) && !empty($_POST['Hotel']) && !empty(['Location']) && !empty($_POST['Comments']))
	{
		$userName = trim(filter_input(INPUT_POST, 'userName'));
		$Hotel = trim(filter_input(INPUT_POST, 'Hotel'));
		$Location = trim(filter_input(INPUT_POST, 'Location'));
		$Comments = trim(filter_input(INPUT_POST, 'Comments'));
$INSERTSTMT1 = "INSERT INTO review(userName, Hotel, Location, Comments) VALUES(?,?,?,?)";

$INSERTOUTPUT = $conDB->prepare($INSERTSTMT1);
$INSERTOUTPUT->bindValue(":userName", $userName);
$INSERTOUTPUT->bindValue(":Hotel", $Hotel);
$INSERTOUTPUT->bindValue(":Location", $Location);
$INSERTOUTPUT->bindValue(":Comments", $Comments);


$SELECTOUT = $conDB->prepare("SELECT CommentsID, userName, Hotel, Location, Comments FROM review ORDER BY CommentsID ASC");



$INSERTOUTPUT->execute([$userName, $Hotel, $Location, $Comments]);
$CommentsID = $conDB->lastInsertId();
$SELECTOUT->execute([$CommentsID, $userName, $Hotel, $Location, $Comments]); 
echo "<html style='background-color:white;'>";

	echo "<body><br>";
	echo "Your Comments have been inserted";
	echo "<br>";
	echo "<br>";
	echo "<p style='font-size:20px;'>Welcome " . "<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <i class='fas fa-user-alt' style='font-size:24px;'></i> " . $userName . "</p>";
	echo "<br>";
	echo "<br>";

	echo "<center><table style='background-color:salmon; width:750px;'><tr><td style='text-align:center;text-decoration:underline;'>UserName</td><td style='text-align:center;text-decoration:underline;'>Hotel</td><td style='text-align:center;text-decoration:underline;'>Location</td><td style='text-align:center;text-decoration:underline;'>Comments</td><td style='text-align:center;text-decoration:underline;'>Edit/Update</td></tr>";

	echo "<tr><td style='text-align:center;'>" . $userName . "</td><td style='text-align:center;'>" . $Hotel . "</td><td style='text-align:center;'>" . $Location . "</td><td style='text-align:center;'>" . $Comments . "</td><td>";

	echo "<center><form method='post' action='../review/review.php'><input type='hidden' name='CommentsID' value='". $CommentsID ."'/><input type='hidden' name='userName' value='" . $userName ."'/><input type='hidden' name='Hotel' value='" . $Hotel . "' /><input type='hidden' name='Location' value='" . $Location . "' /><input type='hidden' name='Comments' value='". $Comments ."'/><button name='UPsub' style='background-color:deeppink; border-radius:10px;'>EDIT</button></form></center><br>";

	echo "<center><form action ='../databaseFolder/DeleteDB.php' method='post'><input type='hidden' name='userName'/><input type='hidden' id='CommentsID' name='CommentsID' value='" . $CommentsID ."'/><button name='DELsub' style='background-color:yellowgreen; border-radius:10px;'>Delete</button></form></center></td></tr>";
	echo "</center>";

if($INSERTOUTPUT  == true )
{

	echo "<br>";
	echo "<tr><td style='text-align:center; text-decoration:underline;'>UserName</td><td style='text-align:center; text-decoration:underline;'>Hotel</td><td style='text-align:center; text-decoration:underline;'>Location</td><td style='text-align:center;text-decoration:underline;'>Comments</td></tr>";

	while($TBR = $SELECTOUT->fetch(PDO::FETCH_ASSOC))
	{
		$userName = $TBR["userName"];
		$Hotel = $TBR['Hotel'];
		$Location = $TBR['Location'];
		$Comments = $TBR["Comments"];

	
	echo "<tr><td style='text-align:center;'>" . $userName . "</td><td style='text-align:center; '>" .  $Hotel . "</td><td style='text-align:center;'>" . $Location . "</td><td style='text-align:center;'>" . $Comments . "</td></tr>";
	
	}
		echo "</center></table></body></html>";
}
else
{
	echo "not successfully";
}
}
else{
$MSGUSER = $MSGHot = $MSGLoc = $MSGCom = "";
if(empty($_POST['userName']))
{
		$MSGUSER= "Please enter your username";

	
}
if(empty($_POST['Hotel']))
{
		$MSGHot = "Choose a Hotel";

}
if(empty($_POST['Location']))
{
		$MSGLoc = "Choose a Location";

}

if(empty($_POST['Comments']))
{
		$MSGCom = "Please enter a comments";

}

header('Location:../review/reviewForm1.php?MSGUSER=' . $MSGUSER . '&MSGHot=' . $MSGHot . '&MSGLoc=' . $MSGLoc . '&MSGCom=' . $MSGCom);
}



}

?>
<?php echo "<br>";
include '../views/footer.php' 

?>
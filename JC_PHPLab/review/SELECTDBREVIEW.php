<?php include '../views/header.php' ?>

<?php include '../databaseFolder/DatCon.php'; ?>
<div name="messageDel">
	<?php
		if(!empty($_POST['messageDel']))
			echo $messageDel;
	?>
	
</div>
<?php
echo "<br><br>";

//$SELECTREVIEWSTMT = "SELECT userName, Comments FROM review";
$SELECTOUT = $conDB->prepare("SELECT CommentsID, userName, Hotel, Location, Comments FROM review ORDER BY CommentsID ASC");
echo "<html style='background-color:white;'>";
$SELECTOUT->execute(); 
	echo "<center><table style='background-color:salmon; width:750px;'><tr><td style='text-align:center;text-decoration:underline;'>UserName</td><td style='text-align:center;text-decoration:underline;'>Hotel</td><td style='text-align:center;text-decoration:underline;'>Location</td><td style='text-align:center;text-decoration:underline;'>Comments</td></tr>";


	while($TBR = $SELECTOUT->fetch(PDO::FETCH_ASSOC))
	{
		$userName = $TBR["userName"];
				$Hotel = $TBR["Hotel"];
		$Location= $TBR["Location"];

		$Comments = $TBR["Comments"];

	
	echo "<tr><td style='text-align:center;'>" . $userName . "</td><td style='text-align:center;'>" . $Hotel . "</td><td style='text-align:center;'>" .  $Location . "</td><td style='text-align:center;'>" . $Comments . "</td></tr></center>";
	
	}
		echo "</table>";
		 echo "<br>";
include '../views/footer.php'; 

	echo "</html>";
	?>
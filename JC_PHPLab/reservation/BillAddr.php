<?php include '../views/header.php' ?>

<?php include '../databaseFolder/DatCon.php'; ?>
<?php 
if(isset($_POST['billBut']))
{
	if(!empty($_POST['billAddr']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zipCode']))
	{
		$billAddr = trim(filter_input(INPUT_POST, 'billAddr'));
			$city = trim(filter_input(INPUT_POST, 'city'));

		$state = trim(filter_input(INPUT_POST, 'state'));
		$zipCode = trim(filter_input(INPUT_POST, 'zipCode'));
		$insert1 = "INSERT INTO billaddrtb(billAddr, city, state, zipCode) VALUES(?,?,?,?)";
		$billINsert = $conDB->prepare($insert1);
		$billINsert->bindValue(':billAddr', $billAddr);
		$billINsert->bindValue(':city', $city);
		$billINsert->bindValue(':state', $state);
		$billINsert->bindValue(':zipCode', $zipCode);

		$billINsert->execute([$billAddr, $city, $state, $zipCode]);

		if($billINsert)
		{
			echo "<body style='background-color:skyblue; font-size:20px;'><br><br>";
			echo "<div style='background-color: #e9c994;
'><br><p style='text-align:center;'>Your reservation has been sent to your house</p>";
			echo "<p style='text-align:center;'>Thank You for choosing JC booking service! Have a wonderful trip and enjoy your staying at the hotel!</p><br></div></body>";
		}

	}
	else
	{
		if(empty($_POST['billAddr']))
		{
			$billAddError = "Please enter your address";
		}
		if(empty($_POST['city']))
		{
			$cityerror = "Please enter the city";
		}
		if(empty($_POST['state']))
		{
			$stateerror = "Please enter the state";
		}
		if(empty($_POST['zipCode']))
		{
			$zipCodeERROR = "Please enter the zip code";
		}
		header('Location:../reservation/billAddrForm?billAddError=' . $billAddError . '&cityerror=' . $cityerror . '&stateerror=' . $stateerror . '&zipCodeERROR=' . $zipCodeERROR);
	}
}


?>
<?php echo "<br>";
include '../views/footer.php' 

?>
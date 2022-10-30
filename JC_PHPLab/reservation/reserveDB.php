
<?php include '../databaseFolder/DatCon.php'; ?>
<head>
	<?php include '../views/header.php' ?>

</head>
<br>
	<center><h2>Welcome to JC booking service </h2></center>

<?php

if(isset($_POST['paySub']))
{
	if(!empty($_POST['startDate']) && !empty($_POST['Enddate']) &&  !empty($_POST['Location']) && !empty($_POST['Hotel']) && !empty($_POST['RoomCost']) && !empty($_POST['GuestNum']) && !empty($_POST['FirstName']) && !empty($_POST['LastName']) && !empty($_POST['Email']) && !empty($_POST['ConfirmEmail']) && !empty($_POST['PhoneNum']))	
	{
$startDate = trim(filter_input(INPUT_POST, 'startDate'));
		$Enddate = trim(filter_input(INPUT_POST, 'Enddate'));
		$Location  = trim(filter_input(INPUT_POST, 'Location'));
		$Hotel = trim(filter_input(INPUT_POST, 'Hotel'));
		$RoomCost = trim(filter_input(INPUT_POST, 'RoomCost'));
		$GuestNum = trim(filter_input(INPUT_POST, 'GuestNum'));
		$FirstName =trim(filter_input(INPUT_POST, 'FirstName'));
		$LastName =trim(filter_input(INPUT_POST, 'LastName'));
		$Email = trim(filter_input(INPUT_POST, 'Email'));
		$ConfirmEmail = trim(filter_input(INPUT_POST, 'ConfirmEmail'));
		$PhoneNum = trim(filter_input(INPUT_POST, 'PhoneNum'));
	
		


		//$insertressta = "INSERT INTO reserve (startDate, Enddate, Location, Hotel, RoomCost, GuestNum, FirstName, LastName, Email, ConfirmEmail, PhoneNum) VALUES (:startDate, :Enddate, :Location, :Hotel, :RoomCost, :GuestNum, :FirstName, :LastName, :Email, :ConfirmEmail, :PhoneNum)";

		$INSERTDA= $conDB->prepare("INSERT INTO reserve (startDate, Enddate, Location, Hotel, RoomCost, GuestNum, FirstName, LastName, Email, ConfirmEmail, PhoneNum) VALUES (:startDate, :Enddate, :Location, :Hotel, :RoomCost, :GuestNum, :FirstName, :LastName, :Email, :ConfirmEmail, :PhoneNum)");

		$INSERTDA->bindValue(":startDate", $startDate);
 
		$INSERTDA->bindValue(":Enddate", $Enddate);

		$INSERTDA->bindValue(":Location", $Hotel);
				$INSERTDA->bindValue(":Hotel", $Hotel);

		$INSERTDA->bindValue(":RoomCost", $RoomCost);
		$INSERTDA->bindValue(":GuestNum", $GuestNum);
		$INSERTDA->bindValue(":FirstName", $FirstName);
		$INSERTDA->bindValue(":LastName", $LastName);
		$INSERTDA->bindValue(":Email", $Email);
		$INSERTDA->bindValue(":ConfirmEmail", $ConfirmEmail);
		$INSERTDA->bindValue(":PhoneNum", $PhoneNum);

		$INSERTDA->execute(array(':startDate'=>$startDate, ':Enddate'=>$Enddate, ':Location'=>$Location, ':Hotel'=>$Hotel, ':RoomCost'=>$RoomCost, ':GuestNum'=>$GuestNum, ':FirstName'=>$FirstName, ':LastName'=>$LastName, ':Email'=>$Email, ':ConfirmEmail'=>$ConfirmEmail, ':PhoneNum'=>$PhoneNum));


		if($INSERTDA == true)
		{
			echo "<br>";
			echo "<br>";
				



								echo "<center><div style='text-align:center; background-color:salmon; width:400px; border-radius:10px;'>";
												echo "<br>";

								echo "<h2 style='text-decoration:underline;'>Reservation Receipt</h2>"
;
				echo "Check In Date: <p style='font-weight:bold;'> "  . $startDate . "</p>";
				echo "<br>";
				echo "Check Out Date: <p style='font-weight:bold;'> " . $Enddate . "</p>";
				
								echo "<br>";
				echo "Location: <p style='font-weight:bold;'>". $Location . "</p>";
								echo "<br>";

				echo "Hotel: <p style='font-weight:bold;'>" . $Hotel ."</p>"; 		
								echo "<br>";


				echo "Total Cost: <p style='font-weight:bold;'>$" . (($RoomCost * $GuestNum)*(strtotime($Enddate) - strtotime($startDate))/86400) . "</p>";
								echo "<br>";

				echo "First Name : <p style='font-weight:bold;'>" . $FirstName . "</p>";							echo "<br>";

				echo "Last Name: <p style='font-weight:bold;'>" . $LastName . "</p>";

               echo "<br>";

				echo "Email: <p style='font-weight:bold;'>" . $Email . "</p>";
				echo "<br>";
				
				echo "</div></center>";
		
	}
		else
		{
			echo "<br>no not inserted";
		}


	}
	else
	{
		$dateerror = $dateerror1 = $Locationerror= $Hotelerr = $Guesterror = $Nameerror  = $LastNameerr = $emailerror = $EmailCerror = $Phonerror = $cardNamerror = $cardNumerror = $cardTyerror = $expireerror = "";


if(empty($_POST['startDate'])) {
			$dateerror = " *Choose a  Date";
									

			}
			if(empty($_POST['Enddate'])) {
			$dateerror1 = " *Choose a Date";
		}
		if(empty($_POST['Location']))
		 {
			$Locationerror = " *Choose a Location";
					

		}
		if(empty($_POST['Hotel']))
		 {
			$Hotelerr1 = " *Choose a Hotel";
		}
		if(empty($_POST['RoomCost'])) {
			$Roomerror = " *Choose a room";
		}
		if(empty($_POST['GuestNum'])) 
		{
			$Guesterror = " *Enter number of rooms";		
		}
		if(empty($_POST['FirstName'])) 
		{
			$Nameerror = " *Enter your first name";
		}
		if(empty($_POST['LastName']))
		 {
			$LastNameerr = " *Enter your last name";
		}

		if(empty($_POST['Email']))
		 {
			$emailerror = " *Enter your email";
		}
		if(empty($_POST['ConfirmEmail']))
		 {
			$EmailCeerror = " *Enter the same email";
		}
		if(empty($_POST['PhoneNum']))
		{
			$Phonerror = " *Enter your Phone number";
		}
		if(empty($_POST['CardNum'])) {
			$cardNumerror = " *Enter the Card Number";
		}
		if(empty($_POST['cardType']))
		 {
			$cardTyerror = " *Enter the type of card";
		}
		if(empty($_POST['cardName']))
		 {
			$cardNamerror = " *Enter card owner name";
		}
		if(empty($_POST['expirationDate'])) 
		{
			$expireerror = " *Enter the expiration Date";
		}


header('Location:../reservation/reservation.php?dateerror='. $dateerror . '&dateerror1=' . $dateerror1 . '&Locationerror=' . $Locationerror . '&Hotelerr1=' . $Hotelerr1 . '&Roomerror=' . $Roomerror . '&Guesterror=' . $Guesterror . '&Nameerror=' . $Nameerror . '&LastNameerr=' . $LastNameerr . '&emailerror=' . $emailerror. '&EmailCeerror=' . $EmailCeerror . '&Phonerror=' . $Phonerror . '&cardNamerror=' .$cardNamerror . '&cardTyerror=' .$cardTyerror. '&cardNumerror=' . $cardNumerror . '&expireerror=' . $expireerror);



	}
	
if(!empty($_POST['cardName']) && !empty($_POST['cardType']) && !empty($_POST['CardNum']) && !empty($_POST['expirationDate']))
	{
		$cardName = trim(filter_input(INPUT_POST, 'cardName'));
		$cardType = trim(filter_input(INPUT_POST, 'cardType'));
		$CardNum = trim(filter_input(INPUT_POST, 'CardNum'));
		$expirationDate = trim(filter_input(INPUT_POST, 'expirationDate'));
		
		$BILLout = $conDB->prepare("INSERT INTO billinfo(cardName, cardType, CardNum, expirationDate) VALUES(:cardName, :cardType, :CardNum, :expirationDate)");
		$BILLout->bindValue(":cardName", $cardName);
		$BILLout->bindValue(":cardType", $cardType);
		$BILLout->bindValue(":CardNum", $CardNum);
		$BILLout->bindValue(":expirationDate", $expirationDate);
		$BILLout->execute(array(':cardName'=>$cardName, ':cardType'=>$cardType, ':CardNum'=>$CardNum, ':expirationDate'=>$expirationDate));


	}
}
?>
<br>

<?php include '../reservation/billAddrForm.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php include '../views/header.php' ?>

	<meta charset="utf-8">
		
	<title>Booking a Hotel Reservation</title>




<body>
	<br>
	<center><h2>Welcome to JC booking service </h2></center>
<br>
<center><form method="post" action=" ../reservation/reserveDB.php" style="width:780px; font-size: 20px;
	background-color: salmon;
	border-radius: 10px;
	height: 1300px;">
	<br>
	<br>
	<h2 id="reserve">Booking a Room</h2>
	<br>
	<br>
	<label id='hotelc'for="startDate">Start Date:</label>
	<input type="date" name="startDate" class="form-control" style="width:200px;"  />
	<?php 
	
if(isset($_GET['dateerror']))
{	$dateerror = $_GET['dateerror'];
	echo $dateerror;
}
?>
	
	<br>
	<br>
		<label id='hotelc' for="Enddate">End date:</label>
		<input type="date" name="Enddate"class="form-control"  style="width:200px;" />
		<?php if(isset($_GET['dateerror1']))
{			
	$dateerror1 = $_GET['dateerror1'];
	echo $dateerror1;
}
?>
	

		<br>
		<br>
	<label id='hotelc' for="Location">Location:	</label>
	<select name="Location" class="form-control" style="width:200px;" value="<?php if(isset($_POST['Location'])) { echo $_POST['Location'];
	}?>"  />
	<option value="">Choose A Location</option>
	<option id="Manhanttan" value="Manhanttan, NY">Manhanttan, NY</option>
	<option value="Montpelier, VT">Montpelier, VT</option>
	<option value="Los Angeles, CA">San Jose, CA</option>
	<option value="Scranton, PA">Scranton, PA</option>
	<option value="Seattle, WA">Seattle, WA</option>
	<option value="Miami FL">Miami, FL</option>


</select>
	<?php 
	
		if(isset($_GET['Locationerror'])) 
		{
			$Locationerror = $_GET['Locationerror'];
			echo $Locationerror;
		}
?>
	

	<br>
	<br>

	<label id='hotelc' for="Hotel">Hotel:</label>
 	<select name="Hotel" class="form-control" style="width:200px;"  />
	<option  value="">Choose a Hotel</option>
	<option id="Best Western"  value="Best Western">Best Western</option>
		<option id="Hyatt" value="Hyatt">Hyatt</option>
			<option id="Hampton Inn" value="Hampton Inn">Hampton Inn</option>

	<option id="Holiday Inn" value="Holiday Inn">Holiday Inn</option>
		<option id="Hilton Garden" value="Hilton Garden">Hilton Garden</option>
	<option id="Mariott" value="Marriott">Marriott</option>
</select>
 	<?php if(isset($_GET['Hotelerr1'])) 
 	{
 		$Hotelerr1 = $_GET['Hotelerr1'];
			echo $Hotelerr1;
		}
?>
	

<br>
	<br>
	<label id='hotelc' for="RoomCost">Room Price:</label>
	
	<select name="RoomCost" class="form-control" id="Roomcost" style="width: 260px; border-color: black;" value="<?php if(isset($_POST['RoomCost'])) echo $_POST['RoomCost'];
	?>" >
		<option value="">CHOOSE A ROOM</option>
		<option value="120">$120 Standard room per night</option>
			<option value="140" class="form-control">$140 Queen size room per night</option>
		<option value="160" class="form-control">$160 King size room per night</option>
	</select>
	<?php 
	if(isset($_GET['Roomerror'])) 
	{
		$Roomerror = $_GET['Roomerror'];
			echo $Roomerror;

	}
	
?>
	<br>
	<br>
	<label id='hotelc' for="GuestNum">Number of Rooms:</label>

	<input type="text" name="GuestNum" class="form-control"style="width: 80px;" id="Guestnum" />
	<?php if(isset($_GET['Guesterror'])) 
	{
		$Guesterror = $_GET['Guesterror'];
			echo $Guesterror;
		}

?>
	

	<br>
	<br>
	<label id='hotelc' for="FirstName">First Name:</label>
	<input type="text" name="FirstName"  class="form-control" style="width:200px; "/>
	<?php 
		if(isset($_GET['Nameerror'])) 
		{
			$Nameerror= $_GET['Nameerror'];
			echo $Nameerror;
			;
		}
?>
	

	<br>
	<br>
	<label id='hotelc' for="LastName">Last Name:</label>
	<input type="text" class="form-control" name="LastName" style="width:200px; "/>
	<?php 
	if(isset($_GET['LastNameerr']))
	{
		$LastNameerr = $_GET['LastNameerr'];
		echo $LastNameerr;
	}


	?>
	<br>
	<br>
	<label id='hotelc' for="Email">Email:</label>
	<input type="text" name="Email" class="form-control" style="width:200px; " />
	<?php if(isset($_GET['emailerror'])) 
	{
		$emailerror = $_GET['emailerror'];
					echo $emailerror;

	}

?>
	

<br><br>

<label id='hotelc' for="ConfirmEmail">Confirm Email:</label>
	<input type="text" name="ConfirmEmail" class="form-control" style="width:200px; "/>
	<?php if(isset($_GET['EmailCeerror']))  
	{
		$EmailCeerror = $_GET['EmailCeerror'];
					echo $EmailCeerror;

	}

?>
	

	<br>
	<br>
	<label id='hotelc' for="PhoneNum">Phone Number:</label>
	<input type="text" name="PhoneNum" class="form-control" style="width:200px; " />
	<?php if(isset($_GET['Phonerror'])) 
	{
		$Phonerror = $_GET['Phonerror'];
			echo $Phonerror;
		}
?>
	
<br>
<br>
<h2 id="reserve">Payment Information</h2>
<br>
<br>
<label id='hotelc' style="margin-top: -10px;">Name of owner Card:</label>
<input type="text" name="cardName" class="form-control" style="width:200px; padding: 10px;" />
<?php if(isset($_GET['cardNamerror']))

{			$cardNamerror = $_GET['cardNamerror'];
			echo $cardNamerror;
		}
 ?>
	
<br>
<br>
<label id='hotelc'>Type of Card: </label>
<select id="Cardselect"name="cardType" class="form-control" style="width: 200px; border-color: black;">
	<option value="">Choose a card type</option>
	<option value="Credit Card">Credit Card</option>
	<option value="Debit Card">Debit Card</option>
	<option value="Visa Card">Visa Card</option>
	<option value="Master Card">Master Card</option>
</select>
<?php if(isset($_GET['cardTyerror'])) 
{
	$cardTyerror = $_GET['cardTyerror'];
			echo $cardTyerror;
}
?>
<br>
<br>
<label id='hotelc'for="CardNum">Card Number: </label>
<input type="numbers" name="CardNum" class="form-control"  style="width:200px; "/>
<?php if(isset($_GET['cardNumerror'])) 
{	$cardNumerror = $_GET['cardNumerror'];
			echo $cardNumerror;
		}
?>
	
<br>
<br>
<label id='hotelc' for="expirationDate">Expiration Date:</label>
<input type="text" name="expirationDate" placeholder="mm/yy" class="form-control" style="width:200px; " />
<?php if(isset($_GET['expireerror'])) 
{
	$expireerror = $_GET['expireerror'];
echo $expireerror;
}

?>
	

<br>
<br>
<br>
<button  id="res" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-3 rounded" type="submit" name="paySub">submit</button>

      


</script>
</form>
</center>
</script>
</body>
<br>
<?php include '../views/footer.php' ?>

</html>
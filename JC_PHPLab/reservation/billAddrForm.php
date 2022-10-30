<!DOCTYPE html>
<html lang="en">

<style type="text/css">

</style>
<body>
	<br>
	
<center><form style="text-align: center; font-size: 20px; background-color:salmon; width: 500px; height: 400px; border-radius: 10px;" action="../reservation/BillAddr.php" method="post">
	<br>
	<h2 style="text-decoration: underline;">Billing Address</h2>
	<label  id="hotel2" for="billAddr">Address:	</label>

		<input id="InputHotel" type="text" name="billAddr"  class="form-control" style="width:200px;" />
		<?php if(isset($_GET['billAddError'])){ $billAddError = $_GET['billAddError']; echo $billAddError; } ?>
	<br>
	<br><label id="hotel2" for='city'>City:</label>
		<input id="InputHotel" type="text" name="city" class="form-control" style="width:200px;" />
		<?php if(isset($_GET['cityerror'])){ $cityerror = $_GET['cityerror']; echo $cityerror; } ?>
	<br>
	<br>
	<label  id="hotel2" for="state">State:</label>
		<input id="InputHotel" type="text" name="state" class="form-control"  style="width:100px;" />
		<?php if(isset($_GET['stateerror'])){ $stateerror = $_GET['stateerror']; echo $stateerror; } ?>
	<br>
	<br>
	<label  id="hotel2" for="zipCode">Zip Code:</label>
		<input id="InputHotel" type="text" name="zipCode" class="form-control" style="width:200px;" />
		<?php if(isset($_GET['zipCodeERROR'])){ $zipCodeERROR = $_GET['zipCodeERROR']; echo $zipCodeERROR; } ?>
	<br>
	<br>
	<button id="billbut" name="billBut" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-3 rounded" >submit</button>

</form>
</center>
</body>
<br>
<?php include '../views/footer.php' ?>

</html>
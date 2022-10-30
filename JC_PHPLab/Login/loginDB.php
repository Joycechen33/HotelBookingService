<?php include '../databaseFolder/DatCon.php'; ?>

<?php 
if(isset($_POST['logSub']))

{
	if(!empty($_POST['userName']) && !empty($_POST['psw'])){

	$SLD = "SELECT * FROM signup WHERE userName=:userName AND psw=:psw";
	$SLDRES = $conDB->prepare($SLD);
	$userName = $_POST['userName'];
	$psw = $_POST['psw'];
	//$ConfirmPSW = $_POST['ConfirmPSW'];
	$SLDRES->execute(array(':userName'=> $userName, ':psw'=>$psw));

	
	$SLDRES->rowCount();
	if($SLDRES==true)
	{
		$userName = $_POST['userName'];
		$psw = $_POST['psw'];


		while ($tb1 = $SLDRES->fetch()) {
			$userName = $tb1['userName'];

			
			$signmsg = " Welcome " . "<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <i class='fas fa-user-alt' style='font-size:24px;'></i>" . $userName;

		}

			header('Location:../review/reviewForm1.php?signmsg=' . $signmsg);

		
   }
 

}
else{
$usermsg = $pswmsg = "";

	if(empty($_POST['userName']))
	{
		$usermsg = "please enter your username";
	}

if(empty($_POST['psw']))
	{
		$pswmsg= "please enter your password";
	}
	
	header('Location:../Login/login.php?usermsg=' . $usermsg . '&pswmsg=' . $pswmsg);
}
}

?>
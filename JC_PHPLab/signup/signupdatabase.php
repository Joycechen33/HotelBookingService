<?php include '../databaseFolder/DatCon.php'; ?>
<?php include '../views/header.php' ?>
<style type="text/css">

</style>
<?php 
if(isset($_POST['signupbut']))
{
	if(!empty($_POST['userName']) && !empty($_POST['psw']) && !empty($_POST['ConfirmPSW']) && !empty($_POST['Email']))
	{
		$userName = trim(filter_input(INPUT_POST, 'userName'));
		$psw = trim(filter_input(INPUT_POST, 'psw'));
		$ConfirmPSW = trim(filter_input(INPUT_POST, 'ConfirmPSW'));
	$Email = trim(filter_input(INPUT_POST, 'Email'));
	$INSERTSTMT2 = "INSERT INTO signup(userName, psw, ConfirmPSW, Email) VALUES(:userName, :psw, :ConfirmPSW, :Email)";

	$INsertDT = $conDB->prepare($INSERTSTMT2);
	
	$INsertDT->execute(array(':userName' => $userName, ':psw'=> $psw, ':ConfirmPSW' => $ConfirmPSW, ':Email'=> $Email));

	if($INsertDT)
	{

		echo 
 "<p style='font-size:20px;'>Welcome " . "<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <i class='fas fa-user-alt' style='font-size:24px;'></i> " . $userName . "</p>";
		 echo "<form method='post' action='../review/reviewForm1.php'><input type='hidden' id='userName' name='userName' value='" . $userName ."' /></form>";

	if($_POST['psw'] !== $_POST['ConfirmPSW'])
	{
		$Confirmpswmsg = "please enter the same password";
		header('Location:../signup/signup.php?Confirmpswmsg=' . $Confirmpswmsg);


}
 header('Location:../review/reviewForm1.php');

}
}
else{
$Errormsguser = $Errormsgpsw = $ErrorConf = $msgEmail="";

if(empty($_POST['userName']))
	{
		$Errormsguser =  "please enter your username";

	}
	
	if(empty($_POST['psw']))
	{
		$Errormsgpsw =  "please enter your password";

	}
	
	if(empty($_POST['ConfirmPSW']))
	{
		$ErrorConf= "please confirm your password";
	}
	
	if(empty($_POST['Email']))
	{
		$msgEmail =  "please enter your Email";


	}
	
		header('Location:../signup/signup.php?Errormsguser=' .$Errormsguser . '&Errormsgpsw=' . $Errormsgpsw . '&ErrorConf=' . $ErrorConf . '&msgEmail=' . $msgEmail);
	

}


}
?>

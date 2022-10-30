 <?php include '../header.php' ?>
     <?php require_once '../databaseFolder/DatCon.php'?>

<?php

if(isset($_POST['DELsub']))
{

 
	$CommentsID = $_POST['CommentsID'];


$DELETE = $conDB->prepare("DELETE FROM review WHERE CommentsID =?");
//$DELETE->bindParam(':CommentsID', $CommentsID, PDO::PARAM_INT);
$DELETEXE = $DELETE->execute([$CommentsID]);

	//if($DELETE == true){


	if($DELETEXE){

    $messageDel = "<br><br>this data deleted success" . $CommentsID;
    }

else{
   $messageDel = "this data not delete success";
   header('Location:../review/reviewInsert.php?messageDel='.$messageDel);

}


}
header('Location:../review/reviewForm1.php?messageDel=' . $messageDel);


?>
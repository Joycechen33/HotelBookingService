<?php include '../databaseFolder/DatCon.php'; ?>

<?php


if(isset($_POST['UpBut']))
{
	$userName = $_POST['userName'];
	$CommentsID = $_POST['CommentsID'];
	$Comments = $_POST['Comments'];

//	$updatestmt = "";
	//echo 'Username: '.$userName.' CommentsID: '.$CommentsID.' Comments: '.$Comments;
	$updRes = $conDB->prepare("UPDATE review SET Comments=? WHERE CommentsID = ?");
		$updRes->bindParam(':Comments', $Comments, PDO::PARAM_STR); 

		$updRes->bindParam(':CommentsID', $CommentsID, PDO::PARAM_INT);

	$updRes->execute([$Comments, $CommentsID]);

	//$Recordcnt = $updRes->rowCount();

	if($updRes === false)
	{

		$updmsg = "not update";
	}
	else
	{
				$updmsg = "update success";

	}
	//echo $cnt.' rows updated ';

}
		header('Location:../review/SELECTDBREVIEW.php?updmsg=' .$updmsg . "&userName=" . $userName . "&Comments=" .$Comments . "&CommentsID=". $CommentsID);


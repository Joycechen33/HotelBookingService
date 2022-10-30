<?php

$databaseName= "mysql:host=localhost;dbname=hotelphplab";
$user_name = "root";
$psw1 = "";

$conDB = new PDO($databaseName, $user_name, $psw1);

if($conDB == true)
{
	echo "";

}
else
{
	echo "you have not successfully connected";
}

	?>
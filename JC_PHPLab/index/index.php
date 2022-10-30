<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Hotelcss.css">
	<title>HOTEL</title>
	<?php include '../views/header.php' ?>
	<style type="text/css">
	

	

	</style>

</head>
<br>
<body>
	<center><h2>Welcome to JC booking service </h2></center>
	<br>
	<center><a href="../reservation/reservation.php" style="font-size:20px; background-color:purple;">Book a reservation</a><a href="../review/reviewForm1.php" style="font-size:20px; background-color:salmon;">Write a review</a></center>
	<br>
	<center>
		<img src="../image/hotel2.jpg"  class="hotelimg" >
		<img src="../image/hotel3.jpg" class="hotelimg" >
		<img src="../image/hotel4.jpg" class="hotelimg">
		<img src="../image/hotel5.jpg" class="hotelimg">
	</center>
	<br>
	<center><p style="text-align:center;">Enjoy your staying in the hotel with your family or yourself! </p></center>
<br>

	<center><div id="pic"><img src="../image/BestWestern.jpg" id="hotelIMG2"><br>
		<p id= "imgt">Best Western</p><p id="imgt">Manhattan, NY</p></div>
<div id="pic"><img src="../image/Hyatt.jpg" id="hotelIMG2"><br><p id="imgt" >&nbsp;Hyatt</p><p id="imgt"> Montpelier, VT</p></div>
<div id="pic"><img src="../image/hamptoninn.jpg" id="hotelIMG2"><br><p id="imgt">Hampton Inn</p><p id="imgt">San Jose, CA</p></div>
<div id="pic"><img src="../image/HoldayInn.jpg" id="hotelIMG2"><br><p id="imgt">Holiday Inn</p><p id="imgt">Scranton, PA</p></div>
<div id="pic"><img src="../image/HiltonGar.jpg" id="hotelIMG2"><br><p id="imgt">Hilton Garden</p><p id="imgt">Seattle, WA</p></div>
<div id="pic"><img src="../image/mariott.jpg" id="hotelIMG2"><br><p id="imgt">Mariott</p><p id="imgt">Miami, FL</p></div>
</center>


<br>

<br>
<script>
var HotelImage = 0;
HotelIMGSL();

function HotelIMGSL() {
  var PicIMG;
  var imgHo = document.getElementsByClassName("hotelimg");
  for (PicIMG = 0; PicIMG < imgHo.length; PicIMG++) {
    imgHo[PicIMG].style.display = "none";  
  }
  HotelImage++;
  if (HotelImage > imgHo.length) {HotelImage = 1}    
 
 imgHo[HotelImage-1].style.display = "block";  
  setTimeout(HotelIMGSL, 3000);
}

</script>

</body>
<?php include '../views/footer.php' ?>
</html>
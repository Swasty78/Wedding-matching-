<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<title>Wedding management system</title>
<link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/8b96c9defd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/main_css.css">
    <link rel="stylesheet" type="text/css" href="css/home_css.css">
    </head>

<body>
<style>
body {
  background-image: url('pic/2.jpg');
  height: 100vh;
    -webkit-background-size:cover;
    background-size: cover;
    background-position: center center;
}
</style>
<?php
include "final_connect.php";
include "three.html";
$conn = OpenCon();

echo "PLANNER TABLE";
$sql ="SELECT * from planner";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	echo "<table border='2' style=\"width:100%\">
  <tr>
    <th>Planner Id</th>
    <th>Planner Name</th>
    <th>Phone</th>
	<th>Payment</th>
  </tr>";
	while ($row= mysqli_fetch_assoc($result)) {
	echo "<tr><td>".$row["pln_id"]."</td><td>".$row["pln_name"]."</td><td>".$row["phone"]."</td><td>".$row["pln_payment"]."</td>";
	}
	echo "</table>";
}
else {
echo "0 result";
}
 echo "VENUE TABLE";
$sql ="SELECT * from venue";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	echo "<table border='2' style=\"width:100%\">
  <tr>
    <th>Venue Name</th>
    <th>Venue Address</th>
    <th>Price_Range</th>
  </tr>";
	while ($row= mysqli_fetch_assoc($result)) {
	echo "<tr><td>".$row["v_name"]."</td><td>".$row["v_address"]."</td><td>".$row["v_price"]."</td>";
	}
	echo "</table>";
}
else {
echo "0 result";
}
?>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<footer class="display-7 bottomline">HELPLINE 017229*****<br>© 2024 | FSM Event Management || All Rights Reserved.</footer>

</body>
</html>
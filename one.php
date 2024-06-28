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

<body>

<?php
include "final_connect.php";
include "one.html";
$conn = OpenCon();

$sql ="SELECT * from package";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	echo "<table border='2' style=\"width:100%\">
  <tr>
    <th>Package Id</th>
    <th>Package Name</th>
    <th>Package Details</th>
	 <th>Price</th>
  </tr>";
	while ($row= mysqli_fetch_assoc($result)) {
	echo "<tr><td>".$row["p_id"]."</td><td>".$row["p_name"]."</td><td>".$row["p_details"]."</td><td>".$row["p_price"]."</td>";
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
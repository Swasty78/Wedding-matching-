<?php
include "final_connect.php";
$conn = OpenCon();
if(isset($_GET["query"])) {
    $search = mysqli_real_escape_string($conn, $_GET["query"]);
    $sql ="SELECT * from venue where v_price <= ".$search;
} else {
    $sql ="SELECT * from venue";
}
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	echo "<table border='2' style=\"width:100%\">
  <tr>
    <th>Venue_Name</th>
    <th>Venue_Address</th>
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
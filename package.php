<?php
include "final_connect.php";
$conn = OpenCon();
if(isset($_GET["query"])) {
    $search = mysqli_real_escape_string($conn, $_GET["query"]);
    $sql ="SELECT * from package where p_price <= ".$search;
} else {
    $sql ="SELECT * from package";
}
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
	echo "<table border='2' style=\"width:100%\">
  <tr>
    <th>Package_Id</th>
    <th>Package_Name</th>
    <th>Package_Details</th>
	 <th>Package_Price</th>
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
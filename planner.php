<?php
include "final_connect.php";
$conn = OpenCon();
if(isset($_GET["query"])) {
    $search = mysqli_real_escape_string($conn, $_GET["query"]);
    $sql ="SELECT * from planner where pln_payment <= ".$search;
} else {
    $sql ="SELECT * from planner";
}
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	echo "<table border='2' style=\"width:100%\">
  <tr>
    <th>Planner_Id</th>
    <th>Planner_Name</th>
    <th>Phone</th>
	<th>Planner_Payment</th>
  </tr>";
	while ($row= mysqli_fetch_assoc($result)) {
	echo "<tr><td>".$row["pln_id"]."</td><td>".$row["pln_name"]."</td><td>".$row["phone"]."</td><td>".$row["pln_payment"]."</td>";
	}
	echo "</table>";
}
else {
echo "0 result";
}
?>

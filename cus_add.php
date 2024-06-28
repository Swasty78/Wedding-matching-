<?php
$id = $_POST['id'];
$c_name = $_POST['c_name'];
$c_pass = $_POST['c_pass'];

    //create connection
    $conn = new mysqli('localhost','root','','final');
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
   $stmt=$conn->prepare("INSERT INTO `cust_log`(`c_id`, `c_name`, `c_pass`)
     values(?,?,?)");
      $stmt->bind_param("iss",$id,$c_name,$c_pass);
      $stmt->execute();
     }
     $stmt->close();
     $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
<style>
body {
  background-image: url('pic/12.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<br>
   <center>
    <div style="margin-top: 150px"></div>
    <p>New record inserted sucessfully<p>
    <a href="front.html"><input type="submit" value="GO TO HOME FOR LOG IN"></a>
       </p>
    </center>
</body>
</html>
<?php
$name = $_POST['name'];
$pass = $_POST['pass'];
$id = $_POST['id'];
    //create connection
    $conn = new mysqli('localhost','root','','dbms');
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
   $stmt=$conn->prepare("insert into user(name,pass,id)
     values(?,?,?)");
      $stmt->bind_param("sii",$name,$pass,$id);
      $stmt->execute();
      echo "New record inserted sucessfully";
     }
     $stmt->close();
     $conn->close();
?>
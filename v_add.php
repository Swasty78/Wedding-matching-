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
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">

            <div class="topnav" id="myTopnav">
			  <a class="navbar-brand " href="#"><i class="fas fa-hiking mr-2"></i>FSM EVENT MANAGEMENT</a>
			  <a href="front.html" >    <script src="https://kit.fontawesome.com/8b96c9defd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="main_css.css">
    <link rel="stylesheet" type="text/css" href="home_css.css">


</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">

            <div class="topnav" id="myTopnav">
			  <a class="navbar-brand " href="#"><i class="fas fa-hiking mr-2"></i>FSM EVENT MANAGEMENT</a>
			  <a href="front.html" >HOME <span class="sr-only"></span></a>
			  <a href="final_admin.php" class="active">ADMIN <span class="sr-only"></span></a>
			  <a href="show_pak.php">PACKAGE</a>
			  <a href="show_pln.php">PLANNER</a>
			  <a href="show_venue.php">VENUE</a>
				<div class="right" id="myTopnav">
					<a href="https://www.facebook.com/farah.meem.5/" class="btn btn-primary btn-sm active mr-2 mb-2"
								aria-pressed="true">Our Facebook
							</a>
					<a href="cus_log.html"
								class="btn btn-info btn-sm active"> Sign up for booking</a>
					<a href="cus_log.php"
								class="btn btn-info btn-sm active">Log In </a>
				</div>
			</div>

    </div>
    </nav><span class="sr-only"></span></a>
			  <a href="final_admin.php" class="active">ADMIN <span class="sr-only"></span></a>
			  <a href="show_pak.php">PACKAGE</a>
			  <a href="show_pln.php">PLANNER</a>
			  <a href="show_venue.php">VENUE</a>
				<div class="right" id="myTopnav">
					<a href="https://www.facebook.com/farah.meem.5/" class="btn btn-primary btn-sm active mr-2 mb-2"
								aria-pressed="true">Our Facebook
							</a>
					<a href="cus_log.html"
								class="btn btn-info btn-sm active"> Sign up for booking</a>
					<a href="cus_log.php"
								class="btn btn-info btn-sm active">Log In </a>
				    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i></a>
				</div>
			</div>

    </div>
    </nav>
<?php
$v_name = $_POST['v_name'];
$v_address = $_POST['v_address'];
$v_price = $_POST['v_price'];
    //create connection
    $conn = new mysqli('localhost','root','','final');
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
   $stmt=$conn->prepare("INSERT INTO `venue`(`v_name`, `v_address`, `v_price`)
     values(?,?,?)");
      $stmt->bind_param("ssi",$v_name,$v_address,$v_price);
      $stmt->execute();
     
     }
     $stmt->close();
     $conn->close();
?>
  <center> <div style="margin-top:100px">New record inserted sucessfully<a href="project.html"><input type="submit" value="add more"></a>
   </div>
    </center>
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
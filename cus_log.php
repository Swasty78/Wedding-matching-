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
  background-image: url('pic/1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">

            <div class="topnav" id="myTopnav">
			  <a class="navbar-brand " href="#"><i class="fas fa-hiking mr-2"></i>FSM EVENT MANAGEMENT</a>
			  <a href="front.html" >HOME <span class="sr-only"></span></a>
			  <a href="final_admin.php">ADMIN <span class="sr-only"></span></a>
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
    </nav>
<?php
$error= "";
include("final_connect.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 

	$c_name=addslashes($_POST['c_name']); 
	$c_pass=addslashes($_POST['c_pass']); 

	$conn = OpenCon();

	$sql="SELECT c_id FROM cust_log WHERE c_name='$c_name' and c_pass='$c_pass'";
	$result = mysqli_query($conn, $sql);

	$count= mysqli_num_rows($result);

	echo $count;
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{
		$row= mysqli_fetch_assoc($result);
		$_SESSION['login_user']=$c_name;
		$_SESSION['login_id']=$row['c_id'];
		header("location:onea.html");
	}
	else 
	{
		$error="Your Login Name or Password is invalid";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Page</title>

<style type="text/css">
body
{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;

}
label
{
	font-weight:bold;

	width:100px;
	font-size:14px;

}
.box
{
	border:#666666 solid 1px;

}
</style>
</head>
<body bgcolor="#FFFFFF">
<center>
	<div align="center">
		<div style="width:300px; border: solid 1px #333333; " align="left">
			<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login Form</b></div>

			<div style="margin:30px">

				<form action="" method="post">
				<label>UserName  :</label><input type="text" name="c_name" class="box"/><br /><br />
				<label>Password  :</label><input type="password" name="c_pass" class="box" /><br/><br />
				<input type="submit" value=" Submit "/><br />

				</form>
				<div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			</div>
		</div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Membership</title>
    <meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/thumbs.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/sForm.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.iosslider.min.js"></script>
	<script>
	$(document).ready(function(){
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<style>
		
		th{
    background-color:pink;
    border: 2px black solid;
    text-align: center;
	color: black;
  }

  .data{
   background-color:lightgreen;
   border: 2px black solid;
   color: black;
  }

tr{
    height:auto;
    width: 100%;
    word-wrap: break-word;
    border: 2px black solid;
}

		
	</style>
	</head>
	<body class="page1" id="top">
    
    <div class="topnav">
    
    
      <a><i class="fa fa-envelope-o">wedctmadurai@gmail.com</i></a>
       <a><i class="fa fa-phone"> 9486162261</i></a>
       
       <div class="topnav-right">
       
       <a><i class="fa fa-facebook"> </i></a>
        <a><i class="fa fa-twitter"> </i></a>
        
  
</div></div>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" ></a></h1>
					<div class="menu_block ">
						<a href="donate.html" class="donate">DONATE</a>
						<div class="clear"></div>
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="index-1.html">About</a></li>
								<li><a href="index-2.html">Objectives</a></li>
								<li><a href="index-3.html">Media</a></li>
								<li><a href="index-4.html">Contacts</a></li>
								<li class="current"><a href="index-5.html">Admin</a></li>
								<li><a href="user.html">Membership</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
        </header>
<br>
<?php

$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "wedct";

$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}


$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "admin@gmail.com" && $password == "admin123") 
{
    
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn) { 
    echo "Connection failed: ".mysqli_connect_error(); 
    exit;
}

$sql= "SELECT*FROM users";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error:" .mysqli_error($conn);
    exit;
}
echo "<center>";
echo "<table border='2' style='border: 2px solid black; border-collapse: collapse;'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>";

while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td class='data'>" . $row['name'] . "</td>";
    echo "<td class='data'>" . $row['email'] . "</td>";
    echo "<td class='data'>" . $row['phone'] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</center>";
}
else
{
    echo '<script>alert("INVALID LOGIN");
window.location.href="login.html";</script>';
}
$conn->close();
?>
<br>

</body>
        </div>
		<div class="bottom_block">
		
			<div class="container_12">
				
				
					<h3>Stay Connected</h3>
					<div class="text1">Follow Us on Social Media Accounts </div>
					
					<div class="socials">
						<a href="#"><div class="fa fa-twitter"></div></a>
						<a href="#"><div class="fa fa-facebook"></div></a>
						<a href="#"><div class="fa fa-instagram"></div></a>
					</div>
				</div>
			</div>
<footer>
    <div class="container_12">
        <div class="grid_12">
            <div class="copy">
                Life &copy; 2022 | <a href="#">Privacy Policy</a> 
            </div>
        </div>
    </div>
</footer>
</html>
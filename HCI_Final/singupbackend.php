<?php 

  $conn= mysqli_connect("localhost" , "root", "","systemm") or die (mysqli_error($conn));

$uname= $_POST['myname'];
$Fname= $_POST['Fname'];
$Pname= $_POST['Pname'];
$Lname= $_POST['fname'];



$sql="insert into users(FirstName, UserName, Password, LastName) values('$uname', '$Fname', '$Pname','$Lname')";

$q=mysqli_query($conn,$sql) or die(mysqli_error($conn));








?>

<center><h1> REGISTER COMPLETE!</h1></center>  


<center><a href="Login.php">Click here to log in</a></center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container1">
    
<div>
<img class="img" src="download.jpg" alt="">
</div>

<div class="text">
    
<p><h1>Welcome to</h1></p>
<p><h1>La Salle's</h1></p>
<p><h1>Management System</h1></p>



</div>


</div>

<div class="container2">

<div class="box1">

<div>
<form action="loginbackend.php" method="post">

               <h1><img src="images.png" alt="" width="300"></h1>
               <?php if(isset($_GET['error'])){ ?>
                   <p class="error"> <?php echo $_GET['error'];?></p>
                
               <?php }?>
               
               <label>User Name/ID</label>
               <input class="input1" type="text" placeholder="Username" name="uname"><br>

               <label>Password</label>
               <input class="input2" type="password" placeholder="Password" name="password"><br>

               <a href="signup.php" class="signup">Sign Up!</a>
               

               <button type="submit">Login</button>

               




</form>

</div>


</div>


</div>

</body>
</html>
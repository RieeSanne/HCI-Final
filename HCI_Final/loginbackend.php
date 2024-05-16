<?php 
session_start();
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)){
        header("Location: Login.php?error=User Name is Required");
        exit();
    } else if (empty($pass)){
        header("Location: Login.php?error=Password is Required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE UserName='$uname' AND Password='$pass'"; 
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);

            $_SESSION['UserName'] = $row['UserName'];
            $_SESSION['FirstName'] = $row['FirstName'];
            $_SESSION['ID'] = $row['ID'];

            // Redirect the user to the home page with the user ID included in the URL
            header("Location: Home.php?id=" . $row['ID']);
            exit();
        } else {
            header("Location: Login.php?error=Incorrect Username or Password");
            exit();
        }
    }
} else {
    header("Location: Login.php");
    exit();
}
?>

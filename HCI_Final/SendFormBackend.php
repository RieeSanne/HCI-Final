<?php
$conn = mysqli_connect("localhost", "root", "", "systemm") or die(mysqli_error($conn));

// Check if all form fields are set
if (isset($_POST['Fname'], $_POST['Lname'], $_POST['Cname'], $_POST['Aname'], $_POST['Ename'], $_POST['Dname'], $_POST['bday'])) {
    // Escape all form inputs to prevent SQL injection
    $Fname = mysqli_real_escape_string($conn, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
    $Cname = mysqli_real_escape_string($conn, $_POST['Cname']);
    $Aname = mysqli_real_escape_string($conn, $_POST['Aname']);
    $Ename = mysqli_real_escape_string($conn, $_POST['Ename']);
    $Dname = mysqli_real_escape_string($conn, $_POST['Dname']);
    $Bname = mysqli_real_escape_string($conn, $_POST['bday']);

    // SQL query to insert data into the receive table
    $sql = "INSERT INTO receive (FirstN, LastN, Citizenship, Address, EmailAddress, Description, Birthday) 
            VALUES ('$Fname', '$Lname', '$Cname', '$Aname', '$Ename', '$Dname', '$Bname')";

    // Execute the query and handle any errors
    if (mysqli_query($conn, $sql)) {
        echo "<center><h1>REGISTER COMPLETE!</h1></center>";
        echo "<center><a href='Login.php'>Click here to log in</a></center>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "All form fields are required!";
}
?>

<?php
session_start();
$name=$_POST["name"];
$mobilenum=$_POST["mobilenum"];
$email=$_POST["email"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Task";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contactus (name, mobilenum, email)
VALUES ('$name', '$mobilenum', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    $_SESSION['ins']=true;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $_SESSION['error']=true;
}

header("location:index.php"); 
mysqli_close($conn);
?>
<?php
$name=$_POST['name'];
$password=$_POST['password'];
session_start();

$message="";
if(count($_POST)>0) {
$con = mysqli_connect("localhost" ,"root", "", "urvashi") or die('unable to connect');

$result = mysqli_query($con,"SELECT * FROM user WHERE username='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row[id];
$_SESSION["name"] = $row[name];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:index1.php");
}
?>

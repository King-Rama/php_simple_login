<?php
// Call the connection file to connect to the db
require_once('connection.php');

//Assign form result to php code

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email_ad'];
$username = $_POST['uname'];
$password = $_POST['pword'];

$hashed_password = MD5($password);

//SQL code for saving info to database

$sql = "INSERT INTO user (first_name,last_name,email,username,password)
    VALUES ('$first_name','$last_name','$email','$username','$hashed_password')";

$result = mysqli_query($connection, $sql);
if ($result)
{
    header("Location: login.html");
}
else
{
    echo "Error : ".$sql;
}    

?>
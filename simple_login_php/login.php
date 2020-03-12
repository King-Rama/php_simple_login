<?php
//Connect to the dba_close

require_once('connection.php');

$username = $_POST['uname'];
$password = $_POST['pword'];
$hashed_password = MD5($password);

//fetch data from db

$sql = "SELECT * FROM user WHERE username='$username' AND password='$hashed_password' ";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0 ) 
{
   
    header("Location: welcome.html");
}
else
{
    echo "Wrong Email or Password Entered!";
}



?>

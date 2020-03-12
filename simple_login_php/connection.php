<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "test_kahm";

// connection to the database
$connection = mysqli_connect($servername,$username,$password,$database_name);

if(!$connection)
{
    echo "Connection to the database: $database_name failed...";
}


?>

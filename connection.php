<?php

$host = "localhost";
$username = "id20905494_root";
$password = "Kj@123456789";
$dbname = "id20905494_registration";
$conn = mysqli_connect("localhost","id20905494_root","Kj@123456789","id20905494_registration");


if($conn)
{
    
}
else
{
    echo "Connection Faild".mysqli_connect_error();
}

?>
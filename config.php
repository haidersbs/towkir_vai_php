<?php

$serverhost = "localhost";
$username = "root";
$password = "";
$dbname = "sayed";


$conn = mysqli_connect($serverhost,$username,$password,$dbname);

if($conn){
    echo "done";
}else{
    die(mysqli_connect_error);
}


?>
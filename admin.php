<?php

session_start();

 if(!isset($_SESSION['active'])){
     header('Location: login.php');
 }




?>




<h1>hello</h1>
<?php
if(file_exists(dirname(__FILE__)."./config.php")){
    require_once(dirname(__FILE__)."./config.php");
}


// session_start();

//  if(isset($_SESSION['active'])){
//      header('Location: admin.php');
//  }


$emailaddress = mysqli_query($conn, "SELECT * FROM student WHERE email = '".$_POST['email']."'");
$password = mysqli_query($conn, "SELECT * FROM student WHERE password = '".$_POST['password']."'");


if(isset($_POST['submit'])){
     define('Email', $emailaddress);
     define('Password', $password);

    $email  = $_POST ['email'];
    $psw    = $_POST ['password'];

    if($email == $emailaddress && $psw == $password){
        $_SESSION['active'] = "";
        header('Location: admin.php');
    }else{
        $fail = "User not match";
    }
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="centerposition">
                        <div class="form-items">
                            <h3>LOG IN</h3>
                            <p>Fill in the data below.</p>
                            <form class="requires-validation" novalidate action="" method="POST" >
    
    
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                     <div class="valid-feedback">Email field is valid!</div>
                                     <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>
    
                              <br>
    
    
                               <div class="col-md-12">
                                  <input class="form-control" type="password" name="password" placeholder="Password" required>
                                   <div class="valid-feedback">Password field is valid!</div>
                                   <div class="invalid-feedback">Password field cannot be blank!</div>
                               </div>
    
    
                              <br>
    
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                              <label class="form-check-label">I confirm that all data are correct</label>
                             <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div>
                            <?php 
                            
                                if(isset($fail)){
                                    echo "<h2>".$fail."</h2>";
                    
                                
                                }?>
                            <br>
                                <div class="d-flex justify-content-between">
                                    <div class="form-button mt-3">
                                        <button id="submit" type="submit" class="btn btn-primary">Log In</button>
                                    </div>
                                    <div class="form-button mt-3">
                                        
                                        <button class="btn btn-success">

                                            <a href="index.html" class="text-light text-decoration-none">Create New Account</a>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script> 

if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
}


</script>
 <script src="main.js"></script>
</body>
</html>
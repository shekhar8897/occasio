<?php
    session_start();
    include('../config/dbconn.php');
?>


<!DOCTYPE html>
<html>
<head>
    <title>Ocassio</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
     <link rel="icon" type="image/png" href="./assets/img/ocasio.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="https://track.gaconnector.com/gaconnector.js" type="text/javascript"></script>
<script type="text/javascript">gaconnector2.track("772a039da1c927afbd481859b74598d3");</script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <style type="text/css">
        .marginbrandfocus{
            margin-bottom: 5% !important;
        }
        .footer p{
            font-size: .8rem;
            }
    </style>

    
</head>
<body>
    
<?php
// including the database connection file
include("../config/dbconn.php");
if(isset($_POST['submit']))
{   
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $pass1=md5($password);
    $salt="a1Bz20ydqelm8m1wql";
    $pass1=$salt.$pass1;

    // checking empty fields
    if(empty($firstname)  || empty($lastname) || empty($address) || empty($email) || empty($contact) || empty($username) || empty($password)) {    
            
        if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty!</font><br/>";
        }

        if(empty($lastname)) {
            echo "<font color='red'>Lastname field is empty!</font><br/>";
        }

        if(empty($address)) {
            echo "<font color='red'>Address field is empty!</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }

        if(empty($contact)) {
            echo "<font color='red'>Contact field is empty!</font><br/>";
        }
        
        if(empty($username)) {
            echo "<font color='red'>Username field is empty!</font><br/>";
        }    

        if(empty($password)) {
            echo "<font color='red'>Password field is empty!</font><br/>";
        }    
    } else {    
        //updating the table
        $query = "INSERT INTO users (firstname, lastname, address, email, contact, username, password) 
                VALUES ('$firstname','$lastname','$address','$email','$contact','$username','$pass1')";

        $result = mysqli_query($dbconn,$query);
        
        if($result){
            //redirecting to the display page. In our case, it is index.php
       header("Location: ../index.php");
        }
        
    }
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!--<a class="navbar-brand" href="#">Ocassio</a>-->
  <a class="navbar-brand" href="../index.php"><img src="../assets/img/ocasio.png" class="img-fluid" alt="Responsive image" style="height: 50px;width:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MEN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
         
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          WOMEN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
          
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          KIDS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          HOME & LIVING
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
         
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ELECTRONICS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Coming soon</a>
         
        </div>
      </li>
  </ul>
      <span class="navbar-text">
     <ul class="navbar-nav mr-auto">
         <li class="nav-item ">
            <a class="nav-link " href="./user_login_page.php" >
              LOGIN
            </a>
          </li>
        <li class="nav-item ">
                <a class="nav-link " href="./user_signup.php" >
              SIGNUP
                </a>
          </li>         
     </ul>
    </span>
  </div>
</nav>
<br>
<br>
<br>
<section>
  <div class="container card">
    <div class="modal-header">
        <span class="row">
            <span class="col-md-12">
                <h2>SIGNUP</h2>
            </span>
            
        </span>
        
      </div>    
      
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
             <img class="d-block w-100" src="../assets/img/ocasio.png" >
             
                    <!--<center><h3 class="font-weight-bold"> Welcome to Ocassio </h3></center>-->
                
            </span>
            </div>
            <div class="col-md-6">
                <form class="form" name="form" action="" method="POST">
                  <div class="form-group">
                        <label for="first_name" class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control" id="first_name" maxlength="40" name="firstname" size="20" required />
                            
                    </div>

                <div class="form-group">
                        <label for="last_name" class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control" id="last_name" maxlength="40" name="lastname" size="20" required />
                           
                    </div>
                  
                <div class="form-group">
                        <label for="last_name" class="bmd-label-floating">Address</label>
                        <input type="text" class="form-control" id="address" maxlength="40" name="address" size="20" required />
                           
                    </div>
                  
                 <div class="form-group">
                        <label for="email" class="bmd-label-floating">Email</label>
                        <input type="email" class="form-control" id="email" maxlength="60" name="email" required />
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                    </div>
                <div class="form-group">
                        <label for="last_name" class="bmd-label-floating">Username</label>
                        <input type="text" class="form-control" id="username" maxlength="40" name="username" size="20" required />
                           
                    </div>
        
                 <div class="form-group">
                        <label for="mobile" class="bmd-label-floating">Contact No</label>
                        <input type="number" class="form-control" id="contact"  name="contact" maxlength="10" required />
                            <span class="bmd-help">We'll never share your mobile number with anyone else.</span>
                    </div>
                  <div class="form-group">
                        <label for="last_name" class="bmd-label-floating">Password</label>
                        <input type="password" class="form-control" id="password" maxlength="40" name="password" size="20" required />
                           
                    </div>
              
    
<br>

               <center><button type="submit" class="btn btn-raised btn-info" id="submit" name="submit">SIGNUP here</button></center>

              </form>
            </div>
      </div>
      </div>
    </div>
  </div>

</section>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

</body>
</html>

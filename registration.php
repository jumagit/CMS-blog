
<?php include_once("inc/db.php"); ?>
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>BLUEBIRD</title>
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    <!-- Bootstrap Core CSS -->   

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">  
    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">

    
    </head>

    <body>


<?php  include "admin/inc/function.php"; ?>

<!-- Navigation -->

<body>


  

 



<?php


global $connection;
global $message;

if (isset($_POST['submit'])) {

//getting out values from the from after submission
$username = $_POST['username'];
$password = $_POST['password'];
$Email = $_POST['email'];

$query = "SELECT Username FROM users WHERE Username = '$username'";

$username_query = mysqli_query($connection,$query);

if (mysqli_num_rows($username_query) > 0) {

$message = "<p class='alert alert-warning'> Sorry $username exists in the database !!!! </p>";
}
else{


if (!empty( $username) && !empty( $password ) && !empty( $Email) ) {

//cleaning up values before they are entered into the database
$username = mysqli_escape_string($connection,$username);
$password = mysqli_escape_string($connection,$password);
$Email = mysqli_escape_string($connection,$Email);

//hashing the password
$hashed_password = password_hash($password,PASSWORD_BCRYPT, array('cost'=>12));


//inserting data into the database
$query="INSERT INTO users (Email,Username,Password,user_status) ";
$query.="VALUES ('$Email','$username','$hashed_password','Subscriber') ";

$select_db_query = mysqli_query($connection,$query);
if (!$select_db_query) {
die("CHECK YOUR QUERY PLEASE".mysqli_error($connection));   
}

$message ="<p><center class='alert alert-success'><i class='fa fa-ok'></i> You have successifully registered!</center></p>";

}
else{

$message = "<p><center class='alert alert-danger'>There may be errors in form filling.</center></p>";

}


}




}







?>

<header class="p-3 bg-info mb-5">
        
         <h3 class="text-center text-white m-5 font-weight-bold">
      REGISTER HERE

    </h3>
    </header>


<!-- Page Content -->

<div class="container mt-3">

  




   

    <div class="row mt-5">

        <div class="col-md-6 mx-auto">

             <div class="card ">

                        

                    <div class="card-body">

             <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">

           

             <h5><?php echo "$message";  ?></h5>
                    <div class="form-group">
                        <label for="username" class="sr-only">username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username" >
                    </div>
                     <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" >
                    </div>
                     <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="key" class="form-control" placeholder="Password" >
                    </div>
            
                   

                   <button class="btn btn-info text-white btn-md btn-block" name="submit" id="btn-login"> Register   <i class="fa fa-paper-plane"></i></button>
                </form>

                        
                    </div>
          

              <div class="card-footer text-center bg-info ">

                        <a href="index.php" class="text-white">Go to Login <i class="fa fa-arrow-circle-right"></i></a>
                        
               </div>
                   
                    
                </div>

            
        </div>
        
    </div>
    
</div>






<?php// include "inc/footer.php";?>

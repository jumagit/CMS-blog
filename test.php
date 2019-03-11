<?php include "inc/db.php";


global $connection; 
if (isset($_POST['key'])&&isset($_POST['email'])&&isset($_POST['username'])) {
$Firstname = $_POST['username'];
$password = $_POST['key'];
$Email = $_POST['email'];

$Firstname = mysqli_escape_string($connection,$Firstname);
$password =  mysqli_escape_string($connection,$password);
$Email =  mysqli_escape_string($connection,$Email);


// //hashing the password
$hashed_password = password_hash($password,PASSWORD_DEFAULT);


$query="INSERT INTO users (Username,Email,Password) ";
$query.="VALUES ('$Firstname','$Email','$hashed_password')";

$select_db_query = mysqli_query($connection,$query);
if ($select_db_query) {
	
	 // header("location:homeindex.php");
	echo "okey";
}else{
	echo "no";
	// header("location:homeindex.php");
 
}
// } else {
// 	echo "noooooo";
// }
}

?>
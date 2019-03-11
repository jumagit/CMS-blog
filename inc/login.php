<?php session_start();?>

<?php include "db.php";?>

<?php 

if (isset($_POST['Login'])) {

 $User = $_POST['Username'];
 $Pass = $_POST['Password'];

 $User = mysqli_escape_string($connection,$User);
 $Pass = mysqli_escape_string($connection,$Pass);
  

$query = "SELECT * FROM users WHERE Username = '{$User}' ";

$select_db_query = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_db_query)) {

 $username = $row['Username'];
 $firstname = $row['Firstname'];
 $lastname = $row['Lastname'];
 $password = $row['Password'];
 $email = $row['Email'];
 $user_role = $row['user_status'];
 $StdNo = $row['StdNo'];
 $user_image = $row['user_image'];

}

$hashback_password = crypt($Pass,$password);

if ($username === $User && $password === $hashback_password) {

$_SESSION['Username'] = $username;
$_SESSION['Password'] = $password;
$_SESSION['Email'] = $email;
$_SESSION['user_status'] = $user_status;
$_SESSION['user_image'] = $user_image;
header("Location:../admin");	

}

else
{
header("Location:../index.php");
}

}
?>

    <?php


$connection = mysqli_connect('localhost','root','','project');

if (isset($_POST['Submit'])) {

$Firstname = $_POST['Firstname'];

$Lastname = $_POST['Lastname'];

$username = $_POST['Username'];

$password = $_POST['Password'];

$Email = $_POST['Email'];

$user_image =  $_FILES['user_image']['name'];

$user_image_temp =  $_FILES['user_image']['tmp_name'];

move_uploaded_file($user_image_temp, "../images/$user_image");

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query="INSERT INTO users (Firstname,Lastname,Email,Username,Password,user_status,user_image) ";
$query.="VALUES ('$Firstname','$Lastname','$Email','$username','$hashed_password','Subscriber','$user_image') ";

$insert_query = mysqli_query($connection,$query);

if ($insert_query) {
echo "<p style='color:green' class='lead'>User successifully created"." ". "<a href='./USERS.php'>View Users</a></p>";
}

}

?>



    <form  action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
  <label>Firstname</label>
  <input type="text" name="Firstname" class="form-control">
  </div>
  <div class="form-group">
  <label>Lastname</label>
  <input type="text" name="Lastname" class="form-control">
  </div>

  <div  class="form-group">
  <label  for="user_image">User image</label>
  <input type="file" name="user_image" >
  </div>

  <div class="form-group">
  <label>Username</label>
  <input type="text" name="Username" class="form-control">
  </div>
  <div class="form-group">
  <label>Email</label>
  <input type="email" name="Email" class="form-control">
  </div>

  <div class="form-group">
  <label>Password</label>
  <input type="password" name="Password" class="form-control">
  </div>


  <div>
  <button class="btn btn-primary  pull-left" type="submit" name="Submit">SignUp</button>
   </div>
    </form>

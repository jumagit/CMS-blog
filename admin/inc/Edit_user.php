  <?php
  //edit posts with id
  $connection = mysqli_connect('localhost','root','','project');

  if (isset($_GET['p_id'])) {

  $the_user_id = $_GET['p_id'];

  if (!$the_user_id) {
  echo "juma waaa";
  }


  }


  $queryy = "SELECT * FROM users WHERE StdNo = $the_user_id";

  $select_user_id = mysqli_query($connection, $queryy);

  while($row = mysqli_fetch_assoc($select_user_id))
  {
  $Firstname = $row['Firstname'];
  $Lastname = $row['Lastname'];
  $username = $row['Username'];
  $Email = $row['Email'];
  $user_status = $row['user_status'];
  $user_image = $row['user_image'];

  }

  if (isset($_POST['UPDATE_USER'])) {

  $firstname = $_POST['Firstname'];
  $lastname = $_POST['Lastname'];
  $username = $_POST['Username']; 
  $email = $_POST['Email'];
  $user_status = $_POST['user_status'];
  $user_image =  $_FILES['update_image']['name'];
  $user_image_temp =  $_FILES['update_image']['tmp_name'];
  move_uploaded_file($user_image_temp,"../images/$user_image");

  // if (empty($user_image)) {
  //   $query = "SELECT * FROM users WHERE StdNo= $the_user_id ";
  //   $user_query = mysqli_query($query, $connection);
  //   while ($row= mysqli_fetch_assoc($user_query)) {
  //    $user_image = $row['user_image'];   }  }

   $query = "UPDATE users SET Firstname = '{$firstname}', Lastname='{$lastname}', Email = '{$email}', Username = '{$username}', user_status = '{$user_status}',user_image = '{$user_image}' WHERE StdNo = $the_user_id ";

  $insert_query = mysqli_query($connection,$query);

  if ($insert_query) {
  echo "<p style='color:green' class='lead'>User successifully created"." ". "<a href='./USERS.php'>View Users</a></p>";
  }else{
    die("You check". mysqli_error($connection));
  }

  }

  ?>

  <form  action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
  <label>Firstname</label>
  <input type="text" name="Firstname" class="form-control" value="<?php echo $Firstname; ?>">
  </div>
  <div class="form-group">
  <label>Lastname</label>
  <input type="text" name="Lastname" class="form-control" value="<?php echo $Lastname; ?>">
  </div>

  <div class="form-group">
  <label>Username</label>
  <input type="text" name="Username" class="form-control" value="<?php echo $username; ?>">
  </div>
  <div class="form-group">
  <label>Email</label>
  <input type="email" name="Email" class="form-control" value="<?php echo $Email; ?>">
  </div>

  
  <div  class="form-group">
  <label>User image image</label>
  <img  width="100" src="../images/<?php echo $user_image; ?>" alt="image to show">
  <input type="file" name="update_image" >
  </div>

  <label>User role</label>
  <select class="form-control" name="user_status" style="width:25%">
  <option value="Subscriber"><?php echo $user_status;  ?></option>
  <?php  
  if ($user_status == 'Admin') {
  echo "<option value='Subscriber'>Subscriber</option>";
  } 
  else{
  echo "<option value='Admin'>Admin</option>";
  }

  ?>

  </select>

  <br>
  <input type="submit" class="btn btn-primary btn-block" name="UPDATE_USER" value="Publish ">
  
  </form> 

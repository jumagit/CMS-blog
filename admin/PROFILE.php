        <?php include"inc/adminheader.php"; ?>
      
        <?php  

        if (isset($_SESSION['Username'])) {

        $User = $_SESSION['Username'];

        $query = "SELECT * FROM users WHERE Username = '{$User}'";

        $select_user_query = mysqli_query($connection,$query);


        while ($row = mysqli_fetch_array($select_user_query)) {
        $StdNo = $row['StdNo'];  
        $Firstname = $row['Firstname'];
        $Lastname = $row['Lastname'];
        $username = $row['Username'];      
        $user_status = $row['user_status'];
        $Email = $row['Email'];
        $user_image = $row['user_image'];
        }

        if (isset($_POST['UPDATE_PROFILE'])) {

        $firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $username = $_POST['Username'];     
        $email = $_POST['Email'];
        $user_status = $_POST['user_status'];
        $new_user_image =  $_FILES['user_image']['name'];
        $new_user_image_temp =  $_FILES['user_image']['tmp_name'];
        move_uploaded_file($new_user_image_temp,"../images/$new_user_image");

        if (!empty($firstname) && !empty($lastname) && !empty($usertname) && !empty($email) && !empty($new_user_image)) {
              
        $query = "UPDATE users SET Firstname = '{$firstname}', Lastname='{$lastname}', Email = '{$email}', Username = '{$username}', user_status = '{$user_status}',user_image = '{$new_user_image}' WHERE Username = '{$User}' ";

        $insert_query = mysqli_query($connection,$query);

        if (!$insert_query) {
         echo "not working juma";
        }

        
        }



        }

        
        
        }

        ?>
        <div id="wrapper">

        <?php include"inc/adminnavigation.php"; ?>

        <div id="page-wrapper">

        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
        <div class="col-lg-12">

       <h2 class="page-header">Profile</h2>

       
        <!-- some post on page -->

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
        <label>User image</label>
        <img  width="100" src="../images/<?php echo $user_image; ?>" alt="image to show">
        <input type="file" name="user_image" >
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

        </select><br>



        <div>
        <input type="submit" class="btn btn-primary" name="UPDATE_PROFILE" value="Publish">
        </div>
        </form> 



        </div>
        </div>
        <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <?php include"inc/adminfooter.php"; ?>
        <?php include"inc/adminheader.php"; ?>
         <?php 
         $connection = mysqli_connect('localhost','root','','project'); ?>
        <div id="wrapper">

        <?php include"inc/adminnavigation.php"; ?>

        <div id="page-wrapper">

        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
        <div class="col-lg-12">
        <h2 class="page-header">Uploads</h2>


      <?php 

   if (isset($_POST['submit'])) {
   
      $doc_name = $_POST['doc_name'];
       $name = $_FILES['myfile']['name'];
       $tmp_name = $_FILES['myfile']['tmp_name'];


       if ($name && $doc_name) {
          $Location = "admin/document/$name";
          move_uploaded_file($tmp_name, $Location);
          $query = "INSERT INTO document ( name,path ) ";
          $query .="VALUES('$doc_name','$Location')";
          $insert_query =mysqli_query($connection,$query);
          // header("Location:document.php");
          echo "<a href='document.php'> View the Upload</a>";


       }else{
        die("file upload failed ".mysqli_error($connection));
       }




   }
      ?>





        <!-- Admin view -->
      <form action="upload.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
          <label for="document" class="pull-left">Document Name</label><br>
     <input type="text" name="doc_name" class="form-control">
          <br>
          <input type="file" name="myfile" class="">
      </div>
          <input type="submit" name="submit" value="upload">
      </form>


        <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <?php include"inc/adminfooter.php"; ?>
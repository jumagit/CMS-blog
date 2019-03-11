      <?php include"inc/adminheader.php"; ?>
      <?php
      $connection = mysqli_connect('localhost','root','','project');
      ?>
      <div id="wrapper">

      <?php include"inc/adminnavigation.php"; ?>

      <div id="page-wrapper">

      <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
      <div class="col-lg-12">
      <i class="fa fa-upload pull-right"><a href="upload.php">  Upload</a></i>
     
      <h2 class="page-header">Software</h2>


      <table class='table table-bordered table-hover'>
      <thead  class="bg-primary">
      
      <th>Tool</th>
      <th><i class="fa fa-download"></i></th>
      <th><i class="fa fa-key"></th>
      </thead>
      <tbody>
      <?php 

      $sql = " SELECT * FROM document";
      $query_work = mysqli_query($connection,$sql);
      while ($row = mysqli_fetch_array($query_work)) {
      $id = $row['id'];
      $name = $row['name'];
      $path = $row['path'];

      echo "<tr>";
    
      echo "<td>{$name}</td>";
      echo "<td><a href='download.php?dow={$path}'> <i class='fa fa-download'></a></td>";
      echo "<td><a href='delete.php?delete={$id}'> <i class='fa fa-key'></a></td>";

      echo "</tr>";

      }


      ?>

      </tbody>

      </table>





      <!-- /.row -->

      </div>
      <!-- /.container-fluid -->

      </div>
      <!-- /#page-wrapper -->

      </div>
      <!-- /#wrapper -->
      <?php include"inc/adminfooter.php"; ?>
    <?php include"inc/adminheader.php"; ?>
    <div id="wrapper">

    <?php include"inc/adminnavigation.php"; ?>

    <div id="page-wrapper">

    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
    <div class="col-lg-12">
    <h2 class="page-header">Comments</h2>
  
    <!-- some post on page -->

    <?php
    if (isset($_GET['source'])) {

    $source = $_GET['source'];

    }else{

   $source = '';

    }
    
    switch ($source) {
    case 'view_comments':
       include"inc/view_all_comments.php";
    break;

    
    default:
      include"inc/view_all_comments.php";
    break;
    }





    ?>


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
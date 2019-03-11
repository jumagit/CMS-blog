    <?php include"inc/adminheader.php"; ?>

   

    <div id="wrapper">

    <?php include"inc/adminnavigation.php"; ?>

    <div id="page-wrapper">

    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
    <div class="col-lg-12">
    <h2 class="page-header">Users</h2>

    <!-- some post on page -->

    <?php
    if (isset($_GET['source'])) {

    $source = $_GET['source'];

    }else{

   $source ='';

    }
    switch ($source) {
   

    case 'Add_user':
    include"inc/Add_users.php";
    break;

    case 'Edit_user':
    include"inc/edit_user.php";
    break;

    case 'view_users':
    include"inc/view_all_users.php";
    break;
    
    case 'delete':
    include"inc/delete_page.php";
    break;


    default:
    include"inc/view_all_users.php";
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
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

    ?>



        <div id="wrapper">

        <?php include"inc/adminnavigation.php"; ?>

        <div id="page-wrapper">

        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
        <div class="col-lg-12">

       <h2 class="page-header">User details</h2>


 <section id="details">


   

        <div class="row">

            <div class="col-md-6">

                <img src="../images/<?php echo $user_image; ?>" alt="image" class="img-responsive img-thumbnail"
                 style="height: 430px;width:100%" >
                
            </div>


            <div class="col-md-6">


               <blockquote class="panel panel-default">
                 
                <h4> Username: <span class="text-success"><?php echo $username; ?></span></h4>
              

               </blockquote>

               <blockquote class="panel panel-default">
                 
                <h4> Firstname: <span class="text-success"><?php echo $Firstname; ?></span></h4>
              
              

               </blockquote>

               <blockquote class="panel panel-default">
                 
                <h4>Lastname: <span class="text-success"><?php echo $Lastname; ?></span></h4>
              
              

               </blockquote>

               <blockquote class="panel panel-default">
                 
               <h4> Status: <span class="text-success"><?php echo $user_status; ?></span></h4>         
              

               </blockquote>

               
               <blockquote class="panel panel-default">
                 
               <h4> Email: <span class="text-success"><?php echo $Email; ?></span></h4>         
              

               </blockquote>

              <a href="USERS.php?source=Edit_user&p_id=<?php echo $StdNo;  ?>" class="btn btn-block btn-success"> <i class="fa fa-edit "></i>   Edit post</a>


               
                
            </div>
            
     
        
    </div>
     
 </section>


  <?php

        
        
        }

        ?>





























       
        <!-- some post on page -->

       



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
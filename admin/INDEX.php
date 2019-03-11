			<?php include"inc/adminheader.php"; ?>

   
			<div id="wrapper">

			<?php include"inc/adminnavigation.php"; ?>

			<div id="page-wrapper">


        <section class="text-center" style="margin-top: 12px;">

          <div class="row">

            <div class="col-md-6">

              <img src="../images/busi.png" style="height: 200px">
              
            </div>

            <div class="col-md-6">

             <?php

           if (isset($_SESSION['Username'])) {

          $Username = $_SESSION['Username'];

          $query = "SELECT * FROM users WHERE Username = '$Username' ";

          $select_db_query = mysqli_query($connection,$query);

          while ($row = mysqli_fetch_assoc($select_db_query)) {

            $user_image = $row['user_image'];
          }
          
          echo "<img src='../images/$user_image' class='img-thumbnail img-responsive ' style='height: 200px;width:200px;margin-top:12px; '>"; 
          }

          ?>
              
            </div>
            
          </div>
          
        </section>


			<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">
			<div class="col-lg-12">
			<h2 class="page-header text-center" style="color: purple;font-weight: bold;">NOMINON CONTENT MANAGEMENT SYSTEM</h2><br><br>


		

<!-- hosts -->

       
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


                        <?php
         global $connection;
          $query = "SELECT * FROM post ";
          $select_from_query = mysqli_query($connection,$query);
          $post_number = mysqli_num_rows($select_from_query);
          echo "<div class='huge'>$post_number</div>";

                        ?>
                  
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

                         <?php
         global $connection;
          $query = "SELECT * FROM comments ";
          $select_from_query = mysqli_query($connection,$query);
          $comment_number = mysqli_num_rows($select_from_query);
          echo "<div class='huge'>$comment_number</div>";

                        ?>
                    
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-group fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

                     <?php
         global $connection;
          $query = "SELECT * FROM comments ";
          $select_from_query = mysqli_query($connection,$query);
          $comment_number = mysqli_num_rows($select_from_query);
          echo "<div class='huge'>$comment_number</div>";

                        ?>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-th fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      
                       <?php
         global $connection;
          $query = "SELECT * FROM categories ";
          $select_from_query = mysqli_query($connection,$query);
          $categories_number = mysqli_num_rows($select_from_query);
          echo "<div class='huge'>$categories_number</div>";

                        ?>
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                <!-- /.row -->

<!-- end of admin content -->




			</div>
			<!-- /.row -->

			</div>
			<!-- /.container-fluid -->

			</div>
			<!-- /#page-wrapper -->

			</div>
			<!-- /#wrapper -->
			<?php include"inc/adminfooter.php"; ?> 
            <div class="col-md-4">


            <!--  form -->

            <!-- Blog Search Well -->
            <div class="card mb-2">

            <div class="card-header bg-success">

              <h4 class="text-white text-center">SEARCH</h4>

            </div>

            <div class="card-body">
           <form action="search.php" method="POST">
            <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
            <button name="submit" class="btn btn-default" type="submit">
            <i class="fa fa-search"></i>
            </button>
            </span>
            </div>
            </form>

            </div>
            <!-- /.input-group -->
            </div>

      <!--  LOGIN SECTION -->
           <section id="login">

            <div class="card">

            <div class="card-header bg-success">
             
             <h4 class="text-white text-center">LOGIN</h4>

            </div>

            <div class="card-body">
            
            <form action="inc/login.php" method="POST">
            <div class="form-group">
            <input type="text" name="Username" class="form-control" placeholder="Enter your name">   
            </div>
            <div class="input-group">
            <input type="password" name="Password" class="form-control" placeholder="Enter your password">
            <span class="input-group-btn">
            <button type="submit" name="Login" class="btn btn-primary">Login</button>
            </span>   
            </div>
            </form>   

            </div>

           </div>

            </section> 













            <!-- Blog Categories Well -->
            <div class="card mt-2 mb-2">
            <?php 

            $query= "SELECT * FROM categories ";
            $cat_select_query = mysqli_query($connection,$query);
            ?>
            
            <div class="card-header bg-success">

            <h4 class="text-white text-center">CATEGORIES</h4>

            </div>

            <div class="card-body">
            <div class="col-lg-12">
            <ul class="list-unstyled">


            <?php 
            while ($row= mysqli_fetch_assoc($cat_select_query)) {
            $cat_title = $row['cat_title'];
            $cat_id = $row['cat_id'];
            echo"<li><span class='glyphicon glyphicon-file'><span>
            <a href='category.php?category=$cat_id'> {$cat_title}</a>
            </li> ";
            }
            ?>

            </ul>
            </div>
            <!-- /.col-lg-6 -->

            </div>
            <!-- /.row -->
            </div>











            <!-- Side Widget Well -->
            <div class="card">

            <div class="card-header bg-success">

            <h4 class="text-white text-center">RECENTLY ADDED POSTS</h4>

           </div>
            <div class="card-body">
               <?php 
           global $connection;
            $query= "SELECT * FROM post ORDER BY post_id DESC LIMIT 20 ";
            $post_select_query = mysqli_query($connection,$query);

            while ($row= mysqli_fetch_assoc($post_select_query)) {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
           ?>

           <?php


            echo"<div class='row'>
            <div class='col-md-10'>

            <ul >
            
             <li> <a href='posts.php?p_id={$post_id}'> {$post_title}</a></li>
            </ul>
            </div>
            </div> ";
            }




            ?>
                 
            </div>
            </div>

            </div>
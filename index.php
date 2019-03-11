    <?php  include "inc/header.php"; ?>



    <header class="p-3 bg-info mb-5">
        
         <h3 class="text-center text-white m-5 font-weight-bold">
      THE BLOG

    </h3>
    </header>
   
    <!-- Page Content -->

    <div class="container">

     
     

    <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
   
    <?php 
    $per_page = 5;

    if (isset($_GET['page'])) {

    $page = $_GET['page'];

    }else{

    $page = '';

    }
    if ($page ==''||$page ==1) {
    $page_1 = 0;
    }
    else{
    $page_1 = ($page * $per_page)-$per_page;
    }


    $query= "SELECT * FROM post WHERE post_status = 'Published' ";
    $count_query = mysqli_query($connection,$query);
    $post_count = mysqli_num_rows($count_query);


    if ($post_count < 1) {
       
       echo "<h1 class='text-center'>No Posts Available</h1>";

    }else{



    $post_count = ceil($post_count/$per_page);
    

    $query= "SELECT * FROM post WHERE post_status = 'Published' limit $page_1,$per_page  ";
    $post_query = mysqli_query($connection,$query);
    while ($row= mysqli_fetch_assoc($post_query)) {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_date = $row['post_date'];
    $post_content = substr($row['post_content'],0,100);
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_tags = $row['post_tags'];
    $post_image = $row['post_image'];



    $query= "SELECT * FROM categories WHERE cat_id = {$post_id}  ";
    $cat_query = mysqli_query($connection,$query);

    while ($row= mysqli_fetch_assoc($cat_query)) {
    $cat_title = $row['cat_title'];
    $cat_id = $row['cat_id'];


    }

    ?>




    <div class='card '>

        <div class="card-header">
        <h3 class="text-center"> <a href='posts.php?p_id=<?php echo $post_id;  ?>'><?php echo $post_title;  ?></a>
        </h3> 
        </div>

        <h6 class="ml-2">
        <i class="fa fa-pencil"></i> Written By <a href="post_author.php?author=<?php echo $post_author;  ?> & p_id=<?php echo $post_author;  ?> "><?php echo $post_author;  ?></a>
        </h6>
       

       <div class="card-body p-2">

            <div class='row'>
            <div class='col-md-4'>
            <img class="img-responsive img-thumbnail pull-left" src="images/<?php echo $post_image; ?>" alt="" style='height:170px;width:200px' >
            </div>

            <div class='col-md-8'>
            <h5><i class="fa fa-time"> Posted on: <?php echo $post_date;  ?></i></h5>

            <p class="lead"><?php echo $post_content;  ?><br> 
            <b style="color:green;text-align: right;">[.....................................]</b></p>

            <a  class="btn btn-success" href="posts.php?p_id=<?php echo $post_id;  ?>">Read More</a>
            </div>

        </div>

    </div>
</div>
<hr>


    

    <?php }} ?>

    <!-- First Blog Post -->



    </div>



    <!-- Blog Sidebar Widgets Column -->
    <!--  sidebar -->
    <?php   include"inc/sidebar.php";?>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->


    <!-- Pager -->
    <ul class="pagination justify-content-center mb-4">

    <?php

    for ($i=0; $i <$post_count ; $i++) { 

    if ($i == $page) {
    echo "<li class='page-item'><a  class= 'page-link active_link' href='index.php?page={$i}'>$i</a></li>";
    }
    else{
    echo "<li class='page-item'><a href='index.php?page={$i}'  class= 'page-link' >$i</a></li>";
    }
    }

    ?>

    </ul>

    <?php include"inc/footer.php"; ?>
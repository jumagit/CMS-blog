        <?php  include "inc/header.php"; ?>

   <header class="p-3 bg-info mb-5">
        
      <h3 class="text-center text-white m-5 font-weight-bold">
      SEARCH RESULTS

    </h3>
    </header>
    
        <!-- Page Content -->
        <div class="container-fluid">

         

        <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
       
        <?php  


   if (isset($_POST['submit'])) {
   $search = $_POST['search'];

  $query ="SELECT * FROM post WHERE post_tags LIKE '%$search%'";
  $search_post_query = mysqli_query($connection,$query);

if (!$search_post_query) {
 die("not working".mysqli_error($connection));

}

$count = mysqli_num_rows($search_post_query);

if ($count==0) {
 echo "<h3 class='display-3 bg-danger p-2 text-white'>Ooops!!!, No post like that so far!!!</h3>";
}
else {
        
        while ($row= mysqli_fetch_assoc($search_post_query)) {
        $post_title = $row['post_title'];
        $post_date = $row['post_date'];
        $post_content = substr($row['post_content'],0,100);
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_tags = $row['post_tags'];
        $post_image = $row['post_image'];
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


        <?php } }}?>



        </div>

        <!-- Blog Sidebar Widgets Column -->
        <!--  sidebar -->
        <?php   include"inc/sidebar.php";?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->

        <?php include"inc/footer.php"; ?>
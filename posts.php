<?php 
include ("inc/header.php");?>
<?php 
include ("inc/db.php"); ?>
<!-- navigation -->



<!-- heading above -->
 <header class="p-3 bg-info mb-5">
        
      <h3 class="text-center text-white m-5 font-weight-bold">
      POST DETAILS

    </h3>
    </header>


<div class="container">
<div class="row">
<div class="col-md-8">

<?php
if (isset($_GET['p_id'])) {

$the_post_id = $_GET['p_id'];

$query = "UPDATE post SET post_views_count = post_views_count + 1 WHERE post_id = {$the_post_id}";
$view_query = mysqli_query($connection,$query);


$queryy = "SELECT * FROM post WHERE post_id = $the_post_id";
$select_all_posts = mysqli_query($connection,$queryy);
while($row = mysqli_fetch_assoc($select_all_posts))

{
$post_id =  $row['post_id'];
$post_title =  $row['post_title'];
$post_author =  $row['post_author'];
$post_date =  $row['post_date'];
$post_image =  $row['post_image'];
$post_content =  $row['post_content'];
$post_views_count = $row['post_views_count']
?>


<!-- First Blog Post -->

<h2 class="font-weight-bold text-success"><a><?php echo $post_title; ?></a></h2>
<h6 class="lead"> by <a href="index.php"><?php echo $post_author; ?></a>

<small>on: <i class="fa fa-time"></i><?php echo $post_date; ?></small>

</h6>

<!-- bread cramp -->
<ul class="breadcrumb mb-2 ">
			<li class="breadcrumb-item p-2">
			<i class="fa fa-home"></i>  <a href="index.php">Home</a>
			</li>

			<li class="breadcrumb-item p-2">
			<i class="fa fa-laptop"></i> Post views 
			<span class="badge badge-pill badge-danger">
			<?php  echo $post_views_count; ?>
		    </span>
		   </li>
 
			<li class="breadcrumb-item p-2">
			<i class="fa fa-comments"></i> Comments
			<span class="badge badge-pill badge-danger">09</span>
			</li>

			<li class="breadcrumb-item p-2">
			<i class="fa fa-thumbs-up"></i> Likes
			<span class="badge badge-pill badge-danger">10</span>
			</li>
</ul>

<!-- end bed cramp -->


<img class="img-responsive" src="images/<?php echo $post_image; ?>" style='height: 400px;width: 600px' >
<hr>
<p class="lead"><?php echo $post_content; ?></p>






<?php }}
else{
header("Location:index.php");
} ?>



<div class="card">

<div class="card-header bg-danger">
<h4 class="text-white">Leave a Comment:</h4>
</div>

<div class="card-body">

<form role="form" action="" method="POST">
<div>
<input type="text" name="comment_author" placeholder="Your name" class="form-control"><br>
</div>
<div>
<input type="email" name="comment_email" placeholder="Your email" class="form-control"><br>
</div>
<div class="form-group">
<textarea class="form-control " rows="3" name="comment_content editor1"></textarea>
</div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>

</div>

<?php
if (isset($_POST['submit'])) {

$comment_email = $_POST['comment_email'];

$comment_author = $_POST['comment_author'];

$comment_content = $_POST['comment_content'];

$comment_status = 'Unapproved';

$the_post_id = $_GET['p_id'];


if (!empty($comment_email) && !empty($comment_author) && !empty($comment_content)) {

$query = "INSERT INTO comments(comment_post_id,comment_email,comment_content,comment_date,comment_author,comment_status,In_response_to)";

$query .= " VALUES ($the_post_id,'$comment_email','$comment_content',now(),'$comment_author','$comment_status','ANY')";
$comment_query = mysqli_query($connection,$query);

if (!$comment_query) {
die("Noooo".mysqli_error($connection));
}

$query = "UPDATE post SET post_comment_count = post_comment_count + 1 WHERE post_id = {$the_post_id}";
$view_query = mysqli_query($connection,$query);
if (!$view_query) {
	echo "view_query not working";
}
 

}else{
	
	echo "no";
}

}

?>
<!-- Blog Comments -->
<hr>

<?php 

$sql = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
$sql .= "AND comment_status = 'Approved' ";
$sql .= "ORDER BY comment_id DESC ";

$select_comments = mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($select_comments))
{
$comment_id =  $row['comment_id'];

$username =  $row['comment_author'];

$comment_status =  $row['comment_status'];

$comment_content =  $row['comment_content'];

$comment_date =  $row['comment_date'];

$comment_post_id = $row['comment_post_id'];


?>

<div class='media'>
<a class='pull-left' href='#'>
<img class='media-object' src='images/12.jpg' alt='' height="80px" width="90px" style="border: 1px solid silver">
</a>
<div class='media-body'>
<h4 class='media-heading'> <?php echo $username;  ?>
    <?php echo "   "; ?>
<small><?php echo $comment_date;  ?></small>

</h4>

<?php echo $comment_content;  ?>
</div>
</div>


<?php }?>

</div>



  <!-- Blog Sidebar Widgets Column -->
    <!--  sidebar -->
    <?php   include"inc/sidebar.php";?>
    </div>
<?php 
include ("inc/footer.php");
?>
<?php 
include ("inc/header.php");?>
<?php 
include ("inc/db.php"); ?>
<!-- navigation -->


<div class="container">
<div class="row">>
<div class="col-md-8">
  <h2 class="page-header">Post author</h2>
<!-- First Blog Post -->

<?php
if (isset($_GET['p_id'])) {

$the_post_id = $_GET['p_id'];
$the_post_author = $_GET['author'];

}
$queryy = "SELECT * FROM post WHERE post_author = '{$the_post_author}'";
$select_all_posts = mysqli_query($connection,$queryy);
while($row = mysqli_fetch_assoc($select_all_posts))

{
$post_id =  $row['post_id'];
$post_title =  $row['post_title'];
$post_author =  $row['post_author'];
$post_date =  $row['post_date'];
$post_image =  $row['post_image'];
$post_content = substr($row['post_content'],0,100);
?>

<h2>
<a href="#"  style='color:green'><?php echo $post_title; ?></a>
</h2>
<p class="lead">
by <a href="index.php"><?php echo $post_author; ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
<hr>
<img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
<hr>
<p class="lead"><?php echo $post_content; ?></p>
<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
<a class="btn btn-warning pull-right" href="index.php" style="text-align: right"><span class="glyphicon glyphicon-chevron-left"></span>  Back </a>
<hr> 

<?php } ?>





</div>

<hr>

<?php 
include ("inc/footer.php");
?>
 <?php
//edit posts with id
$connection = mysqli_connect('localhost','root','','project');

if (isset($_GET['p_id'])) {

$the_post_id = $_GET['p_id'];

}

$queryy = "SELECT * FROM post WHERE post_id = $the_post_id";

$select_post_id = mysqli_query($connection, $queryy);

while($row = mysqli_fetch_assoc($select_post_id))
 {

$post_author =  $row['post_author'];

$post_title =  $row['post_title'];


$post_status =  $row['post_status'];

$post_image =  $row['post_image'];

$post_content = $row['post_content'];

$post_tags =  $row['post_tags'];


$post_date =  $row['post_date'];

}



if (isset($_POST['UPDATE_POST'])) {



$post_author =  $_POST['post_author'];

$post_title =  $_POST['post_title'];

//$post_category_id =  $_POST['post_category_id'];

$post_status =  $_POST['post_status'];

$post_image =  $_FILES['update_image']['name'];

$post_image_temp =  $_FILES['update_image']['tmp_name'];

$post_content = $_POST['post_content'];

$post_tags =  $_POST['post_tags'];

$post_date =  $_POST['post_date'];

global $connection;

move_uploaded_file($post_image_temp,"../images/$post_image");

if (!empty($post_author) && !empty($post_title) && !empty($post_content) && !empty($post_tags) && !empty($post_image) && !empty($post_status) && !empty($post_date)) {
	

$query = "UPDATE post SET post_title = '{$post_title}',post_date = now(),post_author = '{$post_author}',post_status = '{$post_status}', post_tags = '{$post_tags}', post_content = '{$post_content}', post_image = '{$post_image}' WHERE post_id = '{$the_post_id}' ";

$update_post = mysqli_query($connection, $query);

echo "<p class='bg-success'>Post Updated <a href='../POSTS.php?p_id={$the_post_id}'> View Post</a> or <a href='./POSTS.php'>Edit more Posts</a></p>";

if (!$update_post) {
	
die("Juma seems like something wrong has happened".mysqli_error($connection));

}

}


}

?>

<form  action="" method="post" enctype="multipart/form-data">

<div  class="form-group">
<label  for="post_title">Post Title</label>
<input value= "<?php echo $post_title;  ?>"  type="text" name="post_title" class="form-control">
</div>	

<div  class="form-group" >

<select name="post_category"  id="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"

>
<?php

$sql = "SELECT * FROM categories";

$select_categories = mysqli_query($connection,$sql);


while($row = mysqli_fetch_assoc($select_categories))

{

$cat_id =  $row['cat_id'];

$cat_title =  $row['cat_title'];

echo "<option value=''>{$cat_title}</option>";

}



?> 
</select>

</div> 	

<div  class="form-group">
<label  for="post_author">Post Author</label>
<input value="<?php echo $post_author;  ?>" type="text" name="post_author" class="form-control" >
</div>



<div  class="form-group">
<label  for="post_date">Post Date</label>
<input value="<?php echo $post_date;  ?>" type="text" name="post_date" class="form-control">
</div>

<div  class="form-group">
<label  for="post_image">Post image</label>
<img  width="100" src="../images/<?php echo $post_image; ?>" alt="image to show">
<input type="file" name="update_image" >
</div>

<div  class="form-group">
<label  for="post_tags">Post Tags</label>
<input value="<?php echo $post_tags;  ?>" type="text" name="post_tags" class="form-control">
</div>



<div  class="form-group">
<label  for="post_status">Post Status</label>
<input  value="<?php echo $post_status;  ?>"  type="text" name="post_status" class="form-control">
</div> 


<div  class="form-group">
<label  for="post_content">Post Content</label><br>
<textarea  class="form-control" name="post_content" id="" cols="30" rows="10" > <?php echo $post_content;  ?></textarea>
</div>


<div>
<input type="submit" class="btn btn-primary" name="UPDATE_POST" value="Publish Post">
</div>
</form>


		<?php


		$connection = mysqli_connect('localhost','root','','project');


		if (isset($_POST['Create_Post'])) {	

		$post_title =  $_POST['post_title'];

		$post_author =  $_POST['post_author'];

		$post_category_id =  $_POST['post_category_id'];	   

		$post_image =  $_FILES['image']['name'];

		$post_image_temp =  $_FILES['image']['tmp_name'];

		$post_tags =  $_POST['post_tags'];

		$post_content =  $_POST['post_content'];

		//$post_comment_count = 

		
		$post_date = date('d-m-y');

		move_uploaded_file($post_image_temp, "../images/$post_image");


       	if (!empty( $post_title) && !empty( $post_author ) && !empty( $post_image) && !empty( $post_content) && !empty( $post_tags) ) {

		$query = "INSERT INTO post (post_title,Post_category_id,post_author,post_image,post_status,post_content,post_date,post_tags) ";
		$query .= "VALUES('{$post_title}','{$post_category_id}','{$post_author}','{$post_image}','Drafted','{$post_content}',now(),'{$post_tags}')";

		$Create_Post_query= mysqli_query($connection,$query);
		echo "<p style='color:green' class='lead'>Post successifully created"." ". "<a href='./POSTS.php'>View posts</a></p>";

		if (!$Create_Post_query) {

		die("Error happened".mysqli_error($connection));
		}

		}else{
			echo"<h4 class='alert alert-danger'> Fill all the fields first na!!</h4>";
		}	
	    }
			?>



		<form  action="" method="post" enctype="multipart/form-data">

		
		<div  class="form-group">
		<label  for="post_title">Post Title</label>
		<input type="text" name="post_title" class="form-control">
		</div>	


		<div  class="form-group" >
		<label for="cat_title">Category</label>
		<select name="post_category_id" id="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"

		>
		<?php

		$sql = "SELECT * FROM categories";

		$select_categories = mysqli_query($connection,$sql);

		while($row = mysqli_fetch_assoc($select_categories))
		{
		$cat_id =  $row['cat_id'];

		$cat_title =  $row['cat_title'];

		echo "<option value='$cat_id'>{$cat_title}</option>";}
		?> 
		</select>
		</div>

		<div  class="form-group">
		<label  for="post_author">Post Author</label>
		<input type="text" name="post_author" class="form-control">
		</div>

		

		<div  class="form-group">
		<label  for="post_image">Post image</label>
		<input type="file" name="image" >
		</div>

		<div  class="form-group">
		<label  for="post_tags">Post Tags</label>
		<input type="text" name="post_tags" class="form-control">
		</div>



		<div  class="form-group">
		<label  for="post_content">Post Content</label><br>
		<textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
		</div>


		<div>
		<input type="submit" class="btn btn-primary" name="Create_Post" value="Publish Post">
		</div>
		</form>

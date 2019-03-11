
		


		<?php

		$message = '';

		if (isset($_POST['checkboxarray'])) {

		foreach ($_POST['checkboxarray'] as $checkboxvalue) {

		$bulkOptions = $_POST['bulkOptions'];

		switch ($bulkOptions) {
		case 'Published':
		$query = "UPDATE post SET post_status = '{$bulkOptions}' WHERE post_id = $checkboxvalue";
		$Published_query = mysqli_query($connection,$query);
		if ($Published_query) {
			$message = "Successifully published";
		}
		break;

		case 'Drafted':
		$query = "UPDATE post SET post_status = '{$bulkOptions}' WHERE post_id = $checkboxvalue";
		$drafted_query = mysqli_query($connection,$query);
		if ($drafted_query) {
			$message = "Successifully drafted";
		}
		break;

		case 'Deleted':
		$query = "DELETE FROM post WHERE post_id = $checkboxvalue";
		$delete_query = mysqli_query($connection,$query);
		if ($delete_query) {
			$message = "Successifully deleted";
		}
		break;



		default:
		# code...
		break;
		}}}


		?>
		
    <h3 class="hidden alert alert-success"> <span class="glyphicon glyphicon-ok"></span>  <?php  echo $message;  ?></h3>

		<form action="" method="POST">

		<table class="table table-bordered table-hover">

		<div id="bulkOptionscontainer" class="col-xs-4" style="padding: 0px">
		<select class="form-control" name="bulkOptions" id="">
		<option>Select Options</option>
		<option value="Deleted">Delete</option>
		<option value="Published">Publish</option>
		<option value="Drafted">Draft</option>
		<option value="Cloned">Clone</option>
		</select>



		</div>
		<div class="col-xs-4">
		<input type="submit" name="submit" class="btn btn-success" value="Apply"> <a href="./POSTS.php?source=Add_post" class="btn btn-primary">Add new</a>
		</div><br><br>



		<thead  class="bg-primary">
		<th><input type="checkbox"  id="selectAllcheckboxes" ></th>
		<th> Id</th>
		<th>Author</th>
		<th>Category</th>
		<th>Title</th>
		<th>Status</th>
		<th>Image</th>
		<th>Tags</th>
		<th>Views</th>	
		<th>Comments</th>	
		<th>Date</th>
		
		<th>Edit</th>
		<th>Delete</th>
		<th>View </th>

		</thead>
		<tbody>

		<?php   
		
		$connection = mysqli_connect('localhost','root','','project');

		$sql = "SELECT * FROM post ORDER BY post_id DESC ";

		$select_posts = mysqli_query($connection,$sql);

		while($row = mysqli_fetch_assoc($select_posts))
		{
		$post_id =  $row['post_id'];
		$post_author =  $row['post_author'];
		$post_title =  $row['post_title'];
        $post_views_count = $row['post_views_count'];
	    $post_category_id = $row['Post_category_id'];
	    $post_comment_count = $row['post_comment_count'];
		$post_status =  $row['post_status'];
		$post_image =  $row['post_image'];
		$post_tags =  $row['post_tags'];
		$post_content =  $row['post_content'];		
		$post_date =  $row['post_date'];

		echo "<tr>";
		?>
		<td><input type='checkbox' class='checkboxes'  name='checkboxarray[]' value='<?php  echo $post_id; ?>'></td>
		<?php
		echo "<td>{$post_id}</td>";
		echo "<td>{$post_author}</td>";

        $sql = "SELECT * FROM categories WHERE  cat_id = $post_category_id";
		$select_categories_id = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_assoc($select_categories_id)){
		$cat_id =  $row['cat_id'];
		$cat_title =  $row['cat_title'];

		echo "<td>{$cat_title}</td>";
		}		

		echo "<td>{$post_title}</td>";
		echo "<td>{$post_status}</td>";
		echo "<td><img width='100' class='img-responsive' src='../images/$post_image' alt=' no image'></td>";
		echo "<td>{$post_tags}</td>"; 
		echo "<td>{$post_views_count}</td>";	
		echo "<td>{$post_comment_count}</td>";		
		echo "<td>{$post_date}</td>";
		
		echo "<td><a href='POSTS.php?source=Edit_post&p_id={$post_id}'>Edit</a></td>";
		echo "<td><a href='POSTS.php?delete={$post_id}'>Delete</a></td>";
		echo "<td><a href='../posts.php?p_id={$post_id}'>View post</a></td>";
		echo "</tr>";

		}


		?>

		</tbody>

		</table>


		</form>
		
		<?php

		delete_post();

		// global $connection;

		// if (isset($_GET['delete'])) {

		// $the_post_id = $_GET['delete'];

		// $query = "DELETE FROM post WHERE post_id ={$the_post_id}";

		// $delete_query = mysqli_query($connection,$query);

		// header("location:POSTS.php");
		// }
		?>


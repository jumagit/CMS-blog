<?php
// admin change
function admin_user(){
	global $connection;

	if (isset($_GET['admin'])) {
        $the_user_id = $_GET['admin'];
		$query = "UPDATE users SET user_status = 'Admin' WHERE StdNo = {$the_user_id}";
		$admin_query = mysqli_query($connection,$query);
	}
}

// subscriber change
function subscriber_user(){
	global $connection;

	if (isset($_GET['subscriber'])) {
        $the_user_id = $_GET['subscriber'];
		$query = "UPDATE users SET user_status = 'Subscriber' WHERE StdNo = {$the_user_id}";
		$admin_query = mysqli_query($connection,$query);
	}
}


//delete user

function delete_user(){

		global $connection;
if (isset($_GET['delete'])) {

		if (isset($_SESSION['Username'])) {

		if ($_SESSION['Username']) {

		$the_user_id = $_GET['delete'];

		$query = "DELETE FROM users WHERE StdNo ={$the_user_id}";

		$delete_query = mysqli_query($connection,$query);	

		if (!$delete_query) {
			echo "u didnt delete any post";	# code...
			}	

		header("Location:USERS.php");

		}}}

		}


		//delete posts

		function delete_post(){

		global $connection;

        if (isset($_GET['delete'])) {

		if (isset($_SESSION['Username'])) {

		if ($_SESSION['Username']) {

		$the_post_id = $_GET['delete'];

		$query = "DELETE FROM post WHERE post_id ={$the_post_id}";

		$delete_query = mysqli_query($connection,$query);

		header("location:POSTS.php");

		}}}

		}




			
//function confirm 
function confirm(){

	global $connection;

	if (!$result) {

		die("query failed to work". mysqli_error($connection));
	}
}

// insert categories
function insert_categories(){

global $connection;

if (isset($_POST['submit'])) {

$cat_title = $_POST['cat_title'];

if ($cat_title == "" || empty($cat_title)) {

echo "This field must not be empty";
}
else
{
$query = "INSERT INTO categories(cat_title)";

$query.= "VALUE('{$cat_title}')";

$create_category_query = mysqli_query($connection,$query);

if (!$create_category_query) {

die('QUERY FAILED'.mysqli_error($connection));

 }
 else{
 	echo "<p class='alert alert-success'><span class='glyphicon glyphicon-ok '> </span> New category successifully inserted</p>";
 }
}
}}


// viewing categories

function  find_all_categories(){

global $connection;

$query = "SELECT * FROM categories";

$find_categories = mysqli_query($connection,$query);

if (!$find_categories) {

	die("some error". mysqli_error($connection));
}




while($row = mysqli_fetch_assoc($find_categories))
{
$cat_id =  $row['cat_id'];

$cat_title =  $row['cat_title'];

echo "<tr>";

echo "<td>{$cat_id}</td>";

echo "<td>{$cat_title}</td>";

echo "<td><a href= 'categories.php?delete={$cat_id}'>Delete</a></td>";

echo "<td><a href= 'categories.php?edit={$cat_id}'>Edit</a></td>";

echo "</tr>";

}
}

//deleting all categories

function delete_from_categories(){

global $connection;

if (isset($_GET['delete'])) {

$the_cat_id = $_GET['delete'];

$query = "DELETE FROM categories WHERE cat_id ={$the_cat_id}";

$delete_query = mysqli_query($connection,$query);

header("location:CATEGORIES.php");

}


}


//editing categories
function editcategory(){
	global $connection;

if (isset($_GET['edit'])) {

$cat_id  = $_GET['edit'];

include "aupdate.php";

}

}


//checking for administration previlages 
// function is_admin($Username=''){
// 	global $connection, $Username;

// 	$query = "SELECT user_status FROM users WHERE Username == '$Username'";
// 	$admin_query = mysqli_query($connection,$query);
// 	$row = mysqli_fetch_array($admin_query); 
// 	if ($row['user_status']=='Admin') {
		
// 		return true;
// 	}
// 	else{
// 		return false;
// 	}

// }


//duplicate username
// function duplicate_username($username){
// 	global $connection;

// 	$query = "SELECT Username FROM users WHERE Username = '$username'";

// 		$username_query = mysqli_query($connection,$query);
    	
//     	if (mysqli_num_rows($username_query) > 0) {

//     		return true;
  
//     	}else{

//     		return false;
//     	}
// }

//users online function boss
function users_online (){

global $connection;

if (isset($_GET['onlineusers'])) 

if (!$connection) {

$connection =mysqli_connect('localhost','root','','project');

session_start();

$session = session_id();
$time    = time();
$time_out_in_seconds = 05;
$time_out = $time - $time_out_in_seconds;

$query = "SELECT * FROM online_users WHERE session = '$session'";

$users_online_count = mysqli_query($connection,$query);

$count = mysqli_num_rows($users_online_count);

if ($count == NULL) {

$online_insert = mysqli_query($connection, "INSERT INTO online_users(session, time ) VALUES ('$session','$time')");
}
else{

$online_insert= mysqli_query($connection,"UPDATE online_users SET time= '$time' WHERE session = '$session'");

//users online
$users_online = mysqli_query($connection,"SELECT * FROM online_users WHERE time > '$time_out'");

echo   $display_users = mysqli_num_rows($users_online);
}

}//get request isset()

}

users_online();



// end of functions


?>
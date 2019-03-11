  <!--   edit category -->

          <form action="" method="post">

        <div class="form-group">
        <label for="cat_title"><center>Edit Category</center></label>


<?php
/////edit query

if (isset($_GET['edit'])) {

    $cat_id = $_GET['edit'];

$sql = "SELECT * FROM categories WHERE  cat_id = $cat_id";

$select_categories_id = mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($select_categories_id))
{
$cat_id =  $row['cat_id'];

$cat_title =  $row['cat_title'];

}
?>

<input type="text" name="cat_title" class="form-control"  value="<?php 
if (isset($cat_title)) {
    echo $cat_title;
}


 ?>" >


<?php

}

?>

<?php

///update query

if (isset($_POST['Update_category'])) {

$the_cat_title = $_POST['cat_title'];

$query = "UPDATE categories SET cat_title ='{$the_cat_title}' WHERE cat_id ={$cat_id}";

header("location:categories.php");

$update_query = mysqli_query($connection,$query);
if ($update_query) {
    echo "update query is working";
}

}
?>







      <!--   <input type="text" class="form-control" name="cat_title"> -->
        </div>

        <div class="form-group">
        <input type="submit" class="button btn-primary" name="Update_category"  value="Update category">
        </div>
        </form>
<?php   include "inc/adminheader.php"; ?>



<div id="wrapper">




<!-- Navigation -->
<?php include"inc/adminnavigation.php"; ?>



<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
 <h2 class="page-header">Categories</h2>

<div  class="col-xs-6">

<?php  insert_categories(); ?>
<!-- //// add query -->

<form action="" method="post">

<div class="form-group">

<label for="cat_title"><center>Cat Title</center></label>

<input type="text" class="form-control" name="cat_title">
</div>

<div class="form-group">

<input type="submit" class="btn btn-primary" name="submit"  value="Add category">

</div>

</form><!-- add form category -->

<?php editcategory(); ?>



</div> 

<div  class="col-md-6">

<label>Category Details</label>

<table  class="table table-bordered table-hover"  bgcolor="skyblue">

<thead class="bg-primary">
<tr>

<th>Id</th>

<th>Title</th>

<th>Delete</th>

<th>Edit</th>



</tr>

</thead>

<tbody>

<!-- display all categories -->
<?php find_all_categories();   ?>




<?php delete_from_categories(); ?>

</tbody>

</table>

</div>  <!-- the table -->

</div>

</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include "inc/adminfooter.php";?>
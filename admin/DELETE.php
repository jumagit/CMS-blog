
    <?php
    include"inc/db.php"; 
    ?>
    <?php

    if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM document WHERE id = $id";

    $path_delete_query = mysqli_query($connection,$query);

    if ($path_delete_query) {

    echo "file has been deleted";
    header("Location:document.php");

    }

    }



    ?>         

   <?php
    include"inc/db.php"; 
    ?>
    <?php

    if (isset($_GET['delete'])) {
    $comment_id = $_GET['delete'];

    $query = "DELETE FROM comments WHERE comment_id = $comment_id";

    $path_delete_query = mysqli_query($connection,$query);

    if ($path_delete_query) {

    echo "comment has been deleted";
    header("Location:view_all_comments.php");

    }

    }



    ?>         



     <?php
    include"inc/db.php"; 
    ?>
    <?php

    if (isset($_GET['delete'])) {
    $post_id = $_GET['delete'];

    $query = "DELETE FROM post WHERE post_id = $post_id";

    $path_delete_query = mysqli_query($connection,$query);

    if ($path_delete_query) {

    echo "post has been deleted";
    header("Location:view_all_posts.php");

    }

    }



    ?>    

      <?php

    if (isset($_GET['delete'])) {
    $cat_id = $_GET['delete'];

    $query = "DELETE FROM categories WHERE cat_id = $cat_id";

    $path_delete_query = mysqli_query($connection,$query);

    if ($path_delete_query) {

    echo "post has been deleted";
    header("Location:categories.php");

    }

    }



    ?>         




















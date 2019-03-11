    <?php
    include"inc/db.php"; 
    ?>
    <?php

    if (isset($_GET['dow'])) {
    $path = $_GET['dow'];

    $query = "SELECT * FROM document WHERE path='$path'";

    $path_query = mysqli_query($connection,$query);

    header('Content-Type:application/octet-stream');
    header('Content-Disposition:attachment; filename="'.basename($path).'"');
    header('Content-size' .filesize($path));
    readfile('$path');
    }

    ?>


    <?php

    if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE  * FROM document WHERE id = $id";

    $path_delete_query = mysqli_query($connection,$query);

    if ($path_delete_query) {
        
    echo "file has been deleted";

    }

    }



    ?>         

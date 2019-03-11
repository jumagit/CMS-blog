 <table class="table table-bordered table-hover">
        <thead class="bg-primary">
        <th><input type="checkbox"  id="selectAllcheckboxes" ></th>
        <th>Id</th>
        <th>Author</th>
        <th>In response to </th>
        <th> Content</th>
        <th>Status</th>
        <th>Comment Date</th>
        <th>Approved</th>
        <th>Unapproved</th>
        <th>Delete</th>

        </thead>
        <tbody>

        <?php   

        $connection = mysqli_connect('localhost','root','','project');

        $sql = "SELECT * FROM comments ORDER BY comment_id DESC  ";

        $select_comments = mysqli_query($connection,$sql);

        while($row = mysqli_fetch_assoc($select_comments))
        {
        $comment_id =  $row['comment_id'];

        $comment_author =  $row['comment_author'];

        $comment_status =  $row['comment_status'];

        $comment_content =  $row['comment_content'];

        $comment_date =  $row['comment_date'];

        $comment_count =  $row['comment_count'];

        $comment_post_id = $row['comment_post_id'];

       
        echo "<tr>";
        ?>
        <td><input type='checkbox' class='checkboxes'  name='checkboxarray[]' value='<?php  echo $post_id; ?>'></td>
        <?php
        echo "<td>{$comment_id}</td>";
        echo "<td>{$comment_author}</td>";


        $queryy = "SELECT * FROM post WHERE post_id = {$comment_post_id }";
        $select_post_id = mysqli_query($connection, $queryy);
        while($row = mysqli_fetch_assoc($select_post_id)){
        $post_id =  $row['post_id'];
        $post_title =  $row['post_title'];
        echo "<td><a href='../POSTS.php?p_id={$post_id}'>{$post_title}</a></td>";
        }

        echo "<td>{$comment_content}</td>";
        echo "<td>{$comment_status}</td>";
        echo "<td>{$comment_date}</td>";
        echo "<td><a href='COMMENTS.php?Approve={$comment_id}'>Approve</a></td>";
        echo "<td><a href='COMMENTS.php?Unapprove={$comment_id}'>Unapprove</a></td>";
        echo "<td><a href='COMMENTS.php?delete={$comment_id}'>Delete</a></td>";
        echo "</tr>";

        }
        ?>

        </tbody>

        </table>

        <!--    deleting -->
        <?php
        $connection = mysqli_connect('localhost','root','','project');

        global $connection;

        if (isset($_GET['delete'])) {

        $the_comment_id = $_GET['delete'];

        $query = "DELETE FROM comments WHERE comment_id ={$the_comment_id}";

        $delete_query = mysqli_query($connection,$query);

        header("location:COMMENTS.php");
        }
        ?>

        <!-- approving -->

        <?php

        global $connection;

        if (isset($_GET['Approve'])) {

        $the_comment_id = $_GET['Approve'];

        $query = "UPDATE comments  SET comment_status='Approved' WHERE comment_id ={$the_comment_id}";

        $approve_query = mysqli_query($connection,$query);

        header("location:COMMENTS.php");
        }
        ?>


        <?php

        global $connection;

        if (isset($_GET['Unapprove'])) {

        $the_comment_id = $_GET['Unapprove'];

        $query = "UPDATE comments  SET comment_status='Unapproved' WHERE comment_id ={$the_comment_id}";

        $unapprove_query = mysqli_query($connection,$query);

        header("location:COMMENTS.php");
        }
        ?>










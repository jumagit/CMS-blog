<?php

			 if (isset($_SESSION['Username'])) {

			  $Username = $_SESSION['Username'];


			$query = "SELECT * FROM users WHERE Username ='$Username' ";

			$select_db_query = mysqli_query($connection,$query);

			while ($row = mysqli_fetch_assoc($select_db_query)) {

			  $user_status = $row['user_status'];
			}

			if ($user_status === 'Subscriber') {
				
				//header("Location:index.php");
			}

		    }
			?>



			<table class="table table-bordered table-hover">
			<thead class="bg-primary">
			<th>StdNo</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Username</th>
			<th>Email</th>
			<th>Status</th>
			<th style="height:50px;width:60px">Picture</th>
			<th>Edit</th>
			<th>Delete</th>
			<th>Admin</th>
			<th>Subscriber</th>
			</thead>
			<tbody>

			<?php   
		
			$connection = mysqli_connect('localhost','root','','project');

			$sql = "SELECT * FROM users ORDER BY StdNo DESC ";

			$select_users = mysqli_query($connection,$sql);

			while($row = mysqli_fetch_assoc($select_users))
			{
			$user_id =  $row['StdNo'];
			$Firstname = $row['Firstname'];
			$Lastname= $row['Lastname'];
			$Username= $row['Username'];
			$Email= $row['Email'];
		    $user_status = $row['user_status'];
            $user_image= $row['user_image'];


			echo "<tr>";
			echo "<td>{$user_id}</td>";
			echo "<td>{$Firstname}</td>";
			echo "<td>{$Lastname}</td>";
			echo "<td>{$Username}</td>";
			echo "<td>{$Email}</td>";
			echo "<td>{$user_status}</td>";
			echo "<td><img style='height:50px;width:60px' class='img-responsive' src='../images/$user_image'  alt='image'></td>";
			echo "<td><a href='USERS.php?source=Edit_user&p_id={$user_id}'>Edit</a></td>";
			echo "<td><a href='USERS.php?delete={$user_id}'>Delete</a></td>";
			echo "<td><a href='USERS.php?admin={$user_id}'>Admin</a></td>";
			echo "<td><a href='USERS.php?subscriber={$user_id}'>Subscriber</a></td>";
			echo "</tr>";

			}


			?>

			</tbody>

			</table>

			
		<?php delete_user();  ?>
		<?php admin_user();  ?>
		<?php subscriber_user();  ?>


   

    <!-- Navigation -->

   <nav class="navbar navbar-expand-sm p-3  navbar-dark bg-success" >

  <div class="container">

     <a href="index.html" class="navbar-brand"><i class="fa fa-apple fa-2x"></i></a>

    <button class="navbar-toggler " data-toggle="collapse" data-target="#navbarNav">

      <span class="navbar-toggler-icon"></span>
      
    </button>

<!-- the collapse general begins -->

<div class="collapse navbar-collapse text-white" id="navbarNav">

  <ul class="navbar-nav text-white ml-auto"> 

    <li class="nav-item px-2">
      <a href="index.php" class="nav-link active">  Home</a>
    </li>

    <li class="nav-item px-2">
      <a href="admin/INDEX.php" class="nav-link"> Admin</a>
    </li>

    <li class="nav-item px-2">
      <a href="contact.php" class="nav-link"> About me</a>
    </li>
    
    <li class="nav-item px-2">
      <a href="registration.php" class="nav-link">Sign up</a>
    </li>
    

    <?php

  if (isset($_SESSION['Username'])) {

      if (isset($_GET['p_id'])) {

          $post_id = $_GET['p_id'];

       echo " <li class='nav-item px-2'>
      <a href='admin/POSTS.php?source=Edit_post&p_id={$post_id}' class='nav-link font-weight-bold'>Edit post</a>
      </li>";
      
      }
  }

?>


  </ul>



  
      
    </div>
    
  </div>
  
</nav>


































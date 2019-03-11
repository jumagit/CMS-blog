
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: darkgreen" >
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
<span class="sr-only">In</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand" href="index.html">CMS</a>
</div>




<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">


<li>
<a href="#">USERS ONLINE: <span class="usersonline" style="padding: 5px;background-color: red;color: black;border-radius: 50%;"></span></a>
</li>

<li>
<a href="../index.php">HOME SITE</a>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 

if (isset($_SESSION['Username'])) {
 	# code...
  echo $_SESSION['Username']; 
}else{

	header("Location: ../index.php");
}
  ?>
   <b class="caret"></b></a>
<ul class="dropdown-menu">
<li>
<a href="./PROFILE.php""><i class="fa fa-fw fa-user"></i> Profile</a>
</li>

<li class="divider"></li>
<li>
<a href="../inc/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
</li>
</ul>
</li>

</ul>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">


<ul class="nav navbar-nav side-nav" style="color: blue"><br>

<!--    profile image -->
<li style="margin-left:15px;">




</li>

		<li>
		<a href="index.php"><i class="fa fa-fw fa-home fa-2x"  style="color: red"></i> HOME PAGE</a>
		</li>

		<li>
		<a href="./categories.php"><i class="fa fa-fw fa-th fa-2x"  style="color: violet"></i>CATEGORIES</a>
		</li>

		<!-- posts -->
		<li>
		<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-tasks fa-2x"  style="color: lime"></i> POSTS <i class="fa fa-fw fa-caret-down"></i></a>
		<ul id="demo" class="collapse">
		<li>
		<a href="./POSTS.php?source=Add_post"><i class="fa fa-fw fa-cog"></i> Add posts</a>
		</li>
		

		<li>
		<a href="./POSTS.php?source=View_post"><i class="fa fa-fw fa-upload"></i> View  posts</a>
		</li>
</ul>
</li>

<!--     users -->

<li>
<a href="javascript:;" data-toggle="collapse" data-target="#dem"><i class="fa fa-fw fa-group fa-2x"  style="color: white"></i> USERS <i class="fa fa-fw fa-caret-down"></i></a>
<ul id="dem" class="collapse">

		<li>
		<a href="./USERS.php?source=Add_user"><i class="fa fa-fw fa-cog"></i> Add users</a>
		</li>

        <li>
		<a href="./USERS.php?source=view_users"><i class="fa fa-fw fa-user"></i> View users</a>
		</li>

</ul>

</li>
<li>
<a href="./document.php"><i class="fa fa-fw fa-laptop fa-2x"  style="color: aqua"></i>  SOFTWARE</a>
</li>


<!--   comments -->
<li>
<a href="./COMMENTS.php?source=view_comments"><i class="fa fa-fw fa-comments fa-2x"  style="color: #e34"></i>  COMMENTS</a>
</li>


<!-- profile -->
<li>
<a href="./DETAILS.php"><i class="fa fa-fw fa-user fa-2x" style="color: lime"></i>PROFILE</a>
</li>



</ul>
</div>
<!-- /.navbar-collapse -->
</nav>
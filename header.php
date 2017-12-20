
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   <ul class="nav navbar-nav navbar-left">
            <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
              <ul class="dropdown-menu">
			  <li class="divider"></li>
                <li><a href="#">Mobile</a></li>
				<li class="divider"></li>
                <li><a href="#">Laptop</a></li>
				<li class="divider"></li>
                <li><a href="#">Camera</a></li>
              </ul>
            </li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
				<ul class="dropdown-menu">
				<li class="divider"></li>
                <li><a href="#">My Orders</a></li>
				<li class="divider"></li>
                <li><a href="#">Update Address</a></li>
				<li class="divider"></li>
                <li><a href="logout.php">LogOut</a></li>
				 </ul>
				</li>
			
			 <li><a href="index.php">Contact</a></li>
			 <li><a href="login.php">Login</a></li>
			  <li><a href="register_user.php">Sign Up</a></li>
			
    </ul>
  <!-- Collect the nav links, forms, and other content for toggling -->
    
     
      
      <ul class="nav navbar-nav navbar-right">
        <li>
		
		<?php
		if(isset($_SESSION['user']))
		{
			if($_SESSION['user'] == NULL)
			{
				echo '<a href="cart_user.php" >empty Items in Cart </a>';
			}
			else
			{
				$cid = $_SESSION['user'];
				$pid_sql = "SELECT * FROM `customer_cart` WHERE customr_id='$cid'";
				$run_pid = mysqli_query($conn,$pid_sql);
				
				$rowcount=mysqli_num_rows($run_pid);
				echo '
				<a href="show_cart.php" > '.$rowcount.' Items in Cart </a>';
		
			}
		
		}
		else
		{
			echo '<a href="cart_user.php" >empty Items in Cart </a>';
		}
		
		
		
		
		?>
          
        </li>
      </ul>
    </div>
<!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
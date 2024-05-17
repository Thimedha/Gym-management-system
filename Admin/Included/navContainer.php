

<nav>
	<i class='bx bx-menu'></i>
	<h3><span style="color: white;">Admin Dashboard</span></h3>
	<form action="#">
		<div class="form-input">

		</div>
	</form>
	<a href="#" class="notification">
	

			<i class='bx bxs-bell' ></i>
			<span class="num">
				<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM contact_info ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3 >' . $row . '</h3>';
				?>
			
				
			</span>


			
	<!-- <li class="dropdown">
		<div class="dropdown-toggle text-light" id="noti_count" style="cursor: pointer;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<a href="#" class="notification">
			<i class='bx bxs-bell'></i>
			<span class="counter">0</span>
		</div>
		<div class="dropdown-menu overflow-h-menu dropdown-menu-right">
            <div class="notification">

            </div>
        </div>
		
		
	</a>                     
    </li> -->
	
	<!-- <a href="#" class="profile">
		<img src="img/people.png">
	</a> -->
	<a href="">
		<h4><span style="color: red;"><?php echo $_SESSION['admin_name'] ?></span></h4>		
	
	</li>
		

	</a>
<style>
	*{
    text-decoration: none;
}

.overflow-h-menu{
    height: 300px !important;
    overflow-y: scroll;
}
.text-error{
    color: seashell !important;
}
</style>



</nav>
<!-- <?php include('Notification.php'); ?> -->
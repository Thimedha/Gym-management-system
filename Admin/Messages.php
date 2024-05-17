<!-- Header Included -->
<?php include('Included/Header.php'); ?>
<!-- Header Included -->

<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand" style="margin-left: 20px;">
			<img src="img/logo.ico" style="width: 40px;" alt="">
			<span class="text" style="margin-left: 10px;color:lime; "> <b> Body Tone Center</b></span>
		</a>
		<ul class="side-menu top">
		<li >
				<a href="Dashboard.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="Members.php">
					<i class='bx bxs-user'></i>
					<span class="text">Members</span>
				</a>
			</li>
			<li>
				<a href="Instructors.php">
					<i class='bx bxs-user'></i>
					<span class="text">Instructors</span>
				</a>
			</li>
			<li>
				<a href="Appointment.php">
					<i class='bx bxs-calendar'></i>
					<span class="text">Appointments</span>
				</a>
			</li>
			<li>
				<a href="Equipment.php">
					<i class='bx bxs-objects-vertical-center'></i>
					<span class="text">Equipment</span>
				</a>
			</li>
			<li>
				<a href="Physical.php">
					<i class='bx bxs-universal-access'></i>
					<span class="text">Physical Exercise</span>
				</a>
			</li>
			<li>
				<a href="Wormup.php">
					<i class='bx bxs-meteor'></i>
					<span class="text">Worm-Up</span>
				</a>
			</li>
			<li>
				<a href="DiatePlan.php">
					<i class='bx bxs-coffee-togo'></i>
					<span class="text">Diet Plan</span>
				</a>
			</li>
			<li>
				<a href="Packages.php">
					<i class='bx bxs-receipt'></i>
					<span class="text">Packages</span>
				</a>
			</li>
			<li>
				<a href="Schedule.php">
					<i class='bx bxs-food-menu'></i>
					<span class="text">Schedule</span>
				</a>
			</li>
			<li >
				<a href="Announsments.php">
					<i class='bx bxs-volume-full'></i>
					<span class="text">Announsment</span>
				</a>
			</li>
			<li class="active"> 
				<a href="Messages.php">
					<i class='bx bxs-envelope'></i>
					<span class="text">Messages</span>
				</a>
			</li>
			<!-- <li>
				<a href="Reports.php">
					<i class='bx bxs-bar-chart-square'></i>
					<span class="text">Reports</span>
				</a>
			</li> -->
			<li>
				<a href="Payments.php">
					<i class='bx bxs-dollar-circle'></i>
					<span class="text">Sales Details</span>
				</a>
			</li>

			<li>
				<a href="Settings.php">
					<i class='bx bxs-cog'></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<br><br>
			<li>
				<a href="logout.php">
					<i class='bx bxs-exit'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<!-- nav Container included -->
		<?php include 'Included/navContainer.php'; ?>
		<!-- NAVBAR -->
		
		<!-- MAIN -->
		<?php include('MessagesBody.php'); ?>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="js/script.js"></script>
</body>

</html>
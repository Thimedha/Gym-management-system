
<main>
	<div class="head-title">
		<div class="left">
			<h1>Dashboard</h1>

		</div>
		
	</div>

	<ul class="box-info">
		<li>
			<i class='bx bxs-calendar-check'></i>
			<span class="text">
			<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM appointment_table ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3 style="color: red;">' . $row . '</h3>';
				?>
				<p style="color: red;">Appointments</p>
			</span>
		</li>
		<li>
			<i class='bx bxs-meteor'></i>
			<span class="text">
				<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM warm_up ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3>' . $row . '</h3>';
				?>

				<p>Worm Up Plan</p>
			</span>
		</li>
		<li>
			<i class='bx bxs-objects-vertical-center'></i>
			<span class="text">
			<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM equipment ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3>' . $row . '</h3>';
				?>
				<p>Equipments</p>
			</span>
		</li>
		<li>
			<i class='bx bxs-receipt'></i>
			<span class="text">
			<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM packages_table ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3>' . $row . '</h3>';
				?>
				<p>Packages</p>
			</span>
		</li>
		
	</ul>
	<ul class="box-info">
		
		<li>
			<i class='bx bxs-universal-access'></i>
			<span class="text">
				<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM physical_ex ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3>' . $row . '</h3>';
				?>

				<p>Physical Exercise</p>
			</span>
		</li>
		<li>
			<i class='bx bxs-food-menu'></i>
			<span class="text">
			<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM schedule ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3>' . $row . '</h3>';
				?>
				<p>Schedule</p>
			</span>
		</li>
		<li>
			<i class='bx bxs-coffee-togo'></i>
			<span class="text">
			<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM diet ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3>' . $row . '</h3>';
				?>
				<p>Diet Plan</p>
			</span>
		</li>
		
	</ul>


	
</main>
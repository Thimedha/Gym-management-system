
<main>
	<div class="head-title">
		<div class="left">
			<h1>Dashboard</h1>

		</div>
		
	</div>

	<ul class="box-info">
		<li>
			<i class='bx bxs-volume-full'></i>
			<span class="text">
			<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM announsment_table ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3 style="color: red;">' . $row . '</h3>';
				?>
				<p style="color: red;">Announsments</p>
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
				<p>Available Packages</p>
			</span>
		</li>
		
	</ul>


	<div class="table-data">
					
		<div class="order">
			<div class="head">
				<h3 >Packages</h3>
				
			</div>
			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">No</th>
						<th style="font-size: large;">Name</th>
						<th style="font-size: large;">Wormup</th>
						<th style="font-size: large;">Physical Exercise</th>
						<th style="font-size: large;">Equipment</th>
						<th style="font-size: large;">Diet Plan</th>
						<th  style="font-size: large;">Date</th>
						<th  style="font-size: large;">Total</th>
					
					</tr>
				</thead>
				<tbody>
					<!-- Database connect php code  -->
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$database = "body_tone_db";

					// create connection
					$connection = new mysqli($servername, $username, $password, $database);

					//Check connection
					if ($connection->connect_error) {
						die("Connection Failed:" . $connection->connect_error);
					}

					// aread all data member Table
					$sql = "SELECT * FROM packages_table";
					$result = $connection->query($sql);

					if (!$result) {
						die("Invalid query:" . $connection->error);
					}

					// Read data of each rows
					while ($row = $result->fetch_assoc()) {
						echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[wormup]</td>
					<td>$row[physical]</td>
					<td>$row[equipment]</td>
					<td>$row[diet]</td>
					<td>$row[dates]</td>
					<td>$row[total]</td>
			
					
                   
                </tr>
                    ";
					}
					?>

				</tbody>

			</table>
		</div>
	</div>
</main>
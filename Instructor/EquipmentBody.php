<main>
	<div class="head-title">
		<div class="left">
			<h1>Users</h1>

		</div>
		<a class="btn-download">
			<i class='bx bxs-group'></i>
			<?php
				require 'dbconfig.php';

				$query = "SELECT id FROM equipment ORDER BY id";
				$query_run = mysqli_query($connection, $query);

				$row = mysqli_num_rows($query_run);
				echo '<h3 >' . $row . '</h3>';
				?>

				
			<p>Number of Equipments</p>
		</a>
	</div>
	<div class="table-data">
		<div class="order">

			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">No</th>
						<th style="font-size: large;">Name</th>
						
						
					
						

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
					$sql = "SELECT * FROM equipment";
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
					
                    <td >
                        <a class='btn info btn-sm' href='Equipment_Edit.php?id=$row[id]'>Update</a>
                      
                    </td>
                </tr>
                    ";
					}
					?>

				</tbody>

			</table>
		</div>

	</div>


</main>
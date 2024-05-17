<main>
	<div class="head-title">
		<div class="left">
			<h1>Appointments</h1>

		</div>
^^^
	</div>
	<div class="table-data">
		<div class="order">
		<a class="btn info" href="Appointment_Create.php" role="button"> Appointment</a><br>
		<br><br>
			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">ID</th>
						<th style="font-size: large;">Name</th>
						
			
						<th  style="font-size: large;">Date</th>		
						<th  style="font-size: large;">Time</th>
						<th  style="font-size: large;">Status</th>
						

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
					$sql = "SELECT * FROM appointment_table";
					$result = $connection->query($sql);

					if (!$result) {
						die("Invalid query:" . $connection->error);
					}

					// Read data of each rows
					while ($row = $result->fetch_assoc()) {
						echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[user_name] </td>
			
					<td>$row[date] </td>
					<td>$row[time] </td>
					<td>$row[status] </td>
			
                    <td >
                 
					<a class='btn danger btn-sm' href='Appointment_Delete.php?id=$row[id]'>Delete</a>
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
	
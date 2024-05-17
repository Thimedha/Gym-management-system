<main>
	<div class="head-title">
		<div class="left">
			<h1>Appointments</h1>

		</div>
		<a class="btn-download">
			<i class='bx bxs-calendar-check'></i>
			<?php
			require 'dbconfig.php';

			$query = "SELECT id FROM appointment_table ORDER BY id";
			$query_run = mysqli_query($connection, $query);

			$row = mysqli_num_rows($query_run);
			echo '<h3>' . $row . '</h3>';
			?>
			<p>Total Appointments</p>
		</a>

	</div>
	<div class="table-data">
		<div class="order">

			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">ID</th>
						<th style="font-size: large;">Name</th>
						<th style="font-size: large;">Contact</th>
						<th  style="font-size: large;">Email</th>
						<th  style="font-size: large;">Message</th>
						<th  style="font-size: large;">Date</th>		
						<th  style="font-size: large;">Time</th>
						<th  style="font-size: large;">Status</th>
						<th  style="font-size: large;">Member ID</th>

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
					<td>$row[contact_no] </td>
                    <td>$row[email] </td>
					<td>$row[message] </td>
					<td>$row[date] </td>
					<td>$row[time] </td>
					<td>$row[status] </td>
					<td>$row[user_id] </td>
                    <td >
                        <a class='btn info btn-sm' href='Appointment_Edit.php?id=$row[id]'>Update</a>
                       
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
	
<main>
			<div class="head-title">
				<div class="left">
					<h1>Packages</h1>
				</div>	
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Package List</h3>
						<a class="btn info" href="Packages_Create.php" role="button"> New Package</a>
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
			
					
                    <td >
                        <a class='btn warning btn-sm' href='Packages_Edit.php?id=$row[id]'>Edit</a>
                        <a class='btn danger btn-sm' href='Packages_Delete.php?id=$row[id]'>Delete</a>
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
<main>
			<div class="head-title">
				<div class="left">
					<h1>Schedule</h1>
				</div>	
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
					
						<!-- <a class="btn info" href="Packages_Create.php" role="button"> New Package</a> -->
					</div>
		
			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">No</th>
						
						<th style="font-size: large;">Worm-Up </th>
						<th  style="font-size: large;">Physical Exercise</th>
						<th  style="font-size: large;">Equipment</th>
						<th  style="font-size: large;">Diet Plan</th>
						
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
					$sql = "SELECT * FROM schedule";
					$result = $connection->query($sql);

					if (!$result) {
						die("Invalid query:" . $connection->error);
					}

					// Read data of each rows
					while ($row = $result->fetch_assoc()) {
						echo "
                    <tr>
                    <td>$row[id]</td>
                  
                    <td>$row[worm_up]</td>
					<td>$row[physical_ex]</td>
					<td>$row[equipment]</td>
					<td>$row[diet_plan]</td>
					
					<td >  
					<a class='btn info btn-sm' href='Schedule_View.php?id=$row[id]'>View Schedule</a>
					
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
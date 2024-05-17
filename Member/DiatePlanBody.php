<main>
	<div class="head-title">
		<div class="left">
			<h1>Diet Plan</h1>

		</div>
	</div>
	<div class="table-data">
		<div class="order">

			<!-- <a class="btn info" href="DiatePlan_Create.php" role="button"> New Diet Plan</a> -->

			<!-- <br><br><br> -->
			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">ID</th>
						<th style="font-size: large;">Name</th>
						<th style="font-size: large;">Details</th>
						<th style="font-size: large;">Calorie</th>
						<th style="font-size: large;">Days</th>
						


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
					$sql = "SELECT * FROM diet";
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
                    <td>$row[details]</td>
					<td>$row[calorie]</td>
					<td>$row[days]</td>
               
					
                    <td >  
                        
                    
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
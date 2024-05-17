<main>
	<div class="head-title">
		<div class="left">
			<h1>Worm-Up</h1>

		</div>
	</div>
	<div class="table-data">
		<div class="order">

			<a class="btn info" href="Wormup_Create.php" role="button"> New Worm-up</a>

			<br><br><br>
			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">ID</th>
					
						<th style="font-size: large;">Details</th>
						
						


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
					$sql = "SELECT * FROM warm_up";
					$result = $connection->query($sql);

					if (!$result) {
						die("Invalid query:" . $connection->error);
					}

					// Read data of each rows
					while ($row = $result->fetch_assoc()) {
						echo "
                    <tr>
                    <td>$row[id]</td>
                 
                    <td>$row[details]</td>
               
					
                    <td >  
                        <a class='btn warning btn-sm' href='Wormup_Edit.php?id=$row[id]'>Edit</a>
                        <a class='btn danger btn-sm' href='Wormup_Delete.php?id=$row[id]'>Delete</a>
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
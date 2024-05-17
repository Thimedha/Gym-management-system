<main>
			<div class="head-title">
				<div class="left">
					<h1>Payments</h1>

				</div>
		
					
				</a>
			</div>

			

	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Payment History</h3>		
		</a>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">ID</th>
						<th style="font-size: large;">Date</th>
						
						<th style="font-size: large;">Package ID</th>
						<th style="font-size: large;">Package Price</th>
						<th style="font-size: large;">Quentity</th>
						<th style="font-size: large;">Amount</th>
						

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
					$sql = "SELECT * FROM payment_info";
					$result = $connection->query($sql);

					if (!$result) {
						die("Invalid query:" . $connection->error);
					}

					// Read data of each rows
					while ($row = $result->fetch_assoc()) {
						echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[date]</td>
          
                    <td>$row[package_id]</td>
					<td>$row[package_price]</td>
					<td>$row[quentity]</td>
					<td>$row[amount]</td>
					
                    <td >
                        
                        <a class='btn primary btn-sm' href='Payment_Details.php?id=$row[id]'>View</a>
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
		</main>
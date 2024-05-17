<main>
			<div class="head-title">
				<div class="left">
					<h1>Payments</h1>

				</div>
				
			</div>

			<ul class="box-info">
				<li>
				<i class='bx bxs-dollar-circle'></i>
					<span class="text">
			
						<p>Monthly Sales</p>
					</span>
				</li>
				
				<li>
				<i class='bx bxs-dollar-circle'></i>
					<span class="text">
		
				<p style="color: red;">Annual Total Sales</p>
					
					</span>
				</li>
			</ul>

	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Sales</h3>
				<a class="btn-download">
		
			
				

				
		
		</a>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">ID</th>
						<th style="font-size: large;">Date</th>
						<th style="font-size: large;">Member ID</th>
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
                    <td>$row[user_id]</td>
                    <td>$row[package_id]</td>
					<td>$row[package_price]</td>
					<td>$row[quentity]</td>
					<td>$row[amount]</td>
					
                    <td >
                        
                        <a class='btn warning btn-sm' href='Payment_Details.php?id=$row[id]'>View</a>
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
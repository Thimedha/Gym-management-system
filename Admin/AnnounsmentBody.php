<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);


$name = "";
$start = "";
$message = "";
$offering = "";
$end = "";



$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $start = $_POST["start"];
    $message = $_POST["message"];
    $offering = $_POST["offering"];
    $end = $_POST["end"];
    
   

    do {
        if (empty($name) || empty($start) || empty($message) || empty($offering) || empty($end) ) {
            $errorMessage = " All the fields are required";
            break;
        }

        // add new member into database
        $sql = "INSERT INTO announsment_table (name, start, message, offering, end)" . "VALUES ('$name', '$start', '$message', '$offering', '$end' )";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        // clear the form
        
        $name = "";
        $start = "";
        $message = "";
        $offering = "";
        $end = "";
      
        

        $successMessage = "Announsment added Correctly";
        header("location:Announsments.php");
        exit;

    } while (false);
}
?>
<main>
	<div class="head-title">
		<div class="left">
			<h1>Announcements</h1>

		</div>
	</div>
	<div class="table-data">
		<div class="order">

		
        <a class="btn info" href="Announsments_Create.php" role="button"> New Equipment</a>

			<br><br><br>
			<table class="table">
				<thead>
					<tr>
						<th style="font-size: large;">ID</th>
						<th style="font-size: large;">Name</th>
						<th style="font-size: large;">Start Date</th>
						<th style="font-size: large;">Messages</th>
						<th style="font-size: large;">Offering</th>
						<th style="font-size: large;">End Date</th>
					
						


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
					$sql = "SELECT * FROM announsment_table";
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
                    <td>$row[start]</td>
                    <td>$row[message]</td>
					<td>$row[offering]</td>
					<td>$row[end]</td>
			
					
                    <td >
                        <a class='btn warning btn-sm' href='Announsments_Edit.php?id=$row[id]'>Edit</a>
                        <a class='btn danger btn-sm' href='Announsments_Delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";
					}
					?>

				</tbody>

			</table>
		</div>

	</div>
<!-- Popup -->


</main>

</script>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);


$id = "";
$name = "";




$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //** Check if the id is valid or not

    if (!isset($_GET["id"])) {
        header("location:Equipment.php");
        exit;
    }

    $id = $_GET["id"];
    // read the row of the selected member from database table
    $sql = "SELECT * FROM equipment WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:/Equipment.php");
        exit;
    }
    $name = $row["name"];
 
    
} else {
    // Post method: Update the data of the equipment
    $id = $_POST["id"];
    $name = $_POST["name"];
 
   
    do {
        if (empty($id) || empty($name)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE equipment " .
            "SET name = '$name'," .
            "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Equipment updated correctly";


        header("location:Equipment.php");
        exit;
    } while (true);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-5">
        <h2>Update Equipment</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
<form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            


    <div class="row mb-3">
        <label class="col-sm-3 col-form-label"> Name</label>
            <div class="col-sm-6">
                <input type="text" name="name" class="form-control" required value="<?php echo $name; ?>">
            </div>
    </div>
  
    
    
    <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="Equipment.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>

</body>

</html>
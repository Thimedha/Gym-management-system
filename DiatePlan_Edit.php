<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$details = "";
$doctor_name = "";
$status= "";




$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //** Check if the id is valid or not

    if (!isset($_GET["id"])) {
        header("location:DiatePlan.php");
        exit;
    }

    $id = $_GET["id"];
    // read the row of the selected member from database table
    $sql = "SELECT * FROM diet WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:DiatePlan.php");
        exit;
    }
   
    $details = $row["details"];
    $doctor_name = $row["doctor_name"];
    $status = $row["status"];
   

} else {
    // Post method: Update the data of the Member
    $id = $_POST["id"];
  
    $details = $_POST["details"];
    $doctor_name = $_POST["doctor_name"];
    $status = $_POST["status"];
 
    
    

    do {
        if (empty($id) || empty($details) || empty($doctor_name) || empty($status)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE diet " .
            "SET details = '$details', doctor_name='$doctor_name', status= '$status' " .
            "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Diet updated correctly";

        header("location:DiatePlan.php");
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
        <h2>Update Diet Plan</h2>

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
                <label class="col-sm-3 col-form-label">Details</label>
                <div class="col-sm-6">
                <textarea type="text" class="form-control" name="details" > <?php echo $details; ?></textarea>
                </div>
            </div>
           
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Doctor Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="doctor_name" value="<?php echo $doctor_name; ?>">
                </div>
            </div>
            
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-6">
            <select type="text" name="status" class="form-control" required>
              
                <option value="pending">Pending</option>
                <option value="confirm">Approval</option>
                <option value="reject">Reject</option>
            </select>
            </div>
            </div>
           
           
            


            <?php
            if (!empty($successMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>  
                        <strong>$successMessage</strong>            
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                     </div>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-outline-primary">Edit</button>
                </div>
                
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="DiatePlan.php" role="button">Cancel</a>
                </div>
                
            </div>
        </form>
    </div>

</body>

</html>
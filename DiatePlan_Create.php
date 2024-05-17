<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);



$details = "";
$doctor_name = "";
$status= "";




$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $details = $_POST["details"];
    $doctor_name = $_POST["doctor_name"];
    $status = $_POST["status"];

   

    do {
        if (empty($details) || empty($doctor_name) || empty($status)) {
            $errorMessage = " All the fields are required";
            break;
        }

        // add new member into database
        $sql = "INSERT INTO diet (details, doctor_name, status)" . "VALUES ('$details', '$doctor_name','$status')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        // clear the form
        
       
        $details = "";
        $doctor_name = "";
        $status= "";
       


        

        $successMessage = "Diet item added Correctly";
        header("location:DiatePlan.php");
        exit;

    } while (false);
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
        <h2>New Diet</h2>

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
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Details</label>
                <div class="col-sm-6">
                    <textarea type="text" class="form-control" name="details" value="<?php echo $details; ?>"> </textarea>
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
                <option value="confirm">Confirm</option>
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
                    <button type="submit" class="btn btn-outline-primary">Diet Add</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="DiatePlan.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>

</body>

</html>
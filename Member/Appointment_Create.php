<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);



$user_name = "";

$message = "";
$date = "";
$time = "";
$status = "";



$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name= $_POST['user_name'];

   
    $message = $_POST['message'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $status = $_POST["status"];
   

    do {
        if (empty($user_name) || empty($message) || empty($date) || empty($time) || empty($status)) {
            $errorMessage = " All the fields are required";
            break;
        }

        // add new member into database
        $sql = "INSERT INTO appointment_table (user_name, message, date, time, status)" . "VALUES ('$user_name', '$message', '$date', '$time', '$status' )";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        // clear the form
        
        $user_name = "";
      
        $message = "";
        $date = "";
        $time = "";
        $status = "";
        
        

        $successMessage = "Appointment added Correctly";
        header("location:Appointment.php");
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
        <h2>New Appointment</h2>

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
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="user_name" value="<?php echo $user_name; ?>">
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Message</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="message" value="<?php echo $message; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Time</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" name="time" value="<?php echo $time; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="status" value="Pending" hidden>
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
                    <button type="submit" class="btn btn-primary">Appointment</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="Appointment.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>

</body>

</html>
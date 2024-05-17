<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$user_name = "";
$contact_no = "";
$email = "";
$message = "";
$date = "";
$time = "";
$status = "";




$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //** Check if the id is valid or not

    if (!isset($_GET["id"])) {
        header("location:Appointment.php");
        exit;
    }

    $id = $_GET["id"];
    // read the row of the selected member from database table
    $sql = "SELECT * FROM appointment_table WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:Appointment.php");
        exit;
    }
    $user_name = $row["user_name"];
    $contact_no = $row["contact_no"];
    $email = $row["email"];
    $message = $row["message"];
    $date = $row["date"];
    $time = $row["time"];
    $user_id = $row["user_id"];
    
} else {
    // Post method: Update the data of the Member
    $id = $_POST["id"];
    $user_name = $_POST["user_name"];
    $contact_no = $_POST["contact_no"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $status = $row["status"];
    $user_id = $row["user_id"];

    // do the update query

    do {
        if (empty($id) || empty($user_name) || empty($contact_no) || empty($email) || empty($message) || empty($date) || empty($time) || empty($status) || empty($user_id)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE appointment_table " .
            "SET user_name = '$user_name', contact_no = '$contact_no', email = '$email', message ='$message', date ='$date', time ='$time', status ='$status',user_id =''$user_id " .
            "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Appointment updated correctly";

        header("location:Appointment.php");
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
        <h2> Update Appointment</h2>

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
                <label class="col-sm-3 col-form-label">User Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="user_name" value="<?php echo $user_name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Contact No</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="contact_no" value="<?php echo $contact_no; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Messages</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="message" value="<?php echo $message; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Appointment Date</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Appointment Time</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" name="time" value="<?php echo $time; ?>">
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-6">
            <select name="status" class="form-control" required>
                <option value="" >------------------------------------- SELECT ----------------------------------------------</option>
                <option value="member">Pending</option>
                <option value="instructor">Confirm</option>
            </select>
            </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Member ID</label>
                <div class="col-sm-6">
                    <input  class="form-control" name="user_id" value="<?php echo $user_id; ?>">
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
                    <button type="submit" class="btn btn-primary">Appointment Approval</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="Appointment.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);

$user_id= "";
$worm_up = "";
$equipment = "";
$physical_ex = "";
$diet_plan = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //** Check if the id is valid or not

    if (!isset($_GET["id"])) {
        header("location:Schedule.php");
        exit;
    }

    $id = $_GET["id"];
    // read the row of the selected member from database table
    $sql = "SELECT * FROM schedule WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:Schedule.php");
        exit;
    }
    $user_id = $row["user_id"];
    $worm_up = $row["worm_up"];
    $equipment = $row["equipment"];
    $physical_ex = $row["physical_ex"];
    $diet_plan = $row["diet_plan"];
 
} else {
    // Post method: Update the data of the Member
    $id = $_POST["id"];
    $worm_up = $_POST["worm_up"];
    $equipment = $_POST["equipment"];
    $physical_ex = $_POST["physical_ex"];
    $diet_plan = $_POST["diet_plan"];


    do {
        if (empty($id) || empty($user_id) || empty($worm_up) || empty($equipment) || empty($physical_ex)  || empty($diet_plan)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE schedule " .
            "SET user_id = '$user_id', worm_up = '$worm_up', equipment ='$equipment', physical_ex = '$physical_ex',diet_plan ='$diet_plan'" .
            "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Schedule updated correctly";

        header("location:Schedule.php");
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
        <h2>Update Schedule</h2>

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
                <label class="col-sm-3 col-form-label">Member ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Worm-Up </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="worm_up" value="<?php echo $worm_up; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Equipment </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="equipment" value="<?php echo $equipment; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Physical Exercise </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="physical_ex" value="<?php echo $physical_ex; ?>">
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Diet Plan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="diet_plan" value="<?php echo $diet_plan; ?>">
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
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="Schedule.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
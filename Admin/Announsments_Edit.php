<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$name = "";
$start = "";
$message = "";
$offering = "";
$end = "";






$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //** Check if the id is valid or not

    if (!isset($_GET["id"])) {
        header("location:Announsments.php");
        exit;
    }

    $id = $_GET["id"];
    // read the row of the selected member from database table
    $sql = "SELECT * FROM announsment_table WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:Announsments.php");
        exit;
    }
    $name = $row["name"];
    $start = $row["start"];
    $message = $row["message"];
    $offering = $row["offering"];
    $end = $row["end"];
   
    
} else {
    // Post method: Update the data of the Member
    $id = $_POST["id"];
    $name = $_POST["name"];
    $start = $_POST["start"];
    $message = $_POST["message"];
    $offering = $_POST["offering"];
    $end = $_POST["end"];
   


    

    do {
        if (empty($id) || empty($name) || empty($start) || empty($message) || empty($offering) || empty($end)  ) {
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE announsment_table " .
            "SET name = '$name', start = '$start', message = '$message', offering ='$offering', end ='$end' " .
            "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Announsment updated correctly";

        header("location:Announsments.php");
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
        <h2>Update Announsement</h2>
<br>
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
                <label class="col-sm-3 col-form-label">Package</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Start Date</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="start" value="<?php echo $start; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Messages</label>
                <div class="col-sm-6">
                    <textarea type="text" class="form-control" name="message" value=""><?php echo $message; ?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">offering</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="offering" value="<?php echo $offering; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">End Date</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="end" value="<?php echo $end; ?>">
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
                    <button type="submit" class="btn btn-outline-primary" >Edit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="announsments.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);


$name = "";
$wormup = "";
$physical = "";
$equipment = "";
$diet = "";
$dates = "";
$total = "";




$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $wormup = $_POST["wormup"];
    $physical = $_POST["physical"];
    $equipment = $_POST["equipment"];
    $diet = $_POST["diet"];
    $dates = $_POST["dates"];
    $total = $_POST["total"];
    
   

    do {
        if (empty($name) || empty($wormup)  || empty($physical)  || empty($equipment)  || empty($diet)  || empty($dates) || empty($total) ) {
            $errorMessage = " All the fields are required";
            break;
        }

        // add new member into database
        $sql = "INSERT INTO packages_table (name, wormup, physical, equipment, diet, dates, total)" . "VALUES ('$name', '$wormup', '$physical', '$equipment', '$diet', '$dates', '$total')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        // clear the form
        
        $name = "";
        $name = "";
        $wormup = "";
        $physical = "";
        $equipment = "";
        $diet = "";
        $dates = "";
        $total = "";
        

        $successMessage = "Packages added Correctly";
        header("location:Packages.php");
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
        <h2>New Packages</h2>

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
                <label class="col-sm-3 col-form-label">Package Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Worm Up</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="wormup" value="<?php echo $wormup; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Physical Exercise</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="physical" value="<?php echo $physical; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Equipment</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="equipment" value="<?php echo $equipment; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Diet Plan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="diet" value="<?php echo $diet; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Total Days</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="dates" value="<?php echo $dates; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Total Price</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="total" value="<?php echo $total; ?>">
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
                    <button type="submit" class="btn btn-outline-primary">Create Package</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="Packages.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>

</body>

</html>
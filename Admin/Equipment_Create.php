<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);


$name = "";





$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
   
   

    do {
        if (empty($name)   ) {
            $errorMessage = " All the fields are required";
            break;
        }

        // add new member into database
        $sql = "INSERT INTO equipment (name)" . "VALUES ('$name')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        // clear the form
        
        $name = "";
       
        

        $successMessage = "Equipment added Correctly";
        header("location:Equipment.php");
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
        <h2>New Equipment</h2>

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
<br><br>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Details</label>
                <div class="col-sm-6">
                    <textarea type="text" class="form-control" name="name" value="<?php echo $name; ?>"></textarea>
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
                    <button type="submit" class="btn btn-outline-primary">Equipment Registerd</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="Equipment.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>

</body>

</html>
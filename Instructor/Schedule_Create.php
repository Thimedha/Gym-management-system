<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);



$worm_up = "";
$equipment = "";
$physical_ex = "";
$diet_plan = "";




$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $worm_up = $_POST["worm_up"];
    $equipment = $_POST["equipment"];
    $physical_ex = $_POST["physical_ex"];

    $diet_plan = $_POST["diet_plan"];

   

    do {
        if ( empty($worm_up) || empty($equipment) ||empty($physical_ex) ||  empty($diet_plan) ) {
            $errorMessage = " All the fields are required";
            break;
        }

        // add new member into database
        $sql = "INSERT INTO schedule (worm_up, equipment, physical_ex, diet_plan)" . "VALUES ('$worm_up', '$equipment','$physical_ex',  '$diet_plan')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        // clear the form
         
        $worm_up = "";
        $equipment = "";
        $physical_ex = "";
        $diet_plan = "";
        
        

        $successMessage = "Schedule added Correctly";
        header("location:Schedule.php");
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
        <h2>New Schedule</h2>

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
           
            <!-- <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Worm-up</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="worm_up" value="">
                </div>
            </div> -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Worm_up</label>
                     <div class="col-sm-6">
                        <select name="worm_up" class="form-control"  required>
                            <option value="" >------------------------------------- SELECT ----------------------------------------------</option>
                            <option value="Basic 30 min">Basic 30 min</option>
                            <option value="Standerd 1 Hour"> Standerd 1 Hour</option> 
                            <option value="Advance 1h and 30 min"> Advance 1h and 30 min </option>
                            
                          
               
                        </select>
                    </div>
            </div>
          
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Equipment</label>
                     <div class="col-sm-6">
                        <select name="equipment" class="form-control"  required>
                            <option value="" >------------------------------------- SELECT ----------------------------------------------</option>
                            <option value="Treadmills">Treadmills</option>
                            <option value="Pull Over"> Pull Over</option>
                            <option value="Bench Press"> Bench Press</option>
                            <option value="Shoulder Press">Shoulder Press</option>
                            <option value="Try shape Down">Try shape Down</option>
                            <option value="Cable Row">Cable Row</option>
                            <option value="Chest Mechine">Chest Mechine</option>
                          
               
                        </select>
                    </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Physical Ex</label>
                     <div class="col-sm-6">
                        <select name="physical_ex" class="form-control"  required>
                            <option value="" >------------------------------------- SELECT ----------------------------------------------</option>
                            <option value="Squeds 10 *5">Squeds 10 *5</option> 
                            <option value="Pushups 20">Pushups 20 </option>
                            <option value="Cardio">Cardio</option>
                          
               
                        </select>
                    </div>
            </div>
         
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Diet Plan</label>
                     <div class="col-sm-6">
                        <select name="diet_plan" class="form-control"  required>
                            <option value="" >------------------------------------- SELECT ----------------------------------------------</option>
                            <option value="Vegitable and meat"> Vegitable and meat</option>
                            <option value="Coffe and Vegitable">Coffe and Vegitable</option>
                            <option value="Fresh milk and butter"> Fresh milk and butter</option>
                           
                          
               
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
                    <button type="submit" class="btn btn-primary">Create Schedule</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="Schedule.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>

</body>

</html>
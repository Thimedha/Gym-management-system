<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);


$id = "";
$name = "";
$contact = "";
$age = "";
$gender = "";
$email = "";



$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //** Check if the id is valid or not

    if (!isset($_GET["id"])) {
        header("location:Settings.php");
        exit;
    }

    $id = $_GET["id"];
    // read the row of the selected member from database table
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:Settings.php");
        exit;
    }
    $name = $row["name"];
    $contact = $row["contact"];
    $age = $row["age"];
    $gender = $row["gender"];
    $email = $row["email"];
   
 
    
} else {
    // Post method: Update the data of the Member
    $id = $_POST["id"];
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
 
  
   
    do {
        if (empty($id) || empty($name) || empty($contact) || empty($age) || empty($gender) ||  empty($email)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE users " .
            "SET name = '$name',  contact = '$contact', age = '$age', gender = '$gender', email = '$email' " .
            "WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Member updated correctly";


        header("location:Settings.php");
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
        <h2>Update Member</h2>

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
        <label class="col-sm-3 col-form-label">Full Name</label>
            <div class="col-sm-6">
                <input type="text" name="name" class="form-control" required value="<?php echo $name; ?>">
            </div>
    </div>
  
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Contact No</label>
            <div class="col-sm-6">
                <input type="contact" name="contact" class="form-control" required value="<?php echo $contact; ?>">
            </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Age</label>
            <div class="col-sm-6">
                <input type="age" name="age" class="form-control" required value="<?php echo $age; ?>">
            </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-6">
            <select name="gender" class="form-control" value="<?php echo $gender; ?>">
                <option value="male">male</option>
                <option value="female">female</option>
      
            </select>
            </div>
    </div>
   
   <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Email Address</label>
            <div class="col-sm-6">
            <input type="email" name="email" class="form-control" required value="<?php echo $email; ?>">
            </div>
    </div>
    
  
 
    <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                <input type="submit" name="submit" value="Update" class="btn btn-outline-primary">
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="Settings.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>

</body>

</html>
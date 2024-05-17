<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "body_tone_db";

// create connection
$connection = new mysqli($servername, $username, $password, $database);


$id = "";
$name = "";



$email = "";
$mobile = "";
$message = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //** Check if the id is valid or not

    if (!isset($_GET["id"])) {
        header("location:Messages.php");
        exit;
    }

    $id = $_GET["id"];
    // read the row of the selected member from database table
    $sql = "SELECT * FROM contact_info WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:/Messages.php");
        exit;
    }
    $name = $row["name"];
   
    $email = $row["email"];
    $mobile= $row["mobile"];
    $message = $row["message"];
    
} else {
    // Post method: Update the data of the Member
    $id = $_POST["id"];

   
    $email = $_POST["email"];
   
    $message = $_POST["message"];
   
    
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

<form method="post" action="process.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            


    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
            <input class="form-control" type="text" name="email" id="" value="<?php echo $email; ?>" >
            </div>
    </div>
  
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Subject</label>
            <div class="col-sm-6">
            <input class="form-control" type="text" name="subject" id="" >
            </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Message</label>
            <div class="col-sm-6">
            <textarea class="form-control" cols="30" rows="10" name="message" id="" placeholder="Enter message"></textarea>
            </div>
    </div>
    
   
  
    <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                <input type="submit" value="send" name="submit">
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="Messages.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>
</body>

</html>
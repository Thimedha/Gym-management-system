<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];

    // Establish database connection
    $conn = mysqli_connect("localhost", "root", "", "body_tone_db");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO contact_info(name, Email, Mobile, Message) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $mobile, $message);
    mysqli_stmt_execute($stmt);

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Set session variable for thank you message
    $_SESSION['thank_you_message'] = "Thank you for your submission!";
    
    // Redirect back to contactform.php
    header("Location: contactfrom.php");
    exit;
}
?>

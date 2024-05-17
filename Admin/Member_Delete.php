<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "body_tone_db";

    // Create connection
    $connection =new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM users WHERE id=$id";
    $connection->query($sql);
}

header("location:Members.php");
exit;
?>
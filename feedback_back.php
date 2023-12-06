<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jeevansangam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process registration form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    // $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security
    $phoneno = $_POST["phoneno"];
    $message = $_POST["message"];

    

    // Insert data into the database
    $sql = "INSERT INTO `jeevansangam`.`feedback` ( `name`, `email`, `phone_no`, `message`) VALUES ('$name', '$email', '$phoneno', '$message')";
    
    if($conn->query($sql) === TRUE) {
        header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

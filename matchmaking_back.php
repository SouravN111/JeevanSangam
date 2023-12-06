<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <style>
        .user-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 300px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php
    // Replace these details with your actual database connection information
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'JeevanSangam';

    // Create a database connection
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve user preferences from the form
    $selectedGender = $_POST['gender'];
    $selectedAge = $_POST['age'];

    // Query the database to retrieve user details based on preferences
    $query = "SELECT * FROM user_info WHERE gender='$selectedGender' AND age='$selectedAge'";
    $result = mysqli_query($conn, $query);

    // Display user details in cards
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="user-card">';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<p><strong>Gender:</strong> ' . $row['gender'] . '</p>';
        echo '<p><strong>Age:</strong> ' . $row['age'] . '</p>';
        // Add more user details as needed
        echo '</div>';
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jeevansangam";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // User ID (which is hidden in the form)
    $user_id = $_POST["user_id"];

    // Personal info
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $education = $_POST["education"];
    $religion = $_POST["religion"];
    $mothertounge = $_POST["mothertounge"];
    $caste = $_POST["caste"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $profileimage = $_POST["profileimage"];

    // General info
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $bodytype = $_POST["bodytype"];
    $complexion = $_POST["complexion"];
    $bloodgroup = $_POST["bloodgroup"];
    $eating = $_POST["eating"];
    $smoke = $_POST["smoke"];
    $drink = $_POST["drink"];

    // Professional info
    $otype = $_POST["otype"];
    $occupation = $_POST["occupation"];
    $income = $_POST["income"];
    $officeaddress = $_POST["officeaddress"];

    // Family info
    $familytype = $_POST["familytype"];
    $gfname = $_POST["gfname"];
    $gmname = $_POST["gmname"];
    $fathername = $_POST["fathername"];
    $mothername = $_POST["mothername"];
    $foccupation = $_POST["foccupation"];
    $siblings = $_POST["siblings"];
    $members = $_POST["members"];

    // Update data in the database
    $sql = "UPDATE `jeevansangam`.`user_info` SET 
            `first_name`='$fname', 
            `middle_name`='$mname', 
            `last_name`='$lname', 
            `age`='$age', 
            `gender`='$gender', 
            `dob`='$dob', 
            `education`='$education', 
            `religion`='$religion', 
            `mother_tounge`='$mothertounge', 
            `caste`='$caste', 
            `address`='$address', 
            `city`='$city', 
            `state`='$state', 
            `country`='$country', 
            `profile_picture`='$profileimage', 
            `height`='$height', 
            `weight`='$weight', 
            `body_type`='$bodytype', 
            `complexion`='$complexion', 
            `blood_group`='$bloodgroup', 
            `eating`='$eating', 
            `smoke`='$smoke', 
            `drink`='$drink', 
            `occupation_category`='$otype', 
            `occupation`='$occupation', 
            `income`='$income', 
            `office_address`='$officeaddress', 
            `family_type`='$familytype', 
            `grandfather_name`='$gfname', 
            `grandmother_name`='$gmname', 
            `father_name`='$fathername', 
            `mother_name`='$mothername', 
            `father_occupation`='$foccupation', 
            `siblings`='$siblings', 
            `no_of_members`='$members' 
            WHERE `user_id`='$user_id'";

    if ($conn->query($sql) === TRUE) {
        header("location:myprofile.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>


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
 
    $userId = $_COOKIE["login"];

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

    // Insert data into the database
    $sql = "INSERT INTO `jeevansangam`.`user_info` (`user_id`, `first_name`, `middle_name`, `last_name`, `age`, `gender`, `dob`, `education`, `religion`, `mother_tounge`, `caste`, `address`, `city`, `state`, `country`, `profile_picture`, `height`, `weight`, `body_type`, `complexion`, `blood_group`, `eating`, `smoke`, `drink`, `occupation_category`, `occupation`, `income`, `office_address`, `family_type`, `grandfather_name`, `grandmother_name`, `father_name`, `mother_name`, `father_occupation`, `siblings`, `no_of_members`)
            VALUES ('$userId', '$fname', '$mname', '$lname', '$age', '$gender', '$dob', '$education', '$religion', '$mothertounge', '$caste', '$address', '$city', '$state', '$country', '$profileimage', '$height', '$weight', '$bodytype', '$complexion', '$bloodgroup', '$eating', '$smoke', '$drink', '$otype', '$occupation', '$income', '$officeaddress', '$familytype', '$gfname', '$gmname', '$fathername', '$mothername', '$foccupation', '$siblings', '$members')";

    if ($conn->query($sql) === TRUE) {
        header("location:myprofile.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

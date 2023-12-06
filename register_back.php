<?php 

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
    $sn=0;
                
    $rs=mysqli_query($conn,"select MAX(sr_no) from user_creds");
    if($r=mysqli_fetch_array($rs)){
        
        $sn=$r[0];
    }
    $sn++;

//generates unique code(our userid)
    $a=array();
    $code="";
    for($i='A'; $i<='Z'; $i++ ){
        array_push($a,$i);
        if($i='Z')
            break;
        }
    for($i='a'; $i<='z'; $i++ ){
        array_push($a,$i);
        if($i='z')
            break;
        }	
    for($i=0; $i<=9; $i++ ){
        array_push($a,$i);	
    }

    $b=array_rand($a,6);
    for($i=0; $i<=sizeof($b); $i++ ){
        $code=$code.$a[$b[$i]];
    }	

        //final code
    $code=$code."_".$sn;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password=$_POST["password"];
        // $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security
        $phoneno = $_POST["mno"];
        
    
        // Insert data into the database
        $sql = "INSERT INTO `jeevansangam`.`user_creds` (`user_id`, `username`, `email`,`phoneno`, `password`) VALUES ('$code', '$username','$email','$phoneno', '$password')";
        

        if($conn->query($sql) === TRUE) {
             
                header("location:login.php");

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>
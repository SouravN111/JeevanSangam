<?php 
    if(isset($_REQUEST["username"])&& isset($_REQUEST["pass"])){
		$uname=$_REQUEST["username"];
		$pass=$_REQUEST["pass"];
		$conn=mysqli_connect("localhost","root","","jeevansangam");
		$rs=mysqli_query($conn,"select * from user_creds where username='$uname'" );
		if($r=mysqli_fetch_array($rs)){
        	if($r["password"]==$pass){
				setcookie("login",$r["user_id"],time()+3600);
				header("location:index.php");
		    }
			else{
				echo " Wrong Password";
			}
    	}
        else{
			echo "Enter a valid email";
		}
		
		
		
	}	
?>
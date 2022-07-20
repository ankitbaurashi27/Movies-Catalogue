<?php


	session_start();
	
        $servername = "localhost";    
        $username = "root";    
        $password = "";    
        $dbname = "cinex";    

            $conn = new mysqli($servername,$username,$password,$dbname);
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully"."<br>";

		$firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
	
			 
		$s = "SELECT * FROM registration WHERE username = '$username'";
		$result = mysqli_query($conn,$s);
		$num = mysqli_num_rows($result);
			
		if($num != 0)
			{
				echo "Username Already Taken";
			}
		else
			{
				$reg = "INSERT INTO registration (firstName,lastName,email,password)
				VALUES ('$firstName','$lastName','$email','$password')";
				mysqli_query($conn,$reg);
				echo "Successfull";	
				header('location:login.html');
			}	
		
		$conn->close();

 ?>

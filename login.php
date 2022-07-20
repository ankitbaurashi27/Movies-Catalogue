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
        

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $s = "SELECT * FROM registration WHERE email = '$email' && password = '$password'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);
   
    if($num == 1)
    {
        header('location:index.html');
    }
    else
    {
        echo "invalid details";
        
    }


?>
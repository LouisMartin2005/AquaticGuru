<?php
session_start();
require 'connect.php';

    if(isset($_POST['submit']))
    {   
        $fullName = $_POST['fullName'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $location = $_POST['location'];
    
        $sql = "INSERT INTO reg (fullName, phoneNumber, email, location) VALUES ('$fullName', '$phoneNumber', '$email', '$location')";
    
        $rs = mysqli_query($conn, $sql);
        
        if($rs)
        {
             echo "<script>alert('You Are Successfully Registered!')</script>";
        }}
       
    
        $result = mysqli_query($conn, "SELECT * FROM reg LIMIT 50");
        $data = $result->fetch_all(MYSQLI_ASSOC);
    
        // close connection
        mysqli_close($conn);

?>
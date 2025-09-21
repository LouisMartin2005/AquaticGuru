<?php
session_start();
    $servername = "localhost";
    $username = "u170587073_louis";
    $password = "@quat1cGuru";
    $database = "u170587073_aqua";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
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
       
    
       
        mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <nav>

        <ul class="ag">
            <li><a href="index.html">Aquatic Guru</a></li>
        </ul>

        <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="content.html">Pricing</a></li>
            <li><a href="location.html">Location</a></li>
            <li><a href="register.php"  class="darken">Registration</a></li>
        </ul>

    </nav>

    <section class="bodies">
        <div class="container">
            <div class="title">Registration </div>
            <form action="register.php" method="POST">
                <div class='user-details'>
                    <div class='input-box'>
                        <span class="details">Full Name</span>
                        <input type="text" id="fullName" placeholder="Enter your name" required name="fullName">
                    </div>
                    <div class='input-box'>
                        <span class="details">Phone Number</span>
                        <input type="text" id="phoneNumber" placeholder="Enter your phone number" required name="phoneNumber">
                    </div>
                    <div class='input-box'>
                        <span class="details">Email</span>
                        <input type="text" id="email" placeholder="Enter your email" required name="email">
                    </div>
                    <div class='input-box'>
                        <span class="details">Location</span>
                        <input type="text" id="location" placeholder="Enter your preferred location" required name="location">
                    </div>
                    <div class="button">
                        <input type="submit" value="submit" name="submit">
                    </div>
                </div>
            </form>
            <div id="message" style="display: none;"> Message Received ! We will send you a text shortly.</div>
        </div>
    </section>

</body>
</html>

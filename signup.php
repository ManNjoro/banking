<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($name) &&!empty($email) && !empty($password) && !is_numeric($name))
    {
        //save to database
        
     $query = "insert into signup (name,email,password)  values ('$name','$email','$password')";
     mysqli_query($con,  $query);
     header("location:login.php");
     die;
    }
    else
    {
        echo "please enter some valid information!";
    }
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <div style="font-size:20px;margin:10px;color:blue;">
        <form method="post">
           Name: <input type="text" name="name"><br>
            Email:<input type="email" name="email"><br>
           Password: <input type="password" name="password"><br>
            <input type="submit" value="Signup"><br>
            <a href="login.php">Click to login</a>
</form>
</div>
</body>
</html> 
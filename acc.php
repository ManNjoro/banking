<?php
session_start();

include("connection.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    

    $Custname = $_POST['name'];
    $gender = $_POST['sex'];
    $Mobileno = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(!empty($Custname) && !empty($gender) && !empty($Mobileno) && !empty($email) && !empty($password))
    {
        //save to database
        
        $query = "insert into customer(Custno,Custname,gender,Mobileno,email,password) values('$Custno','$Custname','$gender','$Mobileno','$email','$password')";

        mysqli_query($con,$query);
        header("Location: index.php");
        die;
    }
    else{
        echo "Please fill in the form!";
    }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css"/>
    <title>Account</title>
</head>
<body>
    <header class="header">
    Don't have an account?Fill in the form below to create an account
</header>
        <main>
    <div class="form">
        <form method="post">
        Name: <input type="text" name="name" required=""><br><br>
        Gender:Male <input type="radio" name ="sex" value="M" required="">
female <input  type="radio" name ="sex" value="F" required=""><br><br>
Mobile:<input id="text" type="text" name="mobile" required=""><br><br>
Email:<input  id="text" type="email" name="email" required=""><br><br>
Password: <input  id="text" type="password" name="password" required=""><br><br>


            <input id="button" type="submit" value="Create"><br>
            
</form>
</div>
</main>
</body>
</html>
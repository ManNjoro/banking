<?php
session_start();

include("connection.php");
include("functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
</head>
<body>
    
<?php
$sql = "select * from customer;";
$result = mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
       echo $row['Custname'] . "<br>";
    }

}

?>
</body>
</html>
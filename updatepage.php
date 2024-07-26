<?php

$id = $_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'Person');
$query = "SELECT * FROM `Persondetail` WHERE `ID` = '$id'";
$result = mysqli_query($connection,$query);
$users = mysqli_fetch_assoc($result);

print_r($users);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<form action="./update.php" method="post">

<label for="">Name : </label>
<input type="text" name="name" placeholder = "Enter name" autofocus>
<br>
<br>

<label for="">Address : </label>
<input type="text" name="adress" placeholder = "Enter adress">
<br>
<br>

<label for="">Pincode : </label>
<input type="text" name="pincode" placeholder = "Enter pincode">
<br>
<br>

<label for="">State : </label>
<input type="text" name="state" placeholder = "Enter state">
<br>
<br>

<label for="">City : </label>
<input type="text" name="city" placeholder = "Enter city">
<br>
<br>

<label for="">MobileNumber : </label>
<input type="text" name="mobilenumber" placeholder = "Enter mobilenumber">
<br>
<br>

<label for="">Gender : </label>
<input type="text" name="gender" placeholder = "Enter gender">
<br>
<br>

<label for="">Hobby : </label>
<input type="text" name="hobby" placeholder = "Enter hobby">
<br>
<br>

<input type="submit" value="Update">    
</form>
</body>
</html>
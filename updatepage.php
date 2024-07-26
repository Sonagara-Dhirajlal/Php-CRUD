<?php

$id = $_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'Person');
$query = "SELECT * FROM `Persondetail` WHERE `ID` = '$id'";
$result = mysqli_query($connection,$query);

$users = mysqli_fetch_assoc($result);

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

<label for="">Id : </label>
<input type="hidden" name="id" value="<?= $users['ID']?>">
<br>
<br>

<label for="">Name : </label>
<input type="text" name="name" value="<?= $users['Name']?>" placeholder = "Enter name" autofocus>
<br>
<br>

<label for="">Address : </label>
<input type="text" name="address" value="<?= $users['Address']?>" placeholder = "Enter adress">
<br>
<br>

<label for="">Pincode : </label>
<input type="text" name="pincode" value="<?= $users['PinCode']?>" placeholder = "Enter pincode">
<br>
<br>

<label for="">State : </label>
<input type="text" name="state" value="<?= $users['State']?>" placeholder = "Enter state">
<br>
<br>

<label for="">City : </label>
<input type="text" name="city" value="<?= $users['City']?>" placeholder = "Enter city">
<br>
<br>

<label for="">MobileNumber : </label>
<input type="text" name="mobilenumber" value="<?= $users['MobileNumber']?>" placeholder = "Enter mobilenumber">
<br>
<br>

<label for="">Gender : </label>
<input type="text" name="gender" value="<?= $users['Gender']?>" placeholder = "Enter gender">
<br>
<br>

<label for="">Hobby : </label>
<input type="text" name="hobby" value="<?= $users['Hobby']?>" placeholder = "Enter hobby">
<br>
<br>

<input type="submit" value="Update">    
</form>
</body>
</html>
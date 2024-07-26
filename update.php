<?php

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$city = $_POST['city'];
$mobilenumber = $_POST['mobilenumber'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];

$connection = mysqli_connect('localhost','root','','Person');
$query = "UPDATE `Persondetail` SET `Name` = '$name', `Address` = '$address', `Pincode` = '$pincode', `State` = '$state', `City` = '$city', `MobileNumber` = '$mobilenumber', `Gender` = '$gender', `Hobby` = '$hobby' WHERE `ID` = $id ";
$row = mysqli_query($connection,$query);

if($row > 0)
    return header('Location: ./index.php');
else
    echo "Error";

?>
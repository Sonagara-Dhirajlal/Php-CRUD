<?php

$name = $_POST['name'];
$address = $_POST['address'];
$pincodce = $_POST['pincode'];
$state = $_POST['state'];
$city = $_POST['city'];
$mobilenumber = $_POST['mobilenumber'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];

$connection = mysqli_connect('localhost', 'root', '', 'Person');
$query = "INSERT INTO Persondetail (`Name`,`Address`,`PinCode`,`State`,`City`,`MobileNumber`,`Gender`,`Hobby`) VALUES ('$name','$address','$pincodce','$state','$city','$mobilenumber','$gender','$hobby')";
$row = mysqli_query($connection,$query);

if($row > 0)
    return header('Location: ./index.php');
else
    echo "Data not Inserted";

?>
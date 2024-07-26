<?php

$id = $_GET['id'];
$connection = mysqli_connect('localhost','root','','Person');
$query = "DELETE FROM `Persondetail` WHERE `ID` = '$id' ";
$row = mysqli_query($connection,$query);

if ($row > 0)
    return header('Location: ./index.php');
else
    echo "Error";

?>
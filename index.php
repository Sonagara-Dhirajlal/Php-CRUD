<?php

$connection = mysqli_connect('localhost', 'root', '', 'Person');
$query = "SELECT * FROM `Persondetail` ";
$result = mysqli_query($connection,$query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cal</title>
</head>
<body>
    <form action="./data.php" method="post">

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

        <input type="submit" value="Submit">    
    </form>

    <br>
    <br>

    <table border='1' >
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Pincode</th>
            <th>State</th>
            <th>City</th>
            <th>MobileNumber</th>
            <th>Gender</th>
            <th>Hobby</th>
            <th>Delete</th>
            <th>Update</th>
        </thead>
        <tbody>
            <?php foreach($users as $user){?>
                <tr>
                    <td><?php echo $user['ID']?></td>
                    <td><?php echo $user['Name']?></td>
                    <td><?php echo $user['Address']?></td>
                    <td><?php echo $user['PinCode']?></td>
                    <td><?php echo $user['State']?></td>
                    <td><?php echo $user['City']?></td>
                    <td><?php echo $user['MobileNumber']?></td>
                    <td><?php echo $user['Gender']?></td>
                    <td><?php echo $user['Hobby']?></td>
                    <td><a href="./delete.php?id=<?=$user['ID']?>">Delete</a></td>
                    <td><a href="./updatepage.php?id=<?=$user['ID']?>">Update</a></td>
                </tr>
            <?php } ?>
        </tbody> 
    </table>
</body>
</html>
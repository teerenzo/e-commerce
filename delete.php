<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require './includes/config.php';
$prod_id=$_GET['id'];
 $delete =mysqli_query($con,"DELETE FROM `cart` WHERE `c_id`='$prod_id'");

header('Location:index');
  



?>
</body>
</html>


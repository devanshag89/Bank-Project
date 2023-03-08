<?php
include('config.php');
$Id = $_SESSION['Id'];
$pin= $_POST['pin'];
$cpin = $_POST['cpin'];

if($pin==$cpin)
{
    $query = "UPDATE register SET pin = '$pin' WHERE Id = '$Id'";
    $result = mysqli_query($conn,$query);
    $_SESSION['succ']='1';
    header("Location:pin.php");
}
else
{
    $_SESSION['incor']='1';
    header("Location:pin.php");
}
?>
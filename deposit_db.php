<?php
session_start();
include('config.php');
$money=$_POST['money'];
$epin=$_POST['epin'];
$Id=$_SESSION['Id'];

$query="SELECT * FROM register WHERE Id='$Id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$pin=$row['pin'];


if($pin==$epin)
{
$query="SELECT * FROM deposit WHERE Id='$Id'";
$result=mysqli_query($conn,$query);
$present = mysqli_num_rows($result);

if ($present>0){
    $row=mysqli_fetch_array($result);
    $deposit=$row['amount'];
    $total=$deposit+$money;
    $querys="UPDATE deposit SET `amount`='$total' WHERE Id='$Id'";
    $result=mysqli_query($conn,$querys);
    header("Location:dashboard.php");
}
else{
$sql = "INSERT INTO deposit(`Id`, `amount`) VALUES ('$Id','$money')";
$result=mysqli_query($conn,$sql);
header("Location:dashboard.php");
}
}
else
{
    $_SESSION['ipin']='1';
    header("Location:deposit.php");
}

?>
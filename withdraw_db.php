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
$query="SELECT amount FROM deposit WHERE Id='$Id'";
$result=mysqli_query($conn,$query);
$present = mysqli_num_rows($result);

if ($present>0){
    $row=mysqli_fetch_array($result);
    $amount=$row['amount'];
    if($amount>$money)
    {
        $sum=$amount-$money;
        $querys="UPDATE deposit SET `amount`='$sum' WHERE Id='$Id'";
        $result=mysqli_query($conn,$querys);
        header("Location:dashboard.php");
    }else{
        $_SESSION['alert']='no money';
        header("Location:withdraw.php");
    }
}
}
else
{
    $_SESSION['ipin']='1';
    header("Location:withdraw.php");
}

?>
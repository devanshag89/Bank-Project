<?php
include('config.php');
$email=$_POST['email'];
$pass=$_POST['password'];
$sql="SELECT * from register Where email='$email'";
$result=mysqli_query($conn,$sql);
$present=mysqli_num_rows($result);
if($present>0)
{
    $query="SELECT * FROM register WHERE email='$email' AND password='$pass'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    $_SESSION['Id']=$row['Id'];
    header("Location:dashboard.php");
   
}
?>

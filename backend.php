<?php
session_start();

$conn=mysqli_connect('localhost','root','','sample');

if(! isset($conn)){
    echo"not connected to database";
}

$email=$_POST['email'];
$pass=$_POST['password'];

$query="INSERT INTO register(email,password) VALUES ('$email','$pass')";
$result=mysqli_query($conn,$query);

if ($result==true) {
    $_SESSION['registered']='1';
    header("Location:index.php");

}
else{
    $_SESSION['notreg']='1';
    header("Location:index.php");
}
?>
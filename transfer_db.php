<?php
include('config.php');
$Id = $_SESSION['Id'];
$money = $_POST['money'];
$epin=$_POST['epin'];
$remail = $_POST['remail'];

$query="SELECT * FROM register WHERE Id='$Id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$pin=$row['pin'];

$query= "SELECT * FROM register WHERE Id = '$Id'";
$result=mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$email = $row['email'];

if($pin==$epin)
{

$sql = "SELECT * FROM register WHERE email = '$remail'";
$result = mysqli_query($conn,$sql);
$present = mysqli_num_rows($result);

if($present>0)
{
    $query= "SELECT amount FROM deposit WHERE Id = '$Id'";
    $result=mysqli_query($conn,$query);
    $second = mysqli_num_rows($result);
    if($second>0)
    {
        $row = mysqli_fetch_array($result);
        $amount = $row['amount'];
        if($amount>$money)
        {
            $query = "SELECT Id FROM register WHERE email = '$remail'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            $RId = $row['Id'];

            $sql = "SELECT amount FROM deposit WHERE id = '$RId'";
            $results = mysqli_query($conn,$sql);
            $third = mysqli_num_rows($results);
            if ($third>0)
            {
                $row = mysqli_fetch_array($results);
                $samount = $row['amount'];
                $sum = $samount+$money;
                $query = "UPDATE deposit SET amount='$sum' WHERE Id = '$RId'";
                $result=mysqli_query($conn,$query);

                $remain=$amount-$money;
                $sql="UPDATE deposit SET amount='$remain' WHERE Id = '$Id'";
                $result=mysqli_query($conn,$sql);
                $_SESSION['done']='1';
                header("Location:transfer.php");

                $queri="INSERT INTO `transactions`(`UID`, `sender`, `reciever`, `amount`) VALUES ('$Id','$email','$remail','$money')";
                $resulte=mysqli_query($conn,$queri);
             
            }
            else
            {
                $query = "INSERT INTO deposit(Id,amount) VALUES ('$RId','$money')";
                $result=mysqli_query($conn,$query);

                $remain=$amount-$money;
                $sql="UPDATE deposit SET amount='$remain' WHERE Id = '$Id'";
                $result=mysqli_query($conn,$sql);
                $_SESSION['done']='1';
                header("Location:transfer.php");

                $queri="INSERT INTO `transactions`(`UID`, `sender`, `reciever`, `amount`) VALUES ('$Id','$email','$remail','$money')";
                $resulte=mysqli_query($conn,$queri);
                
            }


        }
        else{
            $_SESSION['no_money']='1';
            header("Location:transfer.php");
        }
    }
}
else
{
    $_SESSION['alert_email']='1';
    header("Location:transfer.php");
}
}
else
{
    $_SESSION['ipin']='1';
    header("Location:transfer.php");
}
?>

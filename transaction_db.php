<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="main_div">
        <h2 class="font-bold text-2xl">Transactions</h2>
        <div class="centre_div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Sended By</th>
                            <th>Received By</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

$Id=$_SESSION['Id'];

$query="SELECT * FROM transactions WHERE UID = '$Id' ORDER BY ID  DESC ";
$result=mysqli_query($conn,$query);
$nums=mysqli_num_rows($result);

while($data=mysqli_fetch_array($result))
            {
            ?>
                <tr>
                    <td><?php echo $data['amount']; ?></td>
                    <td><?php echo $data['sender']; ?></td>
                    <td><?php echo $data['reciever']; ?></td>
                    <td><?php echo $data['date']; ?></td>
                    <td><?php echo $data['time']; ?></td>
                </tr>
        <?php
            }
            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>
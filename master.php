<?php

include('config.php');

$Id=$_SESSION['Id'];

$query = "SELECT * FROM register WHERE Id='$Id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$email = $row['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style type="text/css">
        .panel{
            width: 100%;
            height: 900px;
            background: white;
        }
        .head{
            height: 10%;
            width: 100%;
            background: white;
        }
        .side{
          width: 15%;
          height: auto;
          background: white;
          float: left;
        }
        .cont{
          float: right;
          width: 85%;
          heigth: auto;
        }
    </style>
</head>
<body>
    <div class="panel">
        <div class="head">
        <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Coder Bank</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900">Settings</a>
    
    </nav>
    <a href="logout.php">
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Logout
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
    </a>
  </div>
</header>  
        </div>
<div class="side">
                <div class="flex flex-shrink-0 p-4 px-4 bg-gray-50">
                    <a href="#" class="flex-shrink-0 block w-full group">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900"><?php echo $email; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
    <div class="flex overflow-hidden bg-white rounded-lg">
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64">
            <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white border-r border-gray-50">
                
                <div class="flex flex-col flex-grow px-4 mt-5">
                    <nav class="flex-1 space-y-1 bg-white">
                        <ul>
                            <li>
                                <a href="dashboard.php" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg bg-gray-50 focus:shadow-outline" white="" 70="" href="#">
                                    
                                    <span  class="ml-4">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="deposit.php" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" href="#">
                                    
                                    <span  class="ml-4">Deposit</span>
                                </a>
                            </li>
                            <li>
                                <a href="withdraw.php" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" href="#">
                                    
                                    <span  class="ml-4">Withdraw</span>
                                </a>
                            </li>
                            <li>
                                <a href="transfer.php" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" href="#">
                                    
                                    <span  class="ml-4">Transfer</span>
                                </a>
                            </li>
                            <li>
                                <a href="transaction.php" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" white="" 70="" href="#">
                                    
                                    <span  class="ml-4">Transaction History</span>
                                </a>
                            </li>
                            <li>
                                <a href="balance.php" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" white="" 70="" href="#">
                                    
                                    <span  class="ml-4">Balance</span>
                                </a>
                            </li>
                            <li>
                                <a href="settings.php" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" white="" 70="" href="#">
                                    
                                    <span  class="ml-4">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="logout.php" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" white="" 70="" href="#">
                                    
                                    <span  class="ml-4">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
</div>

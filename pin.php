<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('master.php');
    $message1='';
    $message2='';
    
    if(isset($_SESSION['incor']))
    {
        $message1='Confirm PIN is not matching';
    }
    if(isset($_SESSION['succ']))
    {
        $message2='PIN generated successfully'; 
    }
    ?>
    <div class="cont">

<section class="">
    <div class=" items-center px-5 py-12 lg:px-20">
    <h1 class="font-bold text-center text-2xl">Set your PIN</h1>
    <h2 style=" color:red "><?php echo $message1; ?></h2>
    <h2 style=" color:green "><?php echo $message2; ?></h2>

        <div class="flex flex-col w-full max-w-md p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white rounded-lg md:mt-0">
            <div class="mt-8">
                <div class="mt-6">
                    <form action="pin_db.php" method="POST" class="space-y-6">
                            
                            <label for="email" class="block text-sm font-medium text-neutral-600"> Enter New PIN </label>
                            <div class="mt-1">
                                <input id="email" name="pin" type="int" placeholder="Enter new PIN" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" fdprocessedid="nn6ekf">
                            </div>
                            <label for="email" class="block text-sm font-medium text-neutral-600"> Confirm PIN </label>
                            <div class="mt-1">
                                <input id="email" name="cpin" type="int" placeholder="Confirm PIN" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" fdprocessedid="nn6ekf">
                            </div>

                            <div>
                            <button type="submit" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" fdprocessedid="17qr4e">SET PIN</button>
                            </div>
                            
                    </form>
                    
                    </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php unset($_SESSION['incor']); ?>
<?php unset($_SESSION['succ']); ?>
    
</body>
</html>
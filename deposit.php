<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .heading{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }
        h2{
            text-align: center;
            color:red;
        }
    </style>
</head>
<body>
   <?php include('master.php');
   $message='';
   if(isset($_SESSION['ipin']))
   {
       $message='Incorrect PIN Entered';
   } 
   
   ?>
   
   <section class="">
    <div class=" items-center px-5 py-12 lg:px-20">
    <h1 class="heading">Add Money</h1>
        <div class="flex flex-col w-full max-w-md p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white rounded-lg md:mt-0">
        <h2 class="color:red"><?php echo $message; ?></h2>
            <div class="mt-8">
                <div class="mt-6">
                    <form action="deposit_db.php" method="POST" class="space-y-6">
                    
                        
                            
                            <label for="email" class="block text-sm font-medium text-neutral-600"> Enter Amount </label>
                            <div class="mt-1">
                                <input id="email" name="money" type="float" placeholder="Enter Amount" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" fdprocessedid="nn6ekf">
                            </div>
                            <label for="email" class="block text-sm font-medium text-neutral-600"> Enter PIN </label>
                            <div class="mt-1">
                                <input id="email" name="epin" type="int" placeholder="Enter PIN" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" fdprocessedid="nn6ekf">
                            </div>

                            <div>
                            <button type="submit" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" fdprocessedid="17qr4e">deposit</button>
                            </div>
                            
                    </form>
                    <div class="relative my-4">
                        
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 text-neutral-600 bg-white"> Amount should be in Rupees </span>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
</div> 
<?php unset($_SESSION['ipin']); ?>
</body>
</html>
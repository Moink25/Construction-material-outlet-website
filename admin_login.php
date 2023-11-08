<?php
session_start();
  
  $host = 'localhost';
$username = 'root';
$password = '';
$database = 'project';

$conn = mysqli_connect($host, $username, $password, $database);


  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $u='abc';
    $p='abc@123';
   

    if ($username==$u && $password==$p) {
        // $_SESSION['username'] = $email;
        header("Location: admin_after_login.html"); // Redirect to dashboard or home page
    } else {
        echo "<div class='bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4' role='alert'>";
        echo "<p class='font-bold'>Alert!</p>";
        echo "<p>Email or Password is wrong.</p>";
      echo "</div>";

        
    }
}
  // Close database connection
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <header>
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
               
                <div class="w-full text-gray-700 md:text-center text-2xl font-semibold flex ">
                    <img src="https://png.pngtree.com/template/20191014/ourmid/pngtree-building-and-construction-logo-design-template-image_317780.jpg" alt="" class="w-12 ">
                   <h2 class="text-12">BUILDLINKMARKET
                   </h2>
                </div>
                <div class="flex items-center justify-end w-full">
                    

                    
                </div>
            </div>
            <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                <div class="flex flex-col sm:flex-row">
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="index.html">Home</a>
                    <!-- <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Categories</a> -->
                   
                   
                </div>
            </nav>
            <div class="relative mt-6 max-w-lg mx-auto">
           
                
            </div>
        </div>
    </header>
    <!-- component -->
<div class="py-6">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
          <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('https://source.unsplash.com/500x500/?construction')"></div>
          <div class="w-full p-8 lg:w-1/2">
              <h2 class="text-2xl font-semibold text-gray-700 text-center">BUILDLINKMARKET</h2>
              <p class="text-xl text-gray-600 text-center">Welcome back!</p>
            
             <form action="#" method="POST">
              <div class="mt-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                  <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="username" required>
              </div>
              <div class="mt-4">
                  <div class="flex justify-between">
                      <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                      
                  </div>
                  <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="password" required>
              </div>
              <div class="mt-8">
              <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">
                    <input type="submit" name="submit" id="submit" value="Login">
                  </button>
              </div>
              </form>
              
          </div>
      </div>
  </div>
</body>
</html>
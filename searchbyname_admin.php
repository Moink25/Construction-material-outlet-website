<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Specify the name of the table you want to count rows from
$tableName = "constructionsupply";

// Query to count the total number of rows in the table
$sql = "SELECT COUNT(*) as totalRows FROM $tableName";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $totalRows = $row['totalRows'];

    
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search by name</title>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="https://png.pngtree.com/template/20191014/ourmid/pngtree-building-and-construction-logo-design-template-image_317780.jpg" alt="Logo" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full">
      <span class="ml-3 text-xl">BuildLinkMarket</span>
    </a>
      
  
<nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href="index.html" class="mr-5 hover:text-gray-900">Home</a>
      
      <!-- <a class="mr-5 hover:text-gray-900">products</a>
      <a class="mr-5 hover:text-gray-900">Category</a>
      <a class="mr-5 hover:text-gray-900">Search By ID</a> -->

       <a href="product.php" class="mr-5 hover:text-gray-900">
        <button class="hover:text-gray-900 focus:outline-none">Product</button>
    </a>
    
    </nav>
     <a href="searchbyID.php" class="mr-5 hover:text-gray-900">
        <button class="hover:text-gray-900 focus:outline-none">Search by ID </button>
    </a>

    <a href="searchbyname.php" class="mr-5 hover:text-gray-900">
      <button class="hover:text-gray-900 focus:outline-none">Search by Name </button>
  </a>
    </nav>

    <!-- <a href="file:///C:/Users/VEDANT%20BAILMARE/Desktop/DBMSproject/Search.html" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
  Search by name
  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
    <path d="M5 12h14M12 5l7 7-7 7"></path>
  </svg>
</a> -->
  </div>
</header>

  <form method="POST" action="display_name.php">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
       
        <select id="select-option" name="selected-option" class="ml-[120px]">

        <?php
        for($i=1001; $i<=(1000+$totalRows); $i++){
            $servername = "localhost"; // Change this to your database server name
            $username = "root";        // Change this to your database username
            $password = "";            // Change this to your database password
            $database = "project";     // Change this to your database name
    
            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);
    
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
    
          
                $id = $i;
    
                // Query to retrieve the row based on the provided ID
                $sql = "SELECT * FROM constructionsupply WHERE ProductID = $id";
    
                $result = $conn->query($sql);
    
                if (!$result) {
                    die("Error in SQL query: " . $conn->error);
                }
    
                if ($result->num_rows > 0) {
                    // Display the retrieved data
                    while ($row = $result->fetch_assoc()) {
            echo "<option>". $row['ProductName'] ."</option>";}
                    }
                    else {
                        echo "No data found for ID: $id";
                    }
                
        
                // Close the database connection
                $conn->close();}
                ?>
         
        </select>
       
        <input type="submit" value="submit" name="Submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-[960px]">
                        
    </div>
</form>

  </head>
<body>
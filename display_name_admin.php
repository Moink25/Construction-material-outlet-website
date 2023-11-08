<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
     <a href="searchbyID_admin.php" class="mr-5 hover:text-gray-900">
        <button class="hover:text-gray-900 focus:outline-none">Search by ID </button>
    </a>

    <a href="searchbyname_admin.php" class="mr-5 hover:text-gray-900">
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

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
        <!-- <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2> -->
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">BUILDLINKMARKET</h1>
        <div class="flex mb-4">
          <!-- <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Description</a>
          <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Reviews</a>
          <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Details</a> -->
        </div>
        <?php
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

        if (isset($_POST['selected-option'])) {
            $name = $_POST['selected-option'];

            // Query to retrieve the row based on the provided ID
            $sql = "SELECT * FROM constructionsupply WHERE ProductName = '$name'";

            $result = $conn->query($sql);

            if (!$result) {
                die("Error in SQL query: " . $conn->error);
            }

            if ($result->num_rows > 0) {
                // Display the retrieved data
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='flex border-t border-gray-200 py-2'>";
                    echo "<span class='text-gray-500'>ID</span>";
                    echo "<span class='ml-auto text-gray-900'>" . $row['ProductID'] . "</span>";
                    echo "</div>";
                    echo "<div class='flex border-t border-gray-200 py-2'>";
                    echo "<span class='text-gray-500'>Name</span>";
                    echo "<span class='ml-auto text-gray-900'>" . $row['ProductName'] . "</span>";
                    echo "</div>";
                    echo "<div class='flex border-t border-gray-200 py-2'>";
                    echo "<span class 'text-gray-500'>Category</span>";
                    echo "<span class='ml-auto text-gray-900'>" . $row['Category'] . "</span>";
                    echo "</div>";
                    echo "<div class='flex border-t border-gray-200 py-2'>";
                    echo "<span class='text-gray-500'>Stock</span>";
                    echo "<span class='ml-auto text-gray-900'>" . $row['CurrentStock'] . "</span>";
                    echo "</div>";
                    echo "<div class='flex border-t border-gray-200 py-2'>";
                    echo "<span class='text-gray-500'>Record-Level</span>";
                    echo "<span class='ml-auto text-gray-900'>" . $row['RecordLevel'] . "</span>";
                    echo "</div>";
                    echo "<div class='flex border-t border-gray-200 py-2'>";
                    echo "<span class='text-gray-500'>UnitPrice</span>";
                    echo "<span class='ml-auto text-gray-900'>" . $row['UnitPrice'] . "</span>";
                    echo "</div>";
                    echo "<div class='flex border-t border-gray-200 py-2'>";
                    echo "<span class='text-gray-500'>Brand</span>";
                    echo "<span class='ml-auto text-gray-900'>" . $row['Brand'] . "</span>";
                    echo "</div>";
                }
            } else {
                echo "No data found for ID: $id";
            }
        }

        // Close the database connection
        $conn->close();
        ?>
        <?php
        $servername = "localhost"; // Change this to your database server name
        $username = "root";        // Change this to your database username
        $password = "";            // Change this to your database password
        $database = "project";     // Change this to your database name

        echo "<div class='flex border-t border-gray-200 py-2'>";
        echo "<span class='text-gray-500'>Shops</span>";

        $conn = new mysqli($servername, $username, $password, $database);
        $sql = "SELECT * FROM deccan WHERE ProductName = '$name'";
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<span class='ml-auto text-gray-900'>Deccan</span>";
            }
            $conn->close();
        }

        $conn = new mysqli($servername, $username, $password, $database);
        $sql = "SELECT * FROM karvenagar WHERE ProductName = '$name'";
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<span class='ml-auto text-gray-900'>Karve Nagar</span>";
            }
            $conn->close();
        }

        $conn = new mysqli($servername, $username, $password, $database);
        $sql = "SELECT * FROM katraj WHERE ProductName = '$name'";
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<span class='ml-auto text-gray-900'>Katraj</span>";
            }
            $conn->close();
        }

        $conn = new mysqli($servername, $username, $password, $database);
        $sql = "SELECT * FROM wagholi WHERE ProductName = '$name'";
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<span class='ml-auto text-gray-900'>Wagholi</span>";
            }
            $conn->close();
        }
        echo "</div>";
        ?>
        
      </div>
      <!-- <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400"> -->
    </div>
  </div>
</section>
</body>
</html>

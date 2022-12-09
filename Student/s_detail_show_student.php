<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher-Portal</title>
    <link href="tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="./app.js"></script>
    <link rel="stylesheet" href="front.css">
</head>
<body>
<!--bar-->
<!--HEADER-->
<nav class="navbar">
    <div class="navbar__container">
        <a href="./index.html" id="navbar__logo">ITU</a>
        
    </div>
    <!--        NAVBAR-->
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" >
        <a href="./index.html" target="_self" class="mr-5 hover:text-black">Home</a>
        <a href="" target="_self" class="mr-5 hover:text-black">About</a>
    </nav>
    <a href="./student.html"  target=""><button class="inline-flex items-center bg-green-400 border-0 py-2 px-6 mx-2 focus:outline-none hover:bg-green-600 rounded text-base mt-4 md:mt-0">Go to back</button></a>
</nav>
<hr>

<hr>
<!--under manger-->
<section class="text-gray-600 body-font"  style="background-color: black; border-radius: 10px; margin: 80px">
    <div class="container px-5 py-24 mx-auto" >
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Student Detail</h1>
        </div>
        <div class="lg:w-3/3 w-full mx-auto overflow-auto" style="background-color: white">
            <table class="table-auto w-full text-left whitespace-no-wrap" >
                <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Student id.</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Name</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Phone</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Email</th>
                </tr>
                </thead>
            <tbody>
        <?php
                      $con = mysqli_connect("localhost","root","","itu_db");
        	          if (mysqli_connect_errno()){
        		          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        		          die();
        		      }
                $result = mysqli_query($con,"SELECT * FROM `Student`");
                while($row = mysqli_fetch_assoc($result)){
                ?>
        		        <tr>
                                <td><?php echo $row['id']?>  </td>
                                <td><?php echo $row['Full Name']?> </td>
                                <td><?php echo $row['Phone']?> </td>
                                <td><?php echo $row['Email']?> </td>
                        </tr>

                <?php
                    }
                ?>

                </tbody>
            </table>
        </div>


</section>

</body>
</html>
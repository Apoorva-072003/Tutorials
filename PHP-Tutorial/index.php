<?php
// to connect php to database of mysql then we have to use database mysql functions which are already available and if not we can use php data objects but as a beginner use mysqli (i for improved used for connection)
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // // Create a database connection
    // $con = mysqli_connect($server, $username, $password);

    // // Check for connection success
    // if(!$con){
    //     die("connection to this database failed due to" . mysqli_connect_error());
    // }
    // // echo "Success connecting to the db";


    // Create a database connection
$con = mysqli_connect($server, $username, $password);

// Check for connection success
if (!$con) {
    die("Connection to this database failed due to " . mysqli_connect_error());
}

// Select the specific database you want to work with
$database_name = "trip"; // Replace with your actual database name
if (!mysqli_select_db($con, $database_name)) {
    die("Database selection failed: " . mysqli_error($con));
}

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    // $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());"; //we used that query in html file here
    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

    // echo $sql;
    //here trip.trip selects table from database 

    // Execute the query of it is true
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- <img class="bg" src="https://images.pexels.com/photos/1486974/pexels-photo-1486974.jpeg?auto=compress&cs=tinysrgb&w=600" alt="College"> -->
    <!-- https://images.pexels.com/photos/147411/italy-mountains-dawn-daybreak-147411.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 --> 
    <!--when you want to use images so use images which are saved in htdocs folder-->
    <img class="bg" src="https://images.pexels.com/photos/1166209/pexels-photo-1166209.jpeg?auto=compress&cs=tinysrgb&w=600" alt="College">
    <div class="container">
        <h1>Welcome to College US Trip form</h3>
            <p>Enter your details and submit this form to confirm your participation in the trip </p>
    <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="text" name="age" id="age" placeholder="Enter your Age">
                <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                <textarea name="other" id="other" cols="30" rows="10"
                    placeholder="Enter any other information here"></textarea>
                <button class="btn">Submit</button>
            </form>
    </div>
    <script src="index.js"></script>

</body>
</html>

<!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'Apoorva Patil', '23',
'female', 'this@this.com', '9394839848', 'This is my first use of mysql for php', current_timestamp()); -->
<!-- Above query is really imp query -->
<!-- Fatal error: Uncaught mysqli_sql_exception: Duplicate entry '0' for key 'PRIMARY' in C:\xampp\htdocs\phptut\index.php:48 Stack trace: #0 C:\xampp\htdocs\phptut\index.php(48): mysqli->query('INSERT INTO `tr...') #1 {main} thrown in C:\xampp\htdocs\phptut\index.php on line 48 -->
<!-- there was above error but maybe i removed by deleting column which sno (primary key) was equal to 0 and set query to not null-->
<!-- Multiple cursor can done by alt + shift + drag for how many lines you want  -->
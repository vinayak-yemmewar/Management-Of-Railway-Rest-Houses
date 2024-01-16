<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to db failed due to" . mysqli_connect_error());
}
// echo"connected to db successfully";

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$members=$_POST['members'];
$city=$_POST['city'];
$date=$_POST['date'];

$sql="INSERT INTO `bookrail`.`bookingtable` (`name`, `age`, `gender`, `email`, `phone`, `members`, `city`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$members', '$city', '$date');";
// echo $sql;

if($con->query($sql)==true)
{
    // echo"Succesfully inserted";
    $insert=true;
}else{
    echo"Error: $sql <br> $con->error";
}
$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">    
<link rel="stylesheet" href="style1.css">
    <title>Booking page</title>
</head>
<body>
    <img class="bg" src="station5.jpg" alt="station photo">
    <div class="container">
        <h1>Welcome to Booking Process.</h1>
        <p>Enter your details and submit the form to confirm trip.</p>

        <?php
        if($insert==true)
        {
        echo "<p class='submitmsg'>Thanks for submitting your form. We are happy to see you joining.</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <label for="">Select Gender: </label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <!-- <input type="text" name="gender" id="gender" placeholder="Enter your gender"> -->
            <input type="text" name="email" id="email" placeholder="Enter your Email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <label for="">Select Members: </label>
            <select name="members" id="members">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <label for="">Select City: </label>
            <select name="city" id="city">
                <option value="mumbai">Mumbai</option>
                <option value="pune">Pune</option>
                <option value="hydrabad">Hydrabad</option>
            </select>
            <label for="">Select Date:</label>
            <input type="date" id="date" name="date">

            <button class="btn">Submit</button>
            
        </form>
    </div>

    <script src="index.js"></script>
</body>
</html>


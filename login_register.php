<?php
require('connection.php');
session_start();

// For login
if (isset($_POST['login'])) {
    $emailUsername = mysqli_real_escape_string($con, $_POST['email_username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM `register` WHERE `email`='$emailUsername' OR `username`='$emailUsername'";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                // If password matched
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $row['username'];
                header("Location: home.php");
                exit;
            } else {
                // If password not matched
                echo "<script>alert('Error: Incorrect password');</script>";
                echo "<script>window.location.href='index.php';</script>";
                exit;
            }
        } else {
            // If no user found with the given email/username
            echo "<script>alert('Error: Email or username not registered');</script>";
            echo "<script>window.location.href='index.php';</script>";
            exit;
        }
    } else {
        // If query execution fails
        echo "<script>alert('Error: Unable to execute query');</script>";
        echo "<script>window.location.href='index.php';</script>";
        exit;
    }
}

// For registration
if (isset($_POST['register'])) {
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $userExistQuery = "SELECT * FROM `register` WHERE `username`='$username' OR `email`='$email'";
    $result = mysqli_query($con, $userExistQuery);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // If username or email already exists
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username) {
                echo "<script>alert('Username $username already taken');</script>";
            } else {
                echo "<script>alert('Email $email already taken');</script>";
            }
            echo "<script>window.location.href='index.php';</script>";
            exit;
        } else {
            // Hash the password before storing it in the database
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $insertQuery = "INSERT INTO `register`(`fullname`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$hashedPassword')";
            if (mysqli_query($con, $insertQuery)) {
                // If data inserted successfully
                echo "<script>alert('Registration successful');</script>";
                echo "<script>window.location.href='index.php';</script>";
                exit;
            } else {
                // If data insertion fails
                echo "<script>alert('Error: Unable to register');</script>";
                echo "<script>window.location.href='index.php';</script>";
                exit;
            }
        }
    } else {
        // If query execution fails
        echo "<script>alert('Error: Unable to execute query');</script>";
        echo "<script>window.location.href='index.php';</script>";
        exit;
    }
}
?>

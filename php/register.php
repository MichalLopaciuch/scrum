<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "scrum";

@$connection = mysql_connect($dbHost, $dbUsername, $dbPassword);
mysql_select_db($dbName, $connection);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_errno());
}

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$photoURL = $_POST['photoURL'];

$result = mysql_query("SELECT * 
                         FROM users
                          ;");

$id = mysql_num_rows($result);
$q = "INSERT INTO users (email, password, name, surname, photo_url) VALUES ( '$email', '$password', '$name', '$surname', '$photoURL')";
$response = mysql_query($q);
echo json_encode($q);

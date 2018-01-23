<?php
$ERROR = 'ERROR';
$ERROR2 = 'ERROR2';

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

$result = mysql_query("SELECT id, email, password, name, surname, photo_url 
                         FROM users 
                        WHERE email = '$email' 
                          AND password = '$password'
                          ;");

@$num_rows = mysql_num_rows($result);
if($num_rows == 1){
  $row = mysql_fetch_array($result);
  $ret = array('id'=>   $row[0],
          'email'=>     $row[1],
          'password'=>  $row[2],
          'name'=>      $row[3],
          'surname'=>   $row[4],
          'photo_url'=> $row[5]
          );
  echo json_encode($ret, JSON_PRETTY_PRINT);
}
elseif ($num_rows > 1){
  echo json_encode($ERROR2);
}
else echo json_encode($ERROR);
?>
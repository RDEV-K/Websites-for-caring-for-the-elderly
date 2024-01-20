<?php
// $link = mysql_connect('50.62.209.111:3306', 'requestinfost', 'rose186SJM');
// $link = mysql_connect('localhost', '', '');
// $db_connect=mysql_select_db('test');
// $link = new mysqli('localhost', 'root', '');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsite";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
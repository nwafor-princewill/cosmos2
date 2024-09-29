<?php
$servername = "bbveejwftidw29b5olfx-mysql.services.clever-cloud.com";
$username = "u9h4whfio9gg51af";
$password = "Png7tNhtQ68T1QQpyPzB";
$dbname = "bbveejwftidw29b5olfx";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $dsn = "mysql:host=localhost;dbname=consultations";
// $dbusername = "root";
// $dbpassword = "";

// try {
//     $pdo = new PDO($dsn, $dbusername, $dbpassword);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $e) {
//     echo "Connection failed:" . $e->getMessage();
// }

<?php

echo "<h1>Как подключить базу данных</h1>";

// Процедурный подход подключения БД

$servername = "localhost";
$username = "root";
$password = "";

//$conn = mysqli_connect($servername, $username, $password);
//
//if (!$conn) {
//    die ("Connection failed : " . mysqli_connect_error());
//}
//
//echo "Connection successfully";

// ПДО

try {
    $conn = new PDO("mysql:host=$servername; dbname = New DB", $username, $password);
    echo "Connection successfully";
}
catch (PDOException $e) {
    echo "Connection failed : " . $e->getMassege();
}


?>
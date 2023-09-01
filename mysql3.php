<?php

echo "<h1>Создание таблицы базы данных</h1>";

// 1-й вариант
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testDB";

// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die ("Connection failed: " . $conn->connect_error);
// }

// $sql = "CREATE TABLE users(
//         name1 VARCHAR (30) NOT NULL,
//         surname VARCHAR (30) NOT NULL PRIMARY KEY,
//         passwords VARCHAR (30) NOT NULL)";

// if ($conn->query($sql) === TRUE) {
//     echo "Table users created succesfully!";
// } else {
//     echo "Error" . $conn->error;
// }

// $conn->close();



// 2-й вариант
// $servername1 = "localhost";
// $username1 = "root";
// $password1 = "";
// $dbname1 = "testDB";

// $conn = mysqli_connect($servername1, $username1, $password1, $dbname1);
// if (!$conn) {
//     die ("Connection failed: " . mysqli_connect_error());
// }

// $sql = "CREATE TABLE users2 (
//         name2 VARCHAR (30) NOT NULL,
//         surname2 VARCHAR (30) NOT NULL PRIMARY KEY,
//         passwords2 VARCHAR (30) NOT NULL)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table users2 created successfully";
// } else {
//     echo "Error" . mysqli_error($conn);
// }

// $conn->close();



// 3-й вариант
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE users3 (
            name3 VARCHAR (30) NOT NULL,
            surname3 VARCHAR (30) NOT NULL PRIMARY KEY,
            passwords3 VARCHAR (30) NOT NULL)";

$conn->exec($sql);

}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;



?>
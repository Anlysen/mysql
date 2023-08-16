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
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testDB";

// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if ($conn) {
//     die ("Connection failed: " . mysqli_connect_error());
// }

// $sql = "CREATE TABLE users2 (
//         name1 VARCHAR (30) NOT NULL,
//         surname VARCHAR (30) NOT NULL PRIMARY KEY,
//         passwords VARCHAR (30) NOT NULL)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table users2 created successfully";
// } else {
//     echo "Error" . mysqli_error($conn);
// }

// $conn->close();

?>
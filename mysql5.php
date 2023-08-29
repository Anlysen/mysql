<?php

// Создание БД
$server_name = "Localhost"; // Создаем переменные
$username = "root";
$password = "";

$conn = new mysqli($server_name, $username, $password);
// Пробрасываем их в переменную с mysqli

if ($conn->connect_error) {
    die ("Connection failed" . $conn->connect_error); // Сообщение об ошибке
// Создаем условие, если происходит ошибка
}

$sql ="CREATE DATABASE Spaces";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully!";
} else {
    echo "Error" . $conn->error;
}

mysqli_close($conn);



// Создание таблицы
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Spaces";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die ("Connection failed : " . $conn->connect_error);
}

$sql = "CREATE TABLE Planets
        erth VARCHAR (30) NOT NULL,
        mars VARCHAR (30) NOT NULL PRIMARY KEY,
        saturn VARCHAR (30) NOT NULL";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully!";
} else {
    echo "Error" .  $conn->error;
}

$conn->close();


?>
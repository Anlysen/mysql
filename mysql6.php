<?php

// Подключение к БД
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Specialists";

try {
    $conn = new PDO("mysql:host=$servername; dbname = new DB", $username, $password);
    echo "Connection successfully";
}

catch (PDOException $e) {
    echo "Connection failed : ". $e->getMessage();
}



// Зоздание БД
try {
    $conn = new PDO("mysql:host=$servername; dbname = Specialists", $username, $password);

    $sql = "CREATE DATABASE Specialists";
    $conn->exec($sql);
    echo "Database created successfully";
} catch (PDOException $e) {
    echo $sql . $e->getMessage();
}




// Создание таблицы ДБ
try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE information (
            name VARCHAR (30) NOT NULL,
            position VARCHAR (30) NOT NULL PRIMARY KEY,
            password VARCHAR (30) NOT NULL )";

$conn->exec($sql);
}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;



// Добавление данных в таблицу
try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $sql = "INSERT INTO information (name, position, password)
            VALUES (Andrew, PHP-developer, 03021993)";

$conn->exec($sql);
echo "Record created";

}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;


?>
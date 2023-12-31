<?php

echo "<h1>Практика №1</h1>";
echo "<hr>";

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
            VALUES ('Andrew', 'PHP-developer', 3021993)";

$conn->exec($sql);
echo "Record created";

}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;



// Получаем последний ID
try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $sql = "INSERT INTO information (name, position, password)
            VALUES ('Thomas', 'QA-engineer', 'zh0041qaengineer85')";

$conn->exec($sql);
$last_id = $conn->lastInsertId();
echo "Last ID" . $last_id;
}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;



// Обновление данных
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "UPDATE information SET name='Bill' WHERE name='Thomas'";
// Обновить таблицу(название) > выбрать строку, которую переместить и написать ноаое имя
// там, > где текущее имя

if ($conn->query($sql) === TRUE) {
    echo "Record updated";
}

$conn->close();



// REPLACE аналогична команде INSERT
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "REPLACE INTO information VALUES
            ('Carl', 'Web-designer', 'web_155560cl'),
            ('Roy', 'Data Engineer', '44-data-833roy')";

if ($conn->query($sql) === TRUE) {
    echo "New record";
}

$conn->close();


?>
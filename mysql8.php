<?php

echo "<h1>Выборка данных select</h1>";

/*
Select - применяется для извличения строк выбраной
из одной или нескольких таблиц
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Запрос sql, который вибирает все столбцы таблицы Users
$sql = "SELECT * FROM Users";
$result = $conn->query($sql); // Полученные данные передает переменной $result

if ($result->num_rows > 0) {
// Функция num_rows проверяет и получает число лядов
    while ($row = $result->fetch_assoc()) {
// fetch_assoc() - помещает все результаты в ассоциативный массив
        echo "<br> ID : " . $row["user_id"] .
        "<br> name : " . $row["name"] .
        "<br> surname : " . $row["surname"];
    }
}

$conn->close();


// SELECT * FROM `Users` WHERE user_id IN (2, 7, 18); - выбрать определенные столбцы

?>
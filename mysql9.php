<?php

echo "<h1>Обновление данных</h1>";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testDB";

// $conn = new mysqli($servername, $username, $password, $dbname);

// $sql = "UPDATE Users SET name = 'Alex' WHERE name='Donald'"; // Выбираем столбцы, которые будут обновлены
// // Получается мы имя Donald меняем на имя Alex 

// if ($conn->query($sql) === TRUE) {
//     echo "Record updated";
// }

// $conn->close();


// REPLACE аналогична команде INSERT

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

// Синтаксис
$conn = new mysqli($servername, $username, $password, $dbname);

// Изменяем по идентификатору 30 или 6, какими они будут числиться в таблице
$sql = "REPLACE INTO Users VALUES
            (32, 'Alexandr', 'Nilson', '20304050'),
            (6, 'Austin', 'Powers', '77774444')"; // Добавляем значения

if ($conn->query($sql) === TRUE) {
    echo "Record updated";
}

$conn->close();


?>
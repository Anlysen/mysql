<?php

echo "<h1>Добавляем несколько записей</h1>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // $sql = "INSERT INTO Users (name, surname, password)
// //         VALUES('John', 'Doc', '8765432'),
// //                 ('Billy', 'Kalen', 'zhg123or44')"; 
//                 // Добавляем данные через запятую

// // Что-бы постоянно добавлялись данные в переменную $sql
// $sql = "INSERT INTO Users (name, surname, password)
//         VALUES('John', 'Doc', '8765432');";
// $sql .= "INSERT INTO Users (name, surname, password)
//         VALUES('Mike', 'Lopes', '99966321');";
// $sql .= "INSERT INTO Users (name, surname, password)
//         VALUES('Sam', 'Washington', '19900305')";


// if ($conn->multi_query($sql) == TRUE) { // Вставляем : multi_query($sql) 
//     echo "Record created";
// }
// // В процедурном методе добавляем : mysqli_multi_query($sql)

// $conn->close();



// PDO

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

    $conn->beginTransaction();
    $conn->exec("INSERT INTO Users (name, surname, password)
    VALUES('Mike', 'Lopes', '99966321')");
    $conn->exec("INSERT INTO Users (name, surname, password)
    VALUES('John', 'Doc', '8765432')");
    $conn->exec("INSERT INTO Users (name, surname, password)
    VALUES('Sam', 'Washington', '19900305')");

$conn->commit();
echo "Record created";

}

catch (PDOException $e) {
    $conn->rollBack();
}

// rollBack() - катит все изменения в БД и вернет все соединения
// к режиму автоматической фиксации



?>
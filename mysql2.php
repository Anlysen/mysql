<?php

echo "<h1>Создание БД</h1>";

// $server_name = "Localhost"; // Создаем переменные
// $username = "root";
// $password = "";

// $conn = new mysqli($server_name, $username, $password);
// // Пробрасываем их в переменную с mysqli

// if ($conn->connect_error) {
//     die ("Connection failed" . $conn->connect_error); // Сообщение об ошибке
// // Создаем условие, если происходит ошибка
// }




// // Создание БД

// $sql ="CREAT DATABASE DataBase";

// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully!";
// } else {
//     echo "Error" . $conn->error;
//}



// 2 вариант (процедурный)

$server_name = "Localhost"; // Создаем переменные
$username = "root";
$password = "";

$conn = mysqli_connect($server_name, $username, $password);
// Пробрасываем их в переменную с mysqli

if ($conn->connect_error) {
    die ("Connection failed" . mysqli_connect_error()); // Сообщение об ошибке
// Создаем условие, если происходит ошибка
}




// Создание БД

$sql ="CREAT DATABASE DataBase";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully!";
} else {
    echo "Error" . mysqli_error($conn);
}


?>
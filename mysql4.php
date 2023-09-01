<?php

echo "<h1>Как добавлять данные в таблицу?!</h1>";

// 1-й вариант
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testDB";

// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die ("Error : " . $conn->connect_error);
// }

// $sql = "INSERT INTO users (name1, surname, passwords)
//         VALUES('Andrew', 'Paxton', '54321')";

// if ($conn->query($sql)) {
//     echo "Record created!";
// } else {
//     echo "Error! Record not created!" . $conn->error;
// }

// $conn->close();



// 2-й вариант
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testDB";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if (!$conn) {
//     die ("Connection failed :" . mysqli_connect_error());
// }

// $sql = "INSERT INTO users (name1, surname, passwords)
//         VALUES('Andrew', 'Paxton', '54321')";

// if (mysqli_query($conn ,$sql)) {
//     echo "Record created!";
// } else {
//     echo "Error! Record not created!";
// }

// mysqli_close($conn);



// 3-й вариант
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testDB";

// try {
//     $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);

// $sql = "INSERT INTO users (name1, surname, passwords)
//         VALUES('Andrew', 'Paxton1', 54321)";
// $conn->exec($sql);
// echo "Record created!";
// }
// catch (PDOException $e) {
//     echo $sql . $e->getMessage();
// }

// $conn = null;


?>
<?php

echo "<h1>Удаление</h1>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);



// $sql = "DELETE FROM Users WHERE name='Alex'";
// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted";
// }
// $conn->close();

// С добавлением LIMIT
// $sql = "DELETE FROM Users LIMIT 3";
// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted";
// }
// $conn->close();



// TRUNCATE TABLE - очищает всю таблицу
// Удаление происходит быстрее, чем DELETE
$sql = "TRUNCATE TABLE Users";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted";
}
$conn->close();

?>
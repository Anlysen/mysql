<?php

echo "<h1>Как получить последний ID</h1>";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testDB";

// $conn = new mysqli($servername, $username, $password, $dbname);

// $sql = "INSERT INTO Users (name, surname, password)
//         VALUES('John', 'Doc', '8765432')";

// if ($conn->query($sql) == TRUE) {
//         $last_id = $conn->insert_id;
//         echo "last id " . $last_id;
// }

// $conn->close();


// Процедурный вариант
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "testDB";

// $conn = new mysqli($servername, $username, $password, $dbname);

// $sql = "INSERT INTO Users (name, surname, password)
//         VALUES('John', 'Doc', '8765432')";

// if ($conn->query($sql) == TRUE) {
//         $last_id = mysqli_insert_id($conn); // Дописываем mysqli_insert_id($conn)
//         echo "last id " . $last_id;
// }

// $conn->close();



// Объекто ориентированый вариант 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

try {
        $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password,);
        $sql = "INSERT INTO Users (name, surname, password)
                VALUES ('alex', 'doe', '000000')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        echo "last id" . $last_id;
}

catch (PDOException $e) {
        echo $sql . $e->getMessage();
}
$conn = null;

?>
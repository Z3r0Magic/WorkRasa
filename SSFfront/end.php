<?php
require_once 'include/db.php';
$Textid = $_GET['feedback'];
$idcheck = $_GET['Button'];

$sql = "INSERT INTO rating (client_name, rating, comment) VALUES ('FRONT', '{$idcheck}', '{$Textid}')";
if ($conn->query($sql) === TRUE) { 
    echo "Запись добавлена успешно";
} else { 
    echo "Ошибка: " . $conn->error;
}
?>
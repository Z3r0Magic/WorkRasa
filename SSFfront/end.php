<?php
require_once 'include/db.php';

$idcheck = $_GET['Button'];

$sql = "INSERT INTO rating (client_name, rating, comment) VALUES ('FRONT', '{$idcheck}', 'FRONT')";
if ($conn->query($sql) === TRUE) { 
    echo "Запись добавлена успешно";
} else { 
    echo "Ошибка: " . $conn->error;
}
?>
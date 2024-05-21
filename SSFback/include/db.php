<?php
     
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя
    $password = ""; // пароль пользователя
    $dbname = "SSF"; // Имя БД

    $conn = new mysqli($servername, $username, $password, $dbname); // Подключение к БД
    

    if ($conn->connect_error) exit('Ошибка подключения к БД'); // Проверка подключения

?>




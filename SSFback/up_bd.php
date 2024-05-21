<?php
require_once 'include/db.php' // Подключение к базе данных
?>
<?php
    
  
    
    
    $idcheck = $_GET['idcheck']; // Получаем значение $idcheck из idcheck (url)
   
    $rating_id = $_POST['rating_id']; // Получаем значение $rating_id из rating_id (url)
    
    $feedback = $_POST['feedback']; // Получаем значение $feedback из feedback (url)

    
    
   

    $sql = "INSERT INTO rating (client_name, rating, comment) VALUES ('{$idcheck}', '{$rating_id}','{$feedback  }')"; // Добавление данных в БД

    if ($conn->query($sql) === TRUE) { // Проверка добавления записи в БД
    echo "Запись добавлена успешно";
    } 

    else { 
    echo "Ошибка: " . $conn->error;
    }


    $conn->close(); // Закрытие соединение с БД
 
?>
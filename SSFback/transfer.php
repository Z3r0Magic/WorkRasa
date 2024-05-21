<?php

require_once 'include/db.php' // Подключение к БД
?>


<?php

$idcheck = trim($_GET['name']); // Получение имени из url


$sql = "SELECT * FROM rating WHERE client_name = '{$idcheck}'"; // Проверка на совпадение Имени в БД

$result = $conn->query($sql); // Инициализируем переменную $result

    
if ($result->num_rows !== 0) { // Если количество строк не равно нулю, то выполняется блок
 echo "Ссылка на голосование недоступна, свяжитесь с нами по телефону";
 exit();
} 

else {
    header("Location: form.php?idcheck=" . urlencode($idcheck)); // Переходим на форму form.php и переносим значение $idcheck
    
    $conn->close();// Закрытие соединение с БД
}
?>
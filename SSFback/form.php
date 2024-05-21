<?php
require_once 'include/db.php'// Подключение к базе данных
?>

<?php
$idcheck = $_GET['idcheck']; // Получаем значение $idcheck из idcheck (url)
?>



<form action="up_bd.php?idcheck=<?php echo $idcheck; ?>" method="POST"> <!--Переход на форму up_bd.php и перенос значения $idcheck-->
<h1>
    
                Выбирите оценку
                 <select name="rating_id" > <!--Выпадающий список -->
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    
                </select>
                <input type='submit' name='submit' value=' Записать ' ><br> <!--Кнопка записать -->
                <input type='text' name='feedback' placeholder='Оставьте отзыв (не обязательно)' size='51'> <!--Однострочное текстовое поле -->
            </h1>
</form>

<?php
$conn->close(); // Закрытие соединение с БД
?>
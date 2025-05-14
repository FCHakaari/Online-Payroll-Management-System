<?php
include_once 'config/config.php';

// Получаем данные из POST-запроса
$designationid = $_POST['designationid'];
$designationname = $_POST['designationname'];
$createddate = $_POST['createddate'];
$modifieddate = $_POST['modifieddate'];
$status = $_POST['status'];

// Формируем SQL-запрос для обновления данных
$q = "UPDATE designation SET Designation_name='$designationname', Created_date='$createddate', Modified_date='$modifieddate', Status='$status' WHERE Designation_id=$designationid";

// **УДАЛЕН ЭТОТ БЛОК, ТАК КАК ОН НЕ ИМЕЕТ СМЫСЛА. `mysqli_affected_rows` возвращает количество затронутых строк *ПОСЛЕ* выполнения запроса, а не до.  Кроме того, `mysqli_fetch_assoc` используется для выборки данных, а не для обновления.**
// if (mysqli_affected_rows($connection_obj) > 0) {
//     $employee_data = mysqli_fetch_assoc($connection_obj);
// } else {
//     header("location:./500.php");
// }


// Выполняем SQL-запрос
$status = mysqli_query($connection_obj, $q);

// Проверяем результат выполнения запроса
if ($status) {
    // Если запрос выполнен успешно, выводим сообщение и перенаправляем пользователя
    echo "<script type='text/javascript'>alert('Успешно отправлено!')</script>";
    header("location:./designation_view.php");
} else {
    // Если запрос выполнен с ошибкой, перенаправляем пользователя на страницу ошибки
    header("location:./500.php");
}
?>
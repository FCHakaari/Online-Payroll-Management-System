<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>

<?php
include_once 'config/config.php';

$q = "SELECT * from employee ;";
$status = mysqli_query($connection_obj, $q);

echo "<form action=employee_view.php method=post >
    <section class=content>
        <div class=container-fluid>
         <div class=row clearfix>
                <div class=col-lg-12 col-md-12 col-sm-12 col-xs-12>
                    <div class=card>
                       
                        <div class=body>";

if ($status) {
    while ($row = mysqli_fetch_assoc($status)) {
        echo "<b>ID Сотрудника:</b>" . $row['Employee_id'] . "<br>";
        echo "<b>Имя Сотрудника:</b>" . $row['Employee_name'] . "<br>";
        echo "<b>Роль:</b>" . $row['Roles'] . "<br>";
        echo "<b>Текущий Адрес:</b>" . $row['Current_address'] . "<br>";
        echo "<b>Постоянный Адрес:</b>" . $row['Permanent_address'] . "<br>";
        echo "<b>Номер Телефона:</b>" . $row['Mobile_number'] . "<br>";
        echo "<b>Пол:</b>" . $row['Gender'] . "<br>";
        echo "<b>Email:</b>" . $row['Email'] . "<br>";
        echo "<b>Дата Рождения:</b>" . $row['DOB'] . "<br>";
        echo "<b>Квалификация:</b>" . $row['Qualification'] . "<br>";
        echo "<b>Дата Приема на Работу:</b>" . $row['Joining_date'] . "<br>";
        echo "<b>Дата Регистрации:</b>" . $row['Registration_date'] . "<br>";
        echo "<b>ID Отдела:</b>" . $row['Department_id'] . "<br>";
        echo "<b>ID Филиала:</b>" . $row['Branch_id'] . "<br>";
        echo "<b>ID Должности:</b>" . $row['Designation_id'] . "<br>";
        echo "<b>ID Смены:</b>" . $row['Shift_id'] . "<br>";
        echo "<b>Пароль:</b>" . $row['Password'] . "<br>";
        echo "<b>Подтверждение Пароля:</b>" . $row['Confirm_password'] . "<br>";
        echo "<b>Номер Банковского Счета:</b>" . $row['Bank_account_number'] . "<br>";
        echo "<b>Город:</b>" . $row['city'] . "<br>";
        echo "<b>Основная Зарплата:</b>" . $row['Basic_salary'] . "<br>";
        echo "<b>Профессиональный Налог (ПН):</b>" . $row['PT'] . "<br>";

        echo "<b>Дата Создания:</b>" . $row['Created_date'] . "<br>";
        echo "<b>Дата Изменения:</b>" . $row['Modified_date'] . "<br>";
        echo "<b>Статус:</b>" . $row['Status'] . "<br>";
        echo "<br><br><br><br>";
        echo "<input class=btn btn-primary waves-effect name=submit align=center type=submit value=НАЗАД formaction=./employee_view.php>";
        echo "<hr>";
    }
}
?>

<input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="НАЗАД"
    formaction="./employee_view.php">
</section>
</form>

<?php
include_once 'footer_h.php';
?>
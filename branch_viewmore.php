<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>

<?php
include_once 'config/config.php';

$id = $_GET['id'];

$q = "SELECT * FROM branch WHERE Branch_id=" . $id . ";";
$status = mysqli_query($connection_obj, $q);

echo "<form action=branch_view.php method=post>
    <section class=content>
        <div class=container-fluid>
         <div class=row clearfix>
                <div class=col-lg-12 col-md-12 col-sm-12 col-xs-12>
                    <div class=card>
                       
                        <div class=body>";

if ($status) {
    while ($row = mysqli_fetch_assoc($status)) {
        echo "<b>ID филлиалов: </b>" . $row['Branch_id'] . "<br><br>";
        echo "<b>Название филлиалов: </b>" . $row['Name'] . "<br><br>";
        echo "<b>Адрес филлиала: </b>" . $row['Branch_Address'] . "<br><br>";
        echo "<b>Номер регистратуры: </b>" . $row['Phone_number'] . "<br><br>";
        echo "<b>Почта: </b>" . $row['Email'] . "<br><br>";
        echo "<b>Дата запуска учреждения: </b>" . $row['Establishment_date'] . "<br><br>";
        echo "<b>Статус: </b>" . $row['Status'] . "<br>";
        echo "<br><br><br><br>";
    }
}

echo '<input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="Назад   " formaction="./branch_view.php">
</section>
</form>';

include_once 'footer_h.php';
?>

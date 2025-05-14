<?php
    include_once 'header_h.php';
?>
<?php
    include_once 'roles.php';
?>

<?php
    include_once 'config/config.php';

    $id = $_GET['id'];

    $q = "SELECT * from holidays where Holiday_id=".$id.";";
    $status = mysqli_query($connection_obj, $q);

    echo '<form action="holiday_view.php" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">';
                            
    if ($status) {
        while ($row = mysqli_fetch_assoc($status)) {
            echo '<b>ID Праздника:</b>' . $row['Holiday_id'] . '<br>';
            echo '<b>Название Праздника:</b>' . $row['Holiday_name'] . '<br>';
            echo '<b>Описание Праздника:</b>' . $row['Holiday_description'] . '<br>';
            echo '<b>Дата Праздника:</b>' . $row['Holiday_date'] . '<br>';
            echo '<b>Дата Создания:</b>' . $row['Created_date'] . '<br>';
            echo '<b>Дата Изменения:</b>' . $row['Modified_date'] . '<br>';
            echo '<b>Статус:</b>' . $row['Status'] . '<br><br><br><br>';
        }
    }
?>

<input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="НАЗАД" formaction="./holiday_list.php">
</section>
</form>

<?php
    include_once 'footer_h.php';
?>
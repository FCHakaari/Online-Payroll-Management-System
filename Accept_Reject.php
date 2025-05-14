<?php
include_once 'header_h.php';
include_once 'roles.php';

$q = "SELECT * FROM employee_leaves";
$status = mysqli_query($connection_obj, $q);
$eid = $_SESSION['employee_id'];
?>

<form action="#" method="post" id="ar">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>СПИСОК УТВЕРЖДЕНИЯ/ОТКЛОНЕНИЯ ОТПУСКОВ</b>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered" name="acceptrejectleaveslist">
                                <thead>
                                    <tr>
                                        <th>ID СОТРУДНИКА</th>
                                        <th>ИМЯ СОТРУДИКА</th>
                                        <th>ТИП ОТПУСКА</th>
                                        <th>ОПИСАНИЕ ПРИЧИНЫ ОТПУСКА</th>
                                        <th>ДАТА НАЧАЛА ОТПУСКА</th>
                                        <th>ДАТА ОКОНЧАНИЯ ОТПУСКА</th>
                                        <th>ID ДЕЙСТВИЯ</th>
                                        <th>УТВЕРДИТЬ / ОТКЛСИТЬ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($status) {
                                        while ($row = mysqli_fetch_assoc($status)) {
                                            if ($row['Status'] == '0' && $row['Employee_id'] != $eid) {
                                                echo "<tr>";
                                                echo "<td><b>".$row['Employee_id']."</b></td>";
                                                echo "<td><b>".$row['Employee_name']."</b></td>";
                                                echo "<td><b>".$row['Leave_type']."</b></td>";
                                                echo "<td><b>".$row['Leave_reason_description']."</b></td>";
                                                echo "<td><b>".$row['Leave_from_date']."</b></td>";
                                                echo "<td><b>".$row['Leave_to_date']."</b></td>";
                                                echo "<td><b>".$row['Action_taken_by_id']."</b></td>";

                                                echo "<td>";
                                                echo "<a href=accept.php?id=".$row['Employee_id']."><button type='button' name='accept' class='btn btn-primary waves-effect'>УТВЕРДИТЬ</button></a><br>";
                                                echo "<a href=reject.php?id=".$row['Employee_id']."><button type='button' name='reject' class='btn btn-primary waves-effect'>ОТКЛОНИТЬ</button></a>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <input class="btn btn-primary waves-effect" name="close" type="submit" value="ЗАКРЫТЬ"
                    formaction="./home_page.php">
            </center>
        </div>
    </section>
</form>

<?php
include_once 'footer_h.php';
?>
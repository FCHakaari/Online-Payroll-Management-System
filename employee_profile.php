<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>

<form action="#" method="post" id="Employee_profile">

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b><?php echo $_SESSION['emp_name'] . "'s"; ?> ПРОФИЛЬ</b>
                            </h2>
                        </div>
                        <div class="body table-responsive">

                            <?php
                            include_once 'config/config.php';

                            $enm = $_SESSION['emp_name'];
                            $e = $_SESSION['employee_id'];

                            $q = "Select * from employee where Employee_id=" . $e . ";";

                            $status = mysqli_query($connection_obj, $q);

                            if ($status) {
                                while ($row = mysqli_fetch_assoc($status)) {
                                    echo "ID:<b> " . $row['Employee_id'] . "</b><br><br>";
                                    echo "ФИО: " . $row['Employee_name'] . "<br><br>";
                                    echo "Почта: " . $row['Email'] . "<br><br>";
                                    echo "Пароль: " . $row['Password'] . "<br><br>";
                                    echo "Дата устройства на работу: " . $row['Joining_date'] . "<br><br>";
                                    echo "ID отдела: " . $row['Department_id'] . "<br><br>";
                                    echo "ID филиала: " . $row['Branch_id'] . "<br><br>";
                                    echo "ID должности: " . $row['Designation_id'] . "<br><br>";
                                    echo "ID смены: " . $row['Shift_id'] . "<br>";

                                }
                            } else {
                                echo "Ошибка: " . mysqli_error($connection_obj); // Более дружелюбное сообщение об ошибке
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <input class="btn btn-primary waves-effect" name="close" type="SUBMIT" value="ЗАКРЫТЬ"
                   formaction="./dashbord.php"></button>
        </center>
    </section>

</form>
<?php
include_once 'footer_h.php';
?>
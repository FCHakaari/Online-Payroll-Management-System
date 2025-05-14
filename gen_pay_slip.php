<?php
include_once 'header_h.php';
include_once 'roles.php';
?>
<form action="cal_sal.php" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ПЛАТЕЖНЫЙ ЛИСТ</h2>
            </div>
            <!-- Ввод данных -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" id="printthis">
                        <div class="body">
                            <?php
include_once 'config/config.php';
$slid = $_SESSION['sal_id'];
$q = "SELECT * FROM employee WHERE Employee_id='$slid'";
$status = mysqli_query($connection_obj, $q);
if ($status) {
    $data = mysqli_fetch_assoc($status);
}
$bid = $data['Branch_id'];
$q1 = "SELECT * FROM branch WHERE Branch_id='$bid'";
$s1 = mysqli_query($connection_obj, $q1);
if ($s1) {
    $data1 = mysqli_fetch_assoc($s1);
}
$q2 = "SELECT * FROM payroll_details WHERE Employee_id='$slid'";
$s2 = mysqli_query($connection_obj, $q2);
if ($s2) {
    $data2 = mysqli_fetch_assoc($s2);
}
?>
                            <button class='btn btn-info btn-circle-lg waves-effect waves-circle' type='button'
                                onclick="printDiv()">
                                <i class='material-icons'>print</i>
                            </button>

                            <script type="text/javascript">
                            function myfunc() {
                                window.print();
                            }
                            </script>
                            <h3>
                                <center>
                                    <div class="row clearfix">
                                        <div style="border: 2px solid black;height:750px;width:1000px;">
                                            <div
                                                style="border: 1px solid black;height:140px;width:998px;margin-right:400px;">
                                                <?php
                    echo "<center><h1><b><font color='#5C7EB5'>";
                    echo $data1['Name'] . "<br>";
                    echo "</font></b></h1><small>";
                    echo $data1['Branch_Address'] . "<br>";
                    echo "Платежный лист</small></center>";
                    ?>
                                            </div>
                                            <div class="row clearfix">
                                                <div
                                                    style="border-radius:10px;border: 2px solid #2196F3;height:70px;width:300px;margin-right:650px;margin-top: 20px">
                                                    <div
                                                        style="border-radius:5px 9px 5px 5px;background:#5C7EB5;height: 30px;width:298px;">
                                                        <center>Имя</center>
                                                    </div>
                                                    <?php echo "<center><span style='font-size: 15px;'>" . $data['Employee_name'] . "</span></center><br>"; ?>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div
                                                style="border-radius:10px;border: 2px solid #2196F3;height:70px;width:300px;margin-left:1px;margin-top: -122px">
                                                <div
                                                    style="border-radius:5px 9px 5px 5px;background:#5C7EB5;height: 30px;width:298px;">
                                                    <center>ID сотрудника</center>
                                                </div>
                                                <?php echo "<center><span style='font-size: 15px;'>" . $data['Employee_id'] . "</span></center><br>"; ?>
                                            </div>
                                            <div
                                                style="border-radius:10px;border: 2px solid #2196F3;height:70px;width:300px;margin-left:650px;margin-top: -7%">
                                                <div
                                                    style="border-radius:5px 9px 5px 5px;background:#5C7EB5;height: 30px;width:298px;">
                                                    <center>Должность</center>
                                                </div>
                                                <?php
                    $eid = $data['Designation_id'];
                    $x = "SELECT * FROM designation WHERE Designation_id=$eid";
                    $x1 = mysqli_query($connection_obj, $x);
                    if ($x1) {
                        $x3 = mysqli_fetch_assoc($x1);
                    }
                    echo "<center><span style='font-size: 15px;'>" . $x3['Designation_name'] . "</span></center><br>"; ?>
                                            </div>
                                            <div
                                                style="border-radius:10px;border: 2px solid #2196F3;height:270px;width:300px;margin-right:650px;margin-top: 3%">
                                                <div
                                                    style="border-radius:5px 9px 5px 5px;background:#5C7EB5;height: 30px;width:298px;">
                                                    <center>Платежи</center>
                                                </div>
                                                <?php
                    echo "<font size=4><b>";
                    echo "<table border='0'>";
                    echo "<tr><th style='width: 191px'><strong><u>Описание</u></strong></th>
                          <th><strong><u>Сумма</u></strong></th>
                    </tr>";
                    echo "</b></table>";
                    echo "</font>";
                    echo "<font size=3>";
                    echo "<table border='0'>";
                    echo "<tr><td style='width: 191px'>Базовая зарплата</td>
	                  	<td>" . $data['Basic_salary'] . "</td>
	                  </tr>";
                    echo "<tr><td>Бонус</td>
	                  	<td>" . $data2['Bonus'] . "</td>
	                  </tr>";
                    $tot = $data['Basic_salary'] + $data2['Bonus'];
                    echo "<tr style='height: 150px'></tr>";
                    echo "<tr><td>Итого</td>
	                  	<td>" . $tot . "</td>
	                  </tr>";
                    echo "</table>";
                    echo "</font>";
                    ?>
                                            </div>
                                            <div
                                                style="border-radius:10px;border: 2px solid #2196F3;height:270px;width:300px;margin-right:10px;margin-top:-27%">
                                                <div
                                                    style="border-radius:5px 9px 5px 5px;background:#5C7EB5;height: 30px;width:298px;">
                                                    <center>Вычеты</center>
                                                </div>
                                                <?php
                    echo "<font size=4><b>";
                    echo "<table border='0'>";
                    echo "<tr><th style='width: 191px'><strong><u>Описание</u></strong></th>
                          <th><strong><u>Сумма</u></strong></th>
                    </tr>";
                    echo "</b></table>";
                    echo "</font>";
                    echo "<font size=3>";
                    echo "<table border='0'>";
                    echo "<tr><td style='width: 191px'>Общая сумма</td>
	                  	<td>" . $tot . "</td>
	                  </tr>";
                    echo "<tr><td>Удержание</td>
	                  	<td>" . $_SESSION['cutoff'] . "</td>
	                  </tr>";
                    $tot1 = $tot - $_SESSION['cutoff'];
                    echo "<tr style='height: 150px'></tr>";
                    echo "<tr><td>Итого</td>
	                  	<td>" . $tot1 . "</td>
	                  </tr>";
                    echo "</table>";
                    echo "</font>";
                    ?>
                                            </div>
                                            <div
                                                style="border-radius:10px;border: 2px solid #2196F3;height:270px;width:300px;margin-left:64%;margin-top:-27%">
                                                <div
                                                    style="border-radius:5px 9px 5px 5px;background:#5C7EB5;height: 30px;width:298px;">
                                                    <center>Налоги</center>
                                                </div>
                                                <?php
                    echo "<font size=4><b>";
                    echo "<table border='0'>";
                    echo "<tr><th style='width: 191px'><strong><u>Описание</u></strong></th>
                          <th><strong><u>Сумма</u></strong></th>
                    </tr>";
                    echo "</b></table>";
                    echo "</font>";
                    echo "<font size=3>";
                    echo "<table border='0'>";
                    echo "<tr><td style='width: 191px'>Сумма</td>
	                  	<td>" . $tot1 . "</td>
	                  </tr>";
                    echo "<tr><td>ПТ</td>
	                  	<td>" . $data['PT'] . "</td>
	                  </tr>";
                    $tot2 = $tot1 - $data['PT'];
                    echo "<tr style='height: 150px'></tr>";
                    echo "<tr><td>Итого</td>
	                  	<td>" . $tot2 . "</td>
	                  </tr>";
                    echo "</table>";
                    echo "</font>";
                    ?>
                                            </div>
                                            <div
                                                style="border-radius:10px;border: 2px solid #2196F3;height:79px;width:945px;margin-left:1px;margin-top: 2%">
                                                <center>
                                                    <?php echo "<span style='font-size: 20px;'>" . $data['Bank_account_number'] . "</span>"; ?>
                                                </center>
                                                <div
                                                    style="border-radius: 5px 9px 5px 5px; background: #5C7EB5; height: 77px; width: 100px; margin-right: 100%; margin-top: -3%">
                                                    <center><span style="font-size: 20px;">Номер банковского
                                                            счета</span></center>
                                                </div>
                                            </div>
                                            <div
                                                style="border-radius: 20px; border: 2px solid #2196F3; height: 70px; width: 945px; margin-left: 1px; margin-top: 2%">
                                                <center>
                                                    <span style="font-size: 20px;"><?php echo $tot2; ?></span>
                                                </center>
                                                <div
                                                    style="border-radius: 5px 9px 5px 5px; background: #5C7EB5; height: 68px; width: 100px; margin-right: 100%; margin-top: -3%">
                                                    <center><span style="font-size: 22px;">Чистая зарплата</span>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </center>
    </h3>
</form>
<script type="text/javascript">
function printDiv(printthis) {
    var printContents = document.getElementById('printthis').innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
<?php
include_once 'footer_h.php';
?>
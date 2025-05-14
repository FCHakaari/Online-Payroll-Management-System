<?php
$enm = $_SESSION['emp_name'];
$e = $_SESSION['employee_email'];
$employeeid = $_SESSION['employee_id'];
?>

<?php
include_once 'config/config.php';

$q = "SELECT * from employee where Employee_id=" . $employeeid . ";";
$status = mysqli_query($connection_obj, $q);

if ($status) {
    $data1 = mysqli_fetch_assoc($status);
}
?>

<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader pl-size-xl">
            <div class="spinner-layer pl-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Пожалуйста, подождите...</p>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?= ADMIN_URL ?>dashboard.php">Система учета сотрудников ГБ №2</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

            </ul>

        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h3><?php print "$enm"; ?></h3>
                </div>
                <div class="email">
                    <input type="hidden" name="employeeid" class="form-control" value="<?php print "$e"; ?>" />
                    <?php print "$e"; ?>
                </div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?= ADMIN_URL ?>employee_profile.php"><i class="material-icons">person</i>Посмотреть профиль</a></li>
                        <li><a href="<?= ADMIN_URL ?>change_pwd.php"><i class="material-icons">create</i>Сменить пароль</a></li>
                        <li><a href="<?= ADMIN_URL ?>logout.php"><i class="material-icons">input</i>Выход</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">ГЛАВНАЯ НАВИГАЦИЯ</li>
                <li>
                    <a href="<?= ADMIN_URL ?>dashbord.php">
                        <img src='home.jpg' style='width:25px;height:25px;'>
                        <span>ГЛАВНАЯ</span>
                    </a>
                </li>
                <li>
                    <a href="<?= ADMIN_URL ?>applyforleave.php">
                        <img src='apply.jpg' style='width:30px;height:30px;'>
                        <span>ЗАЯВКА НА ОТПУСК</span>
                    </a>
                </li>
                <li>
                    <a href="<?= ADMIN_URL ?>holiday_list.php">
                        <img src='holidayicon.png' style='width:30px;height:30px;'>
                        <span>СПИСОК ПРАЗДНИКОВ</span>
                    </a>
                </li>
                <li>
                    <a href="<?= ADMIN_URL ?>emp_chat.php">
                        <img src='msg.jpg' style='width:25px;height:25px;'>
                        <span>ЧАТ</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="legal">
            <div class="copyright">
                © 2023 <a href="<?= ADMIN_URL ?>dashboard.php">Система учета зарплат сотрудников<br>с приложением для
                    чата</a>.
            </div>
        </div>
    </aside>
    </div>
    <!-- #END# Right Sidebar -->
</section>
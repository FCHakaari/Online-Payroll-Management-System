<?php
	include_once 'header_h.php'; // Подключение шапки страницы
?>
<?php
	include_once 'roles.php'; // Подключение файла с ролями пользователей
?>
<form action="#" method="post" id="Branch_view">

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>Список филиалов
                                    <div style="margin-left: 90%"><input class="btn btn-primary waves-effect" name="add"
                                            type="submit" formaction="./branch.php" value="ДОБАВИТЬ ФИЛИАЛ"></button>
                                </b>
                        </div>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="dataTables_wrapper form-inline dt-bootstrap" id="DataTables_Table_0_wrapper">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="DataTables_Table_0_length">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                    id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" class="sorting_asc" aria-controls="DataTables_Table_0"
                                                style="width: 191px;"
                                                aria-label="BRANCH ID: activate to sort column descending"
                                                aria-sort="ascending" rowspan="1" colspan="1">ID филиалов</th>
                                            <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                style="width: 309px;"
                                                aria-label="BRANCH NAME: activate to sort column ascending" rowspan="1"
                                                colspan="1">Название филиалов</th>
                                            <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                style="width: 143px;"
                                                aria-label="PHONE NUMBER: activate to sort column ascending" rowspan="1"
                                                colspan="1">Номер регистратуры</th>
                                            <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                style="width: 135px;"
                                                aria-label="VIEW MORE: activate to sort column ascending" rowspan="1"
                                                colspan="1">Подробности</th>
                                            <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                style="width: 110px;"
                                                aria-label="UPDATE: activate to sort column ascending" rowspan="1"
                                                colspan="1">Обновить</th>
                                            <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                style="width: 110px;"
                                                aria-label="DELETE: activate to sort column ascending" rowspan="1"
                                                colspan="1">Удалить</th>
                                        </tr>
                                    </thead>

                                    <?php 
                         include_once 'config/config.php'; // Подключение файла конфигурации
                         $q="Select * from branch"; // SQL запрос для получения всех филиалов
                         $status = mysqli_query($connection_obj, $q); // Выполнение запроса
                         if($status) { // Проверка, успешно ли выполнился запрос
                             while ($row = mysqli_fetch_assoc($status)) { // Перебор результатов запроса
                                 echo '<tr class="odd" role="row">';
                                 echo '<td>'.$row['Branch_id'].'</td>'; // Вывод ID филиала
                                 echo '<td class="sorting_1">'.$row['Name'].'</td>'; // Вывод названия филиала
                                 echo "<td>".$row['Phone_number']."</td>"; // Вывод номера телефона
                                 echo "<td><center><a href=branch_viewmore.php?id=".$row['Branch_id']."><button class='btn btn-info btn-circle-lg waves-effect waves-circle waves-float' name=information type='button'><i class='material-icons'>information</i></button></a></td>";  // Кнопка "Подробности"
                                 echo "<td><center><a href=Branch1.php?id=".$row['Branch_id']."><button class='btn btn-success btn-circle-lg waves-effect waves-circle waves-float' name='update' type='button'><i class='material-icons'>update</i></button></a></td>"; // Кнопка "Обновить"
                                 echo "<td><center><a href=branch_delete.php?id=".$row['Branch_id']."><button class='btn btn-danger btn-circle-lg waves-effect waves-circle' waves-float name=delete type='button' ><i class='material-icons'>delete</i></button></a></td>"; // Кнопка "Удалить"
                                 echo "</tr>";
                             }
                             echo "</table>"; 
                         } else {
                             echo " Ошибка"; // Вывод сообщения об ошибке, если запрос не выполнился
                         }
                         ?>
                                    <p id="demo"></p>
                            </div>
                            </td>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <a href="<?=ADMIN_URL?>home_page.php"><input class="btn btn-primary waves-effect" name="close" type="button"
                    value="ЗАКРЫТЬ"></a></button>

        </center>

    </section>
</form>
<?php
	include_once 'footer_h.php'; // Подключение подвала страницы
?>
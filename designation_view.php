<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>
<form action="#" method="post" id="Designation_view">

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>ПРОСМОТР ДОЛЖНОСТЕЙ<div style="margin-left: 85%"><input
                                            class="btn btn-primary waves-effect" name="add" type="submit"
                                            value="ДОБАВИТЬ ДОЛЖНОСТЬ" formaction="./designation.php"></b>
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
                                <div class="col-sm-6">
                                    <div class="dataTables_filter" id="DataTables_Table_0_filter">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table
                                        class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                        id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                            <tr role="row">
                                                <th tabindex="0" class="sorting_asc" aria-controls="DataTables_Table_0"
                                                    style="width: 191px;"
                                                    aria-label="ID ДОЛЖНОСТИ: активировать для сортировки столбца по убыванию"
                                                    aria-sort="ascending" rowspan="1" colspan="1">ID ДОЛЖНОСТИ</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                    style="width: 309px;"
                                                    aria-label="НАЗВАНИЕ ДОЛЖНОСТИ: активировать для сортировки столбца по возрастанию"
                                                    rowspan="1" colspan="1">НАЗВАНИЕ ДОЛЖНОСТИ</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                    style="width: 143px;"
                                                    aria-label="НАЗВАНИЕ ОТДЕЛА: активировать для сортировки столбца по возрастанию"
                                                    rowspan="1" colspan="1">НАЗВАНИЕ ОТДЕЛА</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                    style="width: 135px;"
                                                    aria-label="ПОДРОБНЕЕ: активировать для сортировки столбца по возрастанию"
                                                    rowspan="1" colspan="1">ПОДРОБНЕЕ</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                    style="width: 110px;"
                                                    aria-label="ОБНОВИТЬ: активировать для сортировки столбца по возрастанию"
                                                    rowspan="1" colspan="1">ОБНОВИТЬ</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0"
                                                    style="width: 110px;"
                                                    aria-label="УДАЛИТЬ: активировать для сортировки столбца по возрастанию"
                                                    rowspan="1" colspan="1">УДАЛИТЬ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include_once 'config/config.php';
                                                $q = "Select * from designation";
                                                $status = mysqli_query($connection_obj, $q);
                                                if ($status) {
                                                    while ($row = mysqli_fetch_assoc($status)) {
                                                        echo '<tr class="odd" role="row">';
                                                        echo "<td class='sorting_1'><b>" . $row['Designation_id'] . "</b></td>";
                                                        echo "<td class='sorting_1'>" . $row['Designation_name'] . "</td>";
                                                        echo "<td class='sorting_1'>" . $row['Department_name'] . "</td>";
                                                        echo "<td class='sorting_1'><center><a href=designation_viewmore.php?id=" . $row['Designation_id'] . "><button class='btn btn-info btn-circle-lg waves-effect waves-circle waves-float' name=information type='button'><i class='material-icons'>information</i></button></a></td>";
                                                        echo "<td class='sorting_1'><center><a href=Designation1.php?id=" . $row['Designation_id'] . "><button class='btn btn-success btn-circle-lg waves-effect waves-circle waves-float' name='update' type='button'><i class='material-icons'>update</i></button></a></td>";
                                                        echo "<td class='sorting_1'><center><a href=designation_delete.php?id=" . $row['Designation_id'] . " ><button class='btn btn-danger btn-circle-lg waves-effect waves-circle' waves-float name=delete type='button'><i class='material-icons'>delete</i></button></a></td>";
                                                        echo "</tr>";
                                                    }
                                                    echo "</tbody> </table>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <center>
            <a href="<?= ADMIN_URL ?>home_page.php"><input class="btn btn-primary waves-effect" name="close"
                    type="button" value="ЗАКРЫТЬ"></a></button>
        </center>
    </section>
</form>
<?php
include_once 'footer_h.php';
?>
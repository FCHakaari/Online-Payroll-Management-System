<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>
<script language="javascript" src="validation.js"></script>
<script language="javascript">
function validate_form(f1) {
    if (isEmpty(f1.departmentname.value, "Название отдела")) {
        alert(errMsg);
        f1.departmentname.focus();
        return (false);
    }

    if (isEmpty(f1.createddate.value, "Дата создания")) {
        alert(errMsg);
        f1.createddate.focus();
        return (false);
    }
    if (isEmpty(f1.modifieddate.value, "Дата изменения")) {
        alert(errMsg);
        f1.modifieddate.focus();
        return (false);
    }
    if (isEmpty(f1.status.value, "Статус")) {
        alert(errMsg);
        f1.status.focus();
        return (false);
    }

}
</script>

<form action="department_add.php" method="post" onSubmit="return validate_form(this)">


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ОТДЕЛ</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">

                            <input type="hidden" name="departmentid" class="form-control" />

                            <h2 class="card-inside-title">Название отдела:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="departmentname" class="form-control" />
                                        </div>
                                    </div>


                                    <h2 class="card-inside-title">Дата создания:</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" class="form-control date" name="createddate"
                                                        placeholder="Пример: 30/07/2016">
                                                </div>
                                            </div>

                                            <h2 class="card-inside-title">Дата изменения:</h2>
                                            <div class="row clearfix">
                                                <div class="col-sm-12">

                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="date" class="form-control date"
                                                                name="modifieddate" placeholder="Пример: 30/07/2016">
                                                        </div>
                                                    </div>

                                                    <h2 class="card-inside-title">Статус:</h2>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-12">

                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" name="status"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <center><input class="btn btn-primary waves-effect" name="submit" type="submit"
                                        value="ОТПРАВИТЬ">
                                    <input type="reset" name="close" class="btn btn-primary waves-effect"
                                        value="СБРОСИТЬ">
                                </center>
    </section>
</form>

<?php
include_once 'footer_h.php';
?>
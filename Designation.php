<?php
    include_once 'header_h.php';
?>
<?php
    include_once 'roles.php';
?>

<script language="javascript" src="validation.js"></script>
<script language="javascript">
function str_check(event) {
    code = event.keyCode;
    if (!((code >= 65 && code <= 90) || (code >= 97 && code <= 122) || (code == 32) || (code >= 1040 && code <= 1103) ||
            (code == 1105) || (code == 1025))) { // Добавлено: русские буквы и ё
        alert("Пожалуйста, введите только символы"); // Переведено
        event.keyCode = 0;
    }
}

function validate_form(f1) {
    if (isEmpty(f1.designationname.value, "Название должности")) { // Переведено
        alert(errMsg);
        f1.designationname.focus();
        return (false);
    }
    if (isEmpty(f1.departmentname.value, "Название отдела")) { // Переведено
        alert(errMsg);
        f1.departmentname.focus();
        return (false);
    }

    if (isEmpty(f1.createddate.value, "Дата создания")) { // Переведено
        alert(errMsg);
        f1.createddate.focus();
        return (false);

    }
    if (isEmpty(f1.modifieddate.value, "Дата изменения")) { // Переведено
        alert(errMsg);
        f1.modifieddate.focus();
        return (false);
    }
    if (isEmpty(f1.status.value, "Статус")) { // Переведено
        alert(errMsg);
        f1.status.focus();
        return (false);
    }

}
</script>

<form action="designation_add.php" method="post" onSubmit="return validate_form(this)">

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ДОЛЖНОСТЬ</h2> <!-- Переведено -->
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">


                            <input type="hidden" name="designationid" class="form-control" />

                            <h2 class="card-inside-title">Название должности:</h2> <!-- Переведено -->
                            <div class="row clearfix">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="designationname" class="form-control"
                                                onKeyPress="str_check(event)" />
                                        </div>
                                    </div>

                                    <h2 class="card-inside-title">Название отдела:</h2> <!-- Переведено -->
                                    <div class="row clearfix">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="departmentname" class="form-control"
                                                        onKeyPress="str_check(event)" />
                                                </div>
                                            </div>




                                            <h2 class="card-inside-title">Дата создания:</h2> <!-- Переведено -->
                                            <div class="row clearfix">
                                                <div class="col-sm-12">

                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="date" class="form-control date"
                                                                name="createddate" placeholder="Пример: 30/07/2016">
                                                            <!-- Переведено -->
                                                        </div>
                                                    </div>

                                                    <h2 class="card-inside-title">Дата изменения:</h2>
                                                    <!-- Переведено -->
                                                    <div class="row clearfix">
                                                        <div class="col-sm-12">

                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="date" class="form-control date"
                                                                        name="modifieddate"
                                                                        placeholder="Пример: 30/07/2016">
                                                                    <!-- Переведено -->
                                                                </div>
                                                            </div>

                                                            <h2 class="card-inside-title">Статус:</h2>
                                                            <!-- Переведено -->
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
                                        <center>
                                            <input class="btn btn-primary waves-effect" name="submit" type="submit"
                                                value="ОТПРАВИТЬ"> <!-- Переведено -->
                                            <input type="reset" name="close" class="btn btn-primary waves-effect"
                                                value="СБРОСИТЬ"> <!-- Переведено -->
                                        </center>
    </section>

</form>

<?php
    include_once 'footer_h.php';
?>
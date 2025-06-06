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
    if (!((code >= 65 && code <= 90) || (code >= 97 && code <= 122) || (code == 32))) {
        alert("Пожалуйста, введите только буквы");
        event.keyCode = 0;
    }
}

function num_check(event) {
    code = event.keyCode;
    if (!((code >= 48 && code <= 57))) {
        alert("Пожалуйста, введите только цифры");
        event.keyCode = 0;
    }
}

function validate_form(f1) {
    if (isEmpty(f1.employeeid.value, "Идентификатор сотрудника")) {
        alert(errMsg);
        f1.employeeid.focus();
        return (false);
    }
}
</script>

<form action="performance.php" method="post" onSubmit="return validate_form(this)">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>РАСЧЕТ ЗАРПЛАТЫ</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title">Идентификатор сотрудника:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="employeeid" class="form-control"
                                                onKeyPress="num_check(event)" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <input class="btn btn-primary waves-effect" name="add" type="submit"
                                    value="РАССЧИТАТЬ ЗАРПЛАТУ">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

<?php
include_once 'footer_h.php';
?>
<?php
	include_once 'footer_h.php';
?>

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
    if (isEmpty(f1.employeename.value, "Имя сотрудника")) {
        alert(errMsg);
        f1.employeename.focus();
        return (false);
    }
    if (isEmpty(f1.email.value, "Электронная почта")) {
        alert(errMsg);
        f1.email.focus();
        return (false);
    }
    if (isEmpty(f1.role.value, "Роль")) {
        alert(errMsg);
        f1.role.focus();
        return (false);
    }
    if (isEmpty(f1.currentaddress.value, "Текущий адрес")) {
        alert(errMsg);
        f1.currentaddress.focus();
        return (false);
    }
    if (isEmpty(f1.permanentaddress.value, "Постоянный адрес")) {
        alert(errMsg);
        f1.permanentaddress.focus();
        return (false);
    }
    if (isEmpty(f1.mobilenumber.value, "Номер мобильного телефона")) {
        alert(errMsg);
        f1.mobilenumber.focus();
        return (false);
    }
    /*   if(isEmpty(f1.group1.value,"Пол"))
      {
        alert(errMsg);
        //f1.group1.focus();
        return (false);
      }*/

    if (isEmpty(f1.dob.value, "Дата рождения")) {
        alert(errMsg);
        f1.dob.focus();
        return (false);
    }
    if (isEmpty(f1.qualification.value, "Квалификация")) {
        alert(errMsg);
        f1.qualification.focus();
        return (false);
    }
    if (isEmpty(f1.joiningdate.value, "Дата приема на работу")) {
        alert(errMsg);
        f1.joiningdate.focus();
        return (false);
    }
    if (isEmpty(f1.registrationdate.value, "Дата регистрации")) {
        alert(errMsg);
        f1.registrationdate.focus();
        return (false);
    }
    if (isEmpty(f1.departmentid.value, "Id отдела")) {
        alert(errMsg);
        f1.departmentid.focus();
        return (false);
    }
    if (isEmpty(f1.branchid.value, "Id филиала")) {
        alert(errMsg);
        f1.branchid.focus();
        return (false);
    }
    if (isEmpty(f1.designationid.value, "Id должности")) {
        alert(errMsg);
        f1.designationid.focus();
        return (false);
    }
    if (isEmpty(f1.shiftid.value, "Id смены")) {
        alert(errMsg);
        f1.shiftid.focus();
        return (false);
    }
    if (isEmpty(f1.password.value, "Пароль")) {
        alert(errMsg);
        f1.password.focus();
        return (false);
    }
    if (isEmpty(f1.confirmpassword.value, "Подтвердите пароль")) {
        alert(errMsg);
        f1.confirmpassword.focus();
        return (false);
    }
    if (f1.password.value != f1.confirmpassword.value) {
        alert("Ваш пароль и подтверждение пароля не совпадают.");
        f1.confirmpassword.focus();
        return (false);
    }

    if (isEmpty(f1.bankaccountnumber.value, "Номер банковского счета")) {
        alert(errMsg);
        f1.bankaccountnumber.focus();
        return (false);
    }
    if (isEmpty(f1.city.value, "Город")) {
        alert(errMsg);
        f1.city.focus();
        return (false);
    }
    if (isEmpty(f1.basicsalary.value, "Основная зарплата")) {
        alert(errMsg);
        f1.basicsalary.focus();
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
    if (f1.mobilenumber.value.length >= 10) {
        alert("Пожалуйста, введите правильный номер мобильного телефона.");
        f1.mobilenumber.focus();
        return (false);
    }
}
</script>
<form action="employee_add.php" method="post" id="Employee" name="form1" onSubmit="return validate_form(this)">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>СОТРУДНИК</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <input type="hidden" name="employeeid" class="form-control" />
                            <input type="hidden" name="pt" class="form-control" />

                            <h2 class="card-inside-title">Имя сотрудника:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="employeename" class="form-control"
                                                onKeyPress="str_check(event)" />
                                        </div>
                                    </div>

                                    <h2 class="card-inside-title">Электронная почта (*логин для сотрудника):</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="E-mail" name="email" class="form-control" />
                                                </div>
                                            </div>

                                            <h2 class="card-inside-title">Роль:</h2>
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="role" class="form-control"
                                                                onKeyPress="num_check(event)" />
                                                        </div>
                                                    </div>

                                                    <h2 class="card-inside-title">Текущий адрес:</h2>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <textarea rows="4" class="form-control no-resize"
                                                                        name="currentaddress"></textarea>
                                                                </div>
                                                            </div>

                                                            <h2 class="card-inside-title">Постоянный адрес:</h2>
                                                            <div class="row clearfix">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <textarea rows="4"
                                                                                class="form-control no-resize"
                                                                                name="permanentaddress"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <h2 class="card-inside-title">Номер мобильного
                                                                        телефона:</h2>
                                                                    <div class="row clearfix">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"
                                                                                        name="mobilenumber"
                                                                                        class="form-control"
                                                                                        onKeyPress="num_check(event)" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="demo-radio-button">
                                                                                <h2 class="card-inside-title">Пол:</h2>
                                                                                <input name="group1" id="radio_1"
                                                                                    type="radio" value="Male" />
                                                                                <label for="radio_1">Мужской</label>
                                                                                <input name="group1" id="radio_2"
                                                                                    type="radio" value="Female" />
                                                                                <label for="radio_2">Женский</label>
                                                                            </div>

                                                                            <h2 class="card-inside-title">Дата рождения:
                                                                            </h2>
                                                                            <div class="row clearfix">
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <div class="form-line">
                                                                                            <input type="date"
                                                                                                class="form-control date"
                                                                                                name="dob"
                                                                                                placeholder="Пример: 30/07/2016">
                                                                                        </div>
                                                                                    </div>

                                                                                    <h2 class="card-inside-title">
                                                                                        Квалификация:</h2>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-sm-12">
                                                                                            <div class="form-group">
                                                                                                <div class="form-line">
                                                                                                    <input type="text"
                                                                                                        name="qualification"
                                                                                                        class="form-control" />
                                                                                                </div>
                                                                                            </div>

                                                                                            <h2
                                                                                                class="card-inside-title">
                                                                                                Дата приема на работу:
                                                                                            </h2>
                                                                                            <div class="row clearfix">
                                                                                                <div class="col-sm-12">
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <div
                                                                                                            class="form-line">
                                                                                                            <input
                                                                                                                type="date"
                                                                                                                class="form-control date"
                                                                                                                name="joiningdate"
                                                                                                                placeholder="Пример: 30/07/2016">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <h2
                                                                                                        class="card-inside-title">
                                                                                                        Дата
                                                                                                        регистрации:
                                                                                                    </h2>
                                                                                                    <div
                                                                                                        class="row clearfix">
                                                                                                        <div
                                                                                                            class="col-sm-12">
                                                                                                            <div
                                                                                                                class="form-group">
                                                                                                                <div
                                                                                                                    class="form-line">
                                                                                                                    <input
                                                                                                                        type="date"
                                                                                                                        class="form-control date"
                                                                                                                        name="registrationdate"
                                                                                                                        placeholder="Пример: 30/07/2016">
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <h2
                                                                                                                class="card-inside-title">
                                                                                                                Id
                                                                                                                отдела:
                                                                                                            </h2>
                                                                                                            <div
                                                                                                                class="row clearfix">
                                                                                                                <div
                                                                                                                    class="col-sm-12">
                                                                                                                    <div
                                                                                                                        class="form-group">
                                                                                                                        <div
                                                                                                                            class="form-line">
                                                                                                                            <input
                                                                                                                                type="text"
                                                                                                                                name="departmentid"
                                                                                                                                class="form-control" />
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <h2
                                                                                                                        class="card-inside-title">
                                                                                                                        Id
                                                                                                                        филиала:
                                                                                                                    </h2>
                                                                                                                    <div
                                                                                                                        class="row clearfix">
                                                                                                                        <div
                                                                                                                            class="col-sm-12">
                                                                                                                            <div
                                                                                                                                class="form-group">
                                                                                                                                <div
                                                                                                                                    class="form-line">
                                                                                                                                    <input
                                                                                                                                        type="text"
                                                                                                                                        name="branchid"
                                                                                                                                        class="form-control" />
                                                                                                                                </div>
                                                                                                                            </div>

                                                                                                                            <h2
                                                                                                                                class="card-inside-title">
                                                                                                                                Id
                                                                                                                                должности:
                                                                                                                            </h2>
                                                                                                                            <div
                                                                                                                                class="row clearfix">
                                                                                                                                <div
                                                                                                                                    class="col-sm-12">
                                                                                                                                    <div
                                                                                                                                        class="form-group">
                                                                                                                                        <div
                                                                                                                                            class="form-line">
                                                                                                                                            <input
                                                                                                                                                type="text"
                                                                                                                                                name="designationid"
                                                                                                                                                class="form-control" />
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                    <h2
                                                                                                                                        class="card-inside-title">
                                                                                                                                        Id
                                                                                                                                        смены:
                                                                                                                                    </h2>
                                                                                                                                    <div
                                                                                                                                        class="row clearfix">
                                                                                                                                        <div
                                                                                                                                            class="col-sm-12">
                                                                                                                                            <div
                                                                                                                                                class="form-group">
                                                                                                                                                <div
                                                                                                                                                    class="form-line">
                                                                                                                                                    <input
                                                                                                                                                        type="text"
                                                                                                                                                        name="shiftid"
                                                                                                                                                        class="form-control" />
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <h2
                                                                                                                                                class="card-inside-title">
                                                                                                                                                Пароль:
                                                                                                                                            </h2>
                                                                                                                                            <div
                                                                                                                                                class="row clearfix">
                                                                                                                                                <div
                                                                                                                                                    class="col-sm-12">
                                                                                                                                                    <div
                                                                                                                                                        class="form-group">
                                                                                                                                                        <div
                                                                                                                                                            class="form-line">
                                                                                                                                                            <input
                                                                                                                                                                type="password"
                                                                                                                                                                name="password"
                                                                                                                                                                class="form-control"
                                                                                                                                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                                                                                                                                title="Должен содержать как минимум одну цифру, одну заглавную и одну строчную букву, и не менее 8 символов" />
                                                                                                                                                        </div>
                                                                                                                                                    </div>

                                                                                                                                                    <h2
                                                                                                                                                        class="card-inside-title">
                                                                                                                                                        Подтвердите
                                                                                                                                                        пароль:
                                                                                                                                                    </h2>
                                                                                                                                                    <div
                                                                                                                                                        class="row clearfix">
                                                                                                                                                        <div
                                                                                                                                                            class="col-sm-12">
                                                                                                                                                            <div
                                                                                                                                                                class="form-group">
                                                                                                                                                                <div
                                                                                                                                                                    class="form-line">
                                                                                                                                                                    <input
                                                                                                                                                                        type="password"
                                                                                                                                                                        name="confirmpassword"
                                                                                                                                                                        class="form-control"
                                                                                                                                                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                                                                                                                                        title="Должен содержать как минимум одну цифру, одну заглавную и одну строчную букву, и не менее 8 символов" />
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <h2
                                                                                                                                                                class="card-inside-title">
                                                                                                                                                                Номер
                                                                                                                                                                банковского
                                                                                                                                                                счета:
                                                                                                                                                            </h2>
                                                                                                                                                            <div
                                                                                                                                                                class="row clearfix">
                                                                                                                                                                <div
                                                                                                                                                                    class="col-sm-12">
                                                                                                                                                                    <div
                                                                                                                                                                        class="form-group">
                                                                                                                                                                        <div
                                                                                                                                                                            class="form-line">
                                                                                                                                                                            <input
                                                                                                                                                                                type="number"
                                                                                                                                                                                name="bankaccountnumber"
                                                                                                                                                                                class=" form-control"
                                                                                                                                                                                onKeyPress="num_check(event)" />
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <h2
                                                                                                                                                                        class="card-inside-title">
                                                                                                                                                                        Город:
                                                                                                                                                                    </h2>
                                                                                                                                                                    <div
                                                                                                                                                                        class="row clearfix">
                                                                                                                                                                        <div
                                                                                                                                                                            class="col-sm-12">
                                                                                                                                                                            <div
                                                                                                                                                                                class="form-group">
                                                                                                                                                                                <div
                                                                                                                                                                                    class="form-line">
                                                                                                                                                                                    <input
                                                                                                                                                                                        type="text"
                                                                                                                                                                                        name="city"
                                                                                                                                                                                        class="form-control"
                                                                                                                                                                                        onKeyPress="str_check(event)" />
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <h2
                                                                                                                                                                                class="card-inside-title">
                                                                                                                                                                                Основная
                                                                                                                                                                                зарплата:
                                                                                                                                                                            </h2>
                                                                                                                                                                            <div
                                                                                                                                                                                class="row clearfix">
                                                                                                                                                                                <div
                                                                                                                                                                                    class="col-sm-12">
                                                                                                                                                                                    <div
                                                                                                                                                                                        class="form-group">
                                                                                                                                                                                        <div
                                                                                                                                                                                            class="form-line">
                                                                                                                                                                                            <input
                                                                                                                                                                                                type="number"
                                                                                                                                                                                                name="basicsalary"
                                                                                                                                                                                                class="form-control"
                                                                                                                                                                                                onKeyPress="num_check(event)" />
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>

                                                                                                                                                                                    <h2
                                                                                                                                                                                        class="card-inside-title">
                                                                                                                                                                                        Дата
                                                                                                                                                                                        создания:
                                                                                                                                                                                    </h2>
                                                                                                                                                                                    <div
                                                                                                                                                                                        class="row clearfix">
                                                                                                                                                                                        <div
                                                                                                                                                                                            class="col-sm-12">
                                                                                                                                                                                            <div
                                                                                                                                                                                                class="form-group">
                                                                                                                                                                                                <div
                                                                                                                                                                                                    class="form-line">
                                                                                                                                                                                                    <input
                                                                                                                                                                                                        type="date"
                                                                                                                                                                                                        class="form-control date"
                                                                                                                                                                                                        name="createddate"
                                                                                                                                                                                                        placeholder="Пример: 30/07/2016">
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>

                                                                                                                                                                                            <h2
                                                                                                                                                                                                class="card-inside-title">
                                                                                                                                                                                                Дата
                                                                                                                                                                                                изменения:
                                                                                                                                                                                            </h2>
                                                                                                                                                                                            <div
                                                                                                                                                                                                class="row clearfix">
                                                                                                                                                                                                <div
                                                                                                                                                                                                    class="col-sm-12">
                                                                                                                                                                                                    <div
                                                                                                                                                                                                        class="form-group">
                                                                                                                                                                                                        <div
                                                                                                                                                                                                            class="form-line">
                                                                                                                                                                                                            <input
                                                                                                                                                                                                                type="date"
                                                                                                                                                                                                                class="form-control date"
                                                                                                                                                                                                                name="modifieddate"
                                                                                                                                                                                                                placeholder="Пример: 30/07/2016">
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>

                                                                                                                                                                                                    <h2
                                                                                                                                                                                                        class="card-inside-title">
                                                                                                                                                                                                        Статус:
                                                                                                                                                                                                    </h2>
                                                                                                                                                                                                    <div
                                                                                                                                                                                                        class="row clearfix">
                                                                                                                                                                                                        <div
                                                                                                                                                                                                            class="col-sm-12">
                                                                                                                                                                                                            <div
                                                                                                                                                                                                                class="form-group">
                                                                                                                                                                                                                <div
                                                                                                                                                                                                                    class="form-line">
                                                                                                                                                                                                                    <input
                                                                                                                                                                                                                        type="text"
                                                                                                                                                                                                                        name="status"
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
                                                                                                                                                                                    <input
                                                                                                                                                                                        class="btn btn-primary waves-effect"
                                                                                                                                                                                        name="submit"
                                                                                                                                                                                        type="submit"
                                                                                                                                                                                        value="ОТПРАВИТЬ">
                                                                                                                                                                                    <input
                                                                                                                                                                                        type="reset"
                                                                                                                                                                                        name="close"
                                                                                                                                                                                        class="btn btn-primary waves-effect"
                                                                                                                                                                                        value="СБРОСИТЬ">
                                                                                                                                                                                </center>

                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
    </section>
</form>

<?php
    include_once 'footer_h.php';
?>
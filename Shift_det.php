<?php
include_once 'header_h.php';
include_once 'roles.php';
?>

<form action="#" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ДЕТАЛИ СМЕН</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title">ID Сотрудника:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="employeeid" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">ID Смены:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="shiftid">
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Время Прихода:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" type="time" name="intime" placeholder="11:00 AM">
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Время Ухода:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" name="outtime" placeholder="08:00 PM">
                                        </div>

                            <h2 class="card-inside-title">Время Начала Перерыва:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" type="time" name="bintime" placeholder="01:30 AM">
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Время Окончания Перерыва:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" name="bouttime" placeholder="02:45 PM">
                                        </div>
                        
                            <h2 class="card-inside-title">Льготный период (в минутах):</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="numbert" class="form-control time12" name="graceperiod" placeholder="60">
                                        </div>
                        
                            <h2 class="card-inside-title">Количество часов за полдня:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="halfdayhours" placeholder="4-6 часов">
                                        </div>
                        
                            <h2 class="card-inside-title">Максимальное количество допустимых ошибок:</h2>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="noUi-target noUi-ltr noUi-horizontal noUi-connect" id="nouislider_basic_example">
                                        <div class="noUi-base">
                                            <div class="noUi-origin noUi-background" style="left: 3;">
                                                <div class="noUi-handle noUi-handle-lower"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-20 font-12"><b>Значение: </b>
                                        <span class="js-nouislider-value">3</span></div>

                            <h2 class="card-inside-title">Время Опоздания:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" type="time" name="lateintime">
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Время Раннего Ухода:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" name="earlyouttime">
                                        </div>

                            <h2 class="card-inside-title">Время Раннего Ухода:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" name="earlyouttime">
                                        </div>

                            <h2 class="card-inside-title">Рабочие Дни:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="weekdays">
                                        </div>

                            <h2 class="card-inside-title">Всего Часов:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="totalhours">
                                        </div>

                            <h2 class="card-inside-title">Отдел:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="department">
                                        </div>

                            <h2 class="card-inside-title">Примечания:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="remarks">
                                        </div>

                            <h2 class="card-inside-title">Присутствовал:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="present">
                                        </div>

                            <h2 class="card-inside-title">Отсутствовал:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="Absent">
                                        </div>

                            <h2 class="card-inside-title">Базовая Зарплата:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="basicsalary">
                                        </div>   

                            <h2 class="card-inside-title">Чистая Зарплата:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="netsalary">
                                        </div>  

                            <h2 class="card-inside-title">HRA (Надбавка на жилье):</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="hra">
                                        </div>       

                            <h2 class="card-inside-title">DA (Надбавка за выслугу лет):</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="da">
                                        </div>       

                            <h2 class="card-inside-title">Бонус:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="bonus">
                                        </div>  

                            <h2 class="card-inside-title">PT (Профессиональный налог):</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="pt">
                                        </div>  

                            <h2 class="card-inside-title">TDS (Налог, вычитаемый у источника):</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="tds">
                                        </div>

                            <h2 class="card-inside-title">Имя Сотрудника:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="empname">
                                        </div>                                    
                            
                            <h2 class="card-inside-title">Недели Дней:</h2>
                            <div class="demo-checkbox">
                                Понедельник&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_1" type="checkbox" checked="">
                                        <label for="md_checkbox_1">1-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_2" type="checkbox">
                                        <label for="md_checkbox_2">2-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_3" type="checkbox">
                                        <label for="md_checkbox_3">3-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_4" type="checkbox">
                                        <label for="md_checkbox_4">4-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_5" type="checkbox">
                                        <label for="md_checkbox_5">5-й</label><br>
                                Вторник&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_6" type="checkbox">
                                        <label for="md_checkbox_6">1-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_7" type="checkbox">
                                        <label for="md_checkbox_7">2-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_8" type="checkbox">
                                        <label for="md_checkbox_8">3-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_9" type="checkbox">
                                        <label for="md_checkbox_9">4-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_10" type="checkbox">
                                        <label for="md_checkbox_10">5-й</label><br>
                                Среда&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_11" type="checkbox">
                                        <label for="md_checkbox_11">1-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_12" type="checkbox">
                                        <label for="md_checkbox_12">2-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_13" type="checkbox">
                                        <label for="md_checkbox_13">3-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_14" type="checkbox">
                                        <label for="md_checkbox_14">4-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_15" type="checkbox">
                                        <label for="md_checkbox_15">5-й</label><br>
                                Четверг&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_16" type="checkbox">
                                        <label for="md_checkbox_16">1-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_17" type="checkbox">
                                        <label for="md_checkbox_17">2-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_18" type="checkbox">
                                        <label for="md_checkbox_18">3-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_19" type="checkbox">
                                        <label for="md_checkbox_19">4-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_20" type="checkbox">
                                        <label for="md_checkbox_20">5-й</label><br>
                                Пятница&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_21" type="checkbox">
                                        <label for="md_checkbox_21">1-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_22" type="checkbox">
                                        <label for="md_checkbox_22">2-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_23" type="checkbox">
                                        <label for="md_checkbox_23">3-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_24" type="checkbox">
                                        <label for="md_checkbox_24">4-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_25" type="checkbox">
                                        <label for="md_checkbox_25">5-й</label><br>
                                Суббота&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_26" type="checkbox">
                                        <label for="md_checkbox_26">1-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_27" type="checkbox" checked="">
                                        <label for="md_checkbox_27">2-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_28" type="checkbox">
                                        <label for="md_checkbox_28">3-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_29" type="checkbox" checked="">
                                        <label for="md_checkbox_29">4-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_30" type="checkbox" checked="">
                                        <label for="md_checkbox_30">5-й</label><br>
                                Воскресенье&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_31" type="checkbox" checked="">
                                        <label for="md_checkbox_31">1-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_32" type="checkbox" checked="">
                                        <label for="md_checkbox_32">2-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_33" type="checkbox" checked="">
                                        <label for="md_checkbox_33">3-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_34" type="checkbox" checked="">
                                        <label for="md_checkbox_34">4-й</label>
                                    <input class="chk-col-blue" id="md_checkbox_35" type="checkbox" checked="">
                                        <label for="md_checkbox_35">5-й</label>
                            </div>
                    
                            <h2 class="card-inside-title">Дата Вступления в Силу:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="Date" class="form-control time12" name="effecti">
                                        </div>
                                    </div>

                            <center>
                                <input class="btn btn-primary waves-effect" name="add" type="submit" value="ДОБАВИТЬ" formaction="./shiftdet_add.php">
                                <input type="submit" name="close" class="btn btn-primary waves-effect" value="ЗАКРЫТЬ" formaction="./home_page.php">
                                <input type="reset" name="reset" class="btn btn-primary waves-effect" value="СБРОСИТЬ">
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
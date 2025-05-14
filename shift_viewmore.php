<?php
include_once 'header_h.php';
include_once 'roles.php';
include_once 'config/config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Подготавливаем SQL запрос
  $q = "SELECT * FROM shift WHERE Shift_id = ?";
  $stmt = mysqli_prepare($connection_obj, $q);

  if ($stmt) {
    // Привязываем параметр
    mysqli_stmt_bind_param($stmt, 'i', $id); // 'i' означает integer (целое число)

    // Выполняем запрос
    mysqli_stmt_execute($stmt);

    // Получаем результат
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
      echo '<form action="shift_view.php" method="post">
            <section class="content">
              <div class="container-fluid">
                <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                      <div class="body">';

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<b>ID Смены:</b> " . htmlspecialchars($row['Shift_id']) . "<br>";
        echo "<b>Название Смены:</b> " . htmlspecialchars($row['Shift_name']) . "<br>";
        echo "<b>Время Начала Смены:</b> " . htmlspecialchars($row['In_time']) . "<br>";
        echo "<b>Время Окончания Смены:</b> " . htmlspecialchars($row['Out_time']) . "<br>";
        echo "<b>Дата Создания:</b> " . htmlspecialchars($row['Created_date']) . "<br>";
        echo "<b>Дата Изменения:</b> " . htmlspecialchars($row['Modified_date']) . "<br>";
        echo "<b>Статус:</b> " . htmlspecialchars($row['Status']) . "<br>";
        echo "<br><br><br><br>";
      }

      echo '<input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="НАЗАД">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </form>';

      // Освобождаем память от результата
      mysqli_free_result($result);
    } else {
      echo "Ошибка при получении информации о смене.";
    }

    // Закрываем запрос
    mysqli_stmt_close($stmt);
  } else {
    echo "Ошибка при подготовке запроса: " . mysqli_error($connection_obj);
  }
} else {
  echo "Неверный ID смены.";
}

include_once 'footer_h.php';
?>
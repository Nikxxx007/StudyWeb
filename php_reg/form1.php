<?php
?>
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Форма 1</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,900;1,400;1,500&family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <center>
      <div class="container_form">
        <div class="form_element" style="margin-top: 25px; margin-bottom: 20px;">
          <font class="h">Основная информация </font>
        </div>
        <form class="" action="form2.php" method="POST">
          <div class="form_element">
            ФИО<br>
            <input type="text" name="name" value="" required>
          </div>
          <div class="form_element">
            Дата рождения<br>
            <input type="date" name="birthdate" value="2020-01-01" required>
          </div>
          <div class="form_element">
            Год окончания школы<br>
            <input type="number" name="sgyear" value="" required>
          </div>
          <div class="form_element">
            <label class="container">Необходимо общежитие
            <input type="checkbox" name="dorm">
            <span class="checkmark"></span>
            </label>
          </div>
          <div align="right" style="margin-top: 25px;">
              <input type="submit" name="" value="Далее">
          </div>
          <div align="right">
              <a href="index.php">вернуться на главную</a>
          </div>


        </form>
      </div>

    </center>

  </body>
</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (empty($_POST['name']) or empty($_POST['sgyear'])) {
  header("Location: form1.php");
}

if (!empty($_POST['name'])) $name = htmlspecialchars($_POST['name']);
if (!empty($_POST['birthdate'])) $birthdate = htmlspecialchars($_POST['birthdate']);
if (!empty($_POST['sgyear'])) $sgyear = htmlspecialchars($_POST['sgyear']);
if (!empty($_POST['dorm'])) $dorm = 1;
else $dorm = 0;

$args = $name.",".$birthdate.",".$sgyear.",".$dorm;

//if (isset($_POST['subm'])) require '/assets/done.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Форма 2</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
  </head>
  <body>
    <center>
      <div class="container_form">
        <div class="form_element" style="margin-top: 25px; margin-bottom: 20px;">
          <font class="h">Оценки</font>
        </div>
        <form class="" action="add.php" method="POST">

          <font class="h2">Оценки вступительных экзаменов</font>
          <div class="form_element">
            Русский язык&nbsp
            <select class="selector" name="rus_e">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="0">Не явился</option>
            </select>
            <br>
            Математика&nbsp
            <select class="selector" name="math_e">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="0">Не явился</option>
            </select>
            <br>
            Информатика&nbsp
            <select class="selector" name="cs_e">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="0">Не явился</option>
            </select>
          </div>
          <font class="h2">Оценки в аттестате</font>
          <div class="form_element">
            Физика&nbsp
            <select class="selector" name="phys_s">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="-1">Зачтено</option>
                <option value="-2">Прослушан курс</option>
            </select>
            <br>
            Математика&nbsp
            <select class="selector" name="math_s">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="-1">Зачтено</option>
                <option value="-2">Прослушан курс</option>
            </select>
            <br>
            Информатика&nbsp
            <select class="selector" name="cs_s">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="-1">Зачтено</option>
                <option value="-2">Прослушан курс</option>
            </select>
            <br>
            Английский язык&nbsp
            <select class="selector" name="en_s">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="-1">Зачтено</option>
                <option value="-2">Прослушан курс</option>
            </select>
            <br>
            Русский язык&nbsp
            <select class="selector" name="rus_s">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="-1">Зачтено</option>
                <option value="-2">Прослушан курс</option>
            </select>
            <br>
          </div>
          <input type="hidden" name="args" value="<?=$args?>">
          <input type="hidden" name="id" value="1">
          <div align="right" style="margin-top: 25px;">
            <input type="submit" name="sumb" value="Добавить">
          </div>


        </form>
      </div>

    </center>

  </body>
</html> 

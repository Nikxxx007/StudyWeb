<?php
$csv = file_get_contents("data.csv");
$csv_array = explode(';', $csv);

$head = ['ФИО',
          'Дата рождения',
          'Год окончания школы',
          'Нуждается в общежитии',
          'Русский язык',
          'Математика',
          'Информатика',
          'Физика',
          'Математика',
          'Информатика',
          'Английский язык',
          'Русский язык'];

$check = false;

for ($i = 1; $i < count($csv_array); $i++) {
    $check = false;
    $line = explode(',', $csv_array[$i]);
    for ($j = 4; $j < 7; $j++) {
        if ($line[$j] !== '5') $check = true;
    }
    if ($check) {
        unset($csv_array[$i]);
    }
    $csvContent = implode(";", $csv_array);
    
}
file_put_contents("data2.csv", $csvContent);

$csv = file_get_contents("data2.csv");
$csv_array = explode(';', $csv);

$start = -1;
$counter = 0;
$line = explode(',', $csv_array[0]);
while (($start == -1) and ($counter < count( $line ))) {
  if (substr($line[$counter], -2) == "_E") $start = $counter;
  $counter++;
}
$lines = [];
for ($i = 1; $i < count($csv_array); $i++){
  $line = explode(',', $csv_array[$i]);
  for($j = $start; $j < count($line); $j++){
    if ((int)$line[$j] == 0) $line[$j] = "Не явился";
    elseif ((int)$line[$j] == -1) $line[$j] = "Зачтено";
    elseif ((int)$line[$j] == -2) $line[$j] = "Прослушан курс";
  }
  array_push($lines, $line);
}
// echo "<pre>";
// print_r($lines);
// echo "</pre>";

?>
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Абитуриенты</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,900;1,400;1,500&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/styles.css">
  </head>
  <body class="empty">
 
    <p class="h2">Все записи:</p>
    <table >
      <tr>
          <td colspan="8"><b>Общая информация</b></td>
          <td colspan="6"><b>Оценки за экзамены</b></td>
          <td colspan="10"><b>Оценки в аттестате</b></td>
      </tr>
      <tr>
      <?php for ($i = 0; $i < count($head); $i++) {
          echo "<td><b>".$head[$i]."</b><td/>";
      } ?>
    </tr>
      <?php for ($i = 0; $i < count($lines) - 1; $i++) {
          echo "<tr style = '";
          if ($i % 2 == 0) echo "background-color: #eee;'>";
          else echo "background-color: white;'>";
          for ($j = 0; $j < count($lines[$i]); $j++){
            echo "<td>".$lines[$i][$j]."<td/>";
          }
          echo "</tr>";

      } ?>

    </table>
    <br>
    <a href="index.php">вернуться на главную</a>
  </body>
</html>

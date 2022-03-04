<?php
if (empty($_POST['id'])) header("Location: form1.php");

$path = "";
$data = $path."data.csv";

$rus_e = htmlspecialchars($_POST['rus_e']);
$math_e = htmlspecialchars($_POST['math_e']);
$cs_e = htmlspecialchars($_POST['cs_e']);
$phys_s = htmlspecialchars($_POST['phys_s']);
$math_s = htmlspecialchars($_POST['math_s']);
$cs_s = htmlspecialchars($_POST['cs_s']);
$en_s = htmlspecialchars($_POST['en_s']);
$rus_s = htmlspecialchars($_POST['rus_s']);
$line = htmlspecialchars($_POST['args']);

$line = "\n".$line;
$line .= ",".$rus_e.",".$math_e.",".$cs_e.",".$phys_s.",".$math_s.",".$cs_s.",".$en_s.",".$rus_s.";";


if (strlen(file_get_contents($data)) == 0){
  file_put_contents($data, 'NAME, BIRTHDATE, SGYEAR, DORM, RUS_E, MATH_E, CS_E, PHYS_S, MATH_S, CS_S, EN_S, RUS_S;');
}
file_put_contents($data, $line, FILE_APPEND);

header("Location: done.html");
?>

<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Добавление</title>
  </head>
  <body>
    Добавление...
  </body>
</html>

<?php

$csv = file_get_contents("data.csv");
$csv_array = explode(';', $csv);



$check = true;

for ($i = 1; $i < count($csv_array); $i++) {
    $check = false;
    $line = explode(',', $csv_array[$i]);
    for ($j = 3; $j < count($line); $j++) {
        if ($line[$j] == '5') $check = true;
    }
    if (!$check) {
        unset($csv_array[$i]);
    }
    $csvContent = implode(";", $csv_array);
}
file_put_contents("data.csv", $csvContent);

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
    <div align="center">
        <a href="index.php">удаление выполнено, вернуться на главную</a>
    </div>
</body>
</html>

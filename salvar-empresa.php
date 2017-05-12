<?php
$array[] = $_POST["Nome"];
$array[] = $_POST["Endereco"];
$array[] = $_POST["Descricao"];

$fp = fopen('restaurantes.csv', 'a');

fputcsv($fp, $array);

fclose($fp);
header("Location: http://localhost:8000");
?>

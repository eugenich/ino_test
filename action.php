<?php

$filename = 'data.json';




// Загружаем данные из файла в строку
$file = file_get_contents("data.json");
// Превращаем строку в объект
$data = json_decode($file, JSON_OBJECT_AS_ARRAY);


$income = $data[income];
$expenses = $data[expenses];
print_r($income);

print_r($expenses);

$inc = array(
    "date" => $_POST['income_d'],
    "money" => $_POST['income_m']
);
array_push($income, $inc);

$exp = array(
    "date" => $_POST['expenses_d'],
    "money" => $_POST['expenses_m']
);
array_push($expenses, $exp);


$arr = array(
    "income"=>$income,
    "expenses" => $expenses,
);

$json = json_encode($arr);
echo $json;

$fp = fopen($filename,"w");
fputs($fp, $json);
fclose($fp);
?>
<?php
$filename = 'data.json';


$file = file_get_contents("data.json");
// Превращаем строку в объект
$data = json_decode($file, true);

//print_r($data[income]);
//print_r($data[expenses]);


$summ= 0;
$rash = 0;

$inc= array();
foreach ($data[income] as $value) {
    $summ += $value[money];
}
foreach ($data[expenses] as $value) {
   $rash += $value[money];
}

$itog =$summ;
$itog -= $rash;
/*
echo "Доходы:$summ";
echo "Расходы:$rash";
echo "Итог:$itog";
*/

?>
        <div class="col-md-4">
            <h2>Доходы</h2>
            <p><h1><?php echo $summ;?></h1></p>
        </div>
        <div class="col-md-4">
            <h2>Расходы</h2>
            <p><h1><?php echo $rash;?></h1></p>
        </div>
        <div class="col-md-4">
            <h2>Остаток</h2>
            <p><h1><?php echo $itog;?></h1></p>
        </div>




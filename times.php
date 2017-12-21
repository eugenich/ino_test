<?php
$filename = 'data.json';


$file = file_get_contents("data.json");

$data = json_decode($file, true);

//print_r($data[income]);
//print_r($data[expenses]);

//Получим начало и конец месяца (31 день)
$now = time();
$m_down = time() - 2678400;

$sum_mount=0;
$rash_mount=0;

//Получим конец квартала - 3 месяца (93 день)
$kv_down = time() - 8035200;
$sum_kv=0;
$rash_kv=0;

//Получим конец года
$year_down = time() - 31536000;
$sum_year=0;
$rash_year=0;

$inc= array();
foreach ($data[income] as $value) {

    //получаем дату в массив
    $date = explode(", ", $value[date]);
    $datt = mktime(0, 0, 0, $date[0],$date[1],$date[2]);

    if($datt >= $m_down && $datt < $now )
    {
        $sum_mount += $value[money];
    }else if($datt >= $kv_down && $datt < $now )
    {
        $sum_kv += $value[money];
    }else if($datt >= $year_down && $datt < $now )
    {
        $sum_year += $value[money];
    }

}




foreach ($data[expenses] as $value) {
    $date = explode(", ", $value[date]);
    $datt = mktime(0, 0, 0, $date[0],$date[1],$date[2]);

    if($datt >= $m_down && $datt < $now)
    {
        $rash_mount += $value[money];
    }else if($datt >= $kv_down && $datt < $now )
    {
        $rash_kv += $value[money];
    }else if($datt >= $year_down && $datt < $now )
    {
        $rash_year += $value[money];
    }
}
/*
echo "Доходы за месяц:$sum_mount";
echo "Расходы за месяц:$rash_mount";
$itog_mount = $sum_mount;
$itog_mount -= $rash_mount;
echo "Остаток за месяц:$itog_mount";

echo "Доходы за квартал:$sum_kv";
echo "Расходы за квартал:$rash_kv";
$itog_kv = $sum_kv;
$itog_kv -= $rash_kv;
echo "Остаток за квартал:$itog_kv";

echo "Доходы за год:$sum_year";
echo "Расходы за год:$rash_year";
$itog_year = $sum_year;
$itog_year -= $rash_year;
echo "Остаток за год:$itog_year";

*/
$itog_mount = $sum_mount;
$itog_mount -= $rash_mount;

$itog_kv = $sum_kv;
$itog_kv -= $rash_kv;


$itog_year = $sum_year;
$itog_year -= $rash_year;

?>

<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Период</th>
            <th>Доходы</th>
            <th>Расходы</th>
            <th>Остаток</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><strong>Месяц</strong></td>
            <td><?php echo $sum_mount;?></td>
            <td><?php echo $rash_mount;?></td>
            <td><?php echo $itog_mount;?></td>
        </tr>
        <tr>
            <td><strong>Квартал</strong></td>
            <td><?php echo $sum_kv;?></td>
            <td><?php echo $rash_kv;?></td>
            <td><?php echo $itog_kv;?></td>
        </tr>
        <tr>
            <td><strong>Год</strong></td>
            <td><?php echo $sum_year;?></td>
            <td><?php echo $rash_year;?></td>
            <td><?php echo $itog_year;?></td>
        </tr>
        </tbody>
    </table>

</div>

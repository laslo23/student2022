<?php
//посчитать длину массива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
var_dump(count($arr));

//переместить первые 4 элемента массива в конец массива
foreach ($arr as $key => $value)
{
    if($key < 4)
    {
        $arr_end[] = $value;
    }else
    {
        $arr_start[] = $value;
    }
}
$arr = array_merge($arr_start, $arr_end);

echo '<pre>';
print_r($arr);
echo '</pre>';


//получить сумму 4,5,6 элемента
$flags = [3,4,5];
echo get_sum($arr, $flags);

function get_sum(array $arr, array $flags) {
    $sum = 0;
    for ($i = 0, $count = count($arr); $i <= $count; $i++) {
        if(in_array($i, $flags))
            $sum = $sum +$arr[$i];
    }
    return $sum;
}


$firstArr = ['one' => 1, 'two' => 2, 'three' => 3, 'foure' => 5, 'five' => 12];
$secondArr = ['one' => 1, 'seven' => 22, 'three' => 32, 'foure' => 5, 'five' => 13, 'six' => 37];
//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
var_dump(array_diff_key($secondArr, $firstArr));

//найти все элементы которые присутствую в первом и отсутствуют во втором
var_dump(array_diff_key($firstArr, $secondArr));
//найти все элементы значения которых совпадают
$result = array_intersect($firstArr, $secondArr);
echo '<pre>';
print_r($result);
echo '</pre>';
//найти все элементы значения которых отличается
$result2 = array_diff($firstArr, $secondArr);
echo '<pre>';
print_r($result2);
echo '</pre>';

//получить сумму всех значений в массиве
function array_multisum(array $arr): float
{
    $sum = 0;
    foreach ($arr as $child) {
        $sum += is_array($child) ? array_sum($child) : $child;
    }
    return $sum;
}

$firstArr1 = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];
echo array_multisum($firstArr1) . '<br>';

//получить общее количество элементов в массиве
echo count($firstArr1, COUNT_RECURSIVE);

//получить все вторые элементы вложенных массивов
foreach ($firstArr1 as $value) {
    if (is_array($value)){
        $keys = array_keys($value);
        var_dump($keys);
        if (isset($keys[1])) {
            var_dump($value[$keys[1]]);
        }
    }
}
?>
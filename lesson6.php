<?php
//Создать функцию принимающую массив произвольной вложенности и определяющий любой єлемент номер которого передан параметром во всех вложенніх массиваї.
function getElement1(array $data1, array $keys)
{
    $data = [];
    foreach($data1 as $key => $value) {
        if (is_array($value)) {
            $data = array_merge(getElement1($value, $keys),$data);
        } elseif (in_array($key, $keys)) {
        $data[] = $value;
        }
    }
return $data;
}
$get_elem_free = [1, 2, [2,4], 3, 4];
var_dump(getElement1($get_elem_free, [1]));

//создать функцию которая считает все буквы b в переданной строке,в случае если передается не строка функция должна возращать false.

function finder_b(string $haystack_1): int
{
    return substr_count($haystack_1, 'b');
}
$elem_b = "My boss is big";
echo finder_b($elem_b);

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

function array_multisum(array $arr): float
{
    $sum = array_sum($arr);
    foreach ($arr as $elem) {
         $sum += is_array($elem) ? array_multisum($elem) : 0;
    }
return $sum;

}
$data = array (array (1, 2, 3), array(20,40, 60));
echo array_multisum($data);

//Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float


?>
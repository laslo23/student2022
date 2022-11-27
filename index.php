<?php
mb_internal_encoding("UTF-8");

//Получить остаток деления 7 на 3
$x = 7 % 3;
echo $x;
echo '<br/>';

//Получить целую часть сложения 7 и 7,15
$z  =  intval(7 + 7.15);
echo $z ;
echo '<br/>';

//Получить корень из 25
$c = sqrt(25);
echo $c;
echo '<br/>';


//Получить 4-е слово из фразы - Десять негритят пошли купаться в море
$string = 'Десять негритят пошли купаться в море';
$item = explode (' ', $string);
echo $item[3];
echo '<br/>';

//Получить 17-й символ из фразы - Десять негритят пошли купаться в море
$symbol = mb_substr($string, 16,1);
echo $symbol;
echo '<br/>';

//Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море
$string = 'Десять негритят пошли купаться в море';
$items = explode(' ', $string);
echo '<br/>';

$new_string = '';
foreach ($items as $item){
    $new_string .= ' '.foo($item);

}
echo $new_string;
echo '<br/>';

//Посчитать длину строки - Десять негритят пошли купаться в море
echo mb_strlen($string);
echo '<br/>';

//Правильно ли утверждение true равно 1
if(1) {
    echo 'true';
    //Pravda
}
echo '<br/>';

//Правильно ли утверждение false тождественно 0

if(0 === false)
{
   echo 'правда';
}else{
    //Pravda
    echo 'не правда';
}
echo '<br/>';

//Какая строка длиннее three - три
//kirileca 'three' > 'три'
echo mb_strlen('three') .' - ';
echo mb_strlen('три');
echo '<br/>';
//lantineca 'three' < 'три'
echo strlen('three') . ' - ';
echo strlen('три');
echo '<br/>';

//Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2

$x = 125 * 13 + 7;
$y = 223 + 28 * 2;

if($x > $y) {
    echo $x . '- больше х';
}else{
    echo $y . '- больше У';
}
echo '<br/>';





//заглавная первая буква в строке
function foo($strint){
    return mb_convert_case($strint, MB_CASE_TITLE, "UTF-8");
}














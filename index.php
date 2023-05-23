<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP5</title>
</head>
<body>

<?php
echo ('1. Есть имя Stive. 

Если возраст Stive:
    от 0 до 12 - вывести Steve is a child
    с 12 до 18 - вывести Steve is a teenager
иначе 
    - вывести Steve is an adult

Решить задачу 3 – способами:
    1 if-else
    2 switch.
    3 Условный (тернарный) оператор');

 function stiveAge($age) {
     //через if else
     /*if($age > 0 && $age < 12) {
         echo ('Stive is a child');
     } elseif ($age > 12 && $age < 18) {
         echo ('Stive is a teenager');
      } else {
         echo ('Stive is a adult');
     }*/
    //тернарный оператор
     echo $age > 0 && $age < 12 ? 'Stive is a child' : ($age > 12 && $age < 18
         ? 'Stive is a teenager' : 'Stive is a adult');

    //switch case
     /*switch ($age) {
         case $age > 0 && $age < 12:
             echo ('Stive is a child');
             break;
         case $age > 12 && $age < 18:
             echo ('Stive is a teenager');
             break;
         default:
             echo ('Stive is a adult');
     }*/

 }
 echo ('<br>');
 stiveAge(19);

echo ('<hr>');
echo ('2. Написать с помощью цикла while и for «переворот» числа. Другими словами, 
нужно создать новое число, у которого цифры шли бы в обратном порядке (например: 
472 -> 274).');


 function task2($number) {
     //while
    /* $string = '';
     $i = strlen($number);

    while ($i >= 0) {
        $string .= $number[$i];
        $i--;

    }
    return $string;*/


}
echo ('<br>');
echo task2('123');
echo ('<hr>');

echo ('3. Посчитайте кол-во отрицательных, положительных элементов, элементов со строчным 
типом данных в произвольном массиве, а также кол-во элементов других типов.');



echo '<hr>';

echo ('10. Вывести на экран «прямоугольник», образованный из двух видов символов. Контур 
прямоугольника должен состоять из одного символа, а в «заливка» — из другого.');
function pattern($a = 5, $b = 5, $ch_border = '', $ch_bg = '0') {
    $st_line = '';
    for ($i = 1; $i <= $a; $i++) {
        $b_line = '';
        for ($j = 1; $j <= $b; $j++){
            $b_line .= ($i == 1 || $i == $a) ? $ch_border : $ch_bg;
        }

        $st_line .= $ch_border . $b_line . $ch_border . '<br>';
    }
    echo '<pre>' . $st_line . '</pre>';
}

echo '<br>';
pattern(6, 35, '.', '+');

echo '<hr>';



echo ('1.Дана строка \'php\'. Сделайте из нее строку \'PHP\'');

function task1() {
    $str1 = 'london is the capital of great britain';
    $str1 = ucwords($str1);
    echo $str1;
}
task1();
echo '<hr>';
echo ('2. Дана строка \'html \bcss/b php\'. Удалите теги из этой строки. С
//помощью функции explode запишите каждое слово этой строки в отдельный
//элемент массива.');
function task21() {
$str2 = 'html <b>css</b> php';
echo strip_tags($str2);
$arr = explode(' ', $str2);
print_r($arr);
}
task21();
echo '<hr>';

echo ('3. Дана строка. Перемешайте символы этой строки в случайном порядке.');
function task3(){
$str3 = 'Hello';
echo str_shuffle($str3);
}
echo ('<br>');
task3();

echo ('<hr>');

echo ('4. Найдите количество дней в текущем месяце. Скрипт должен работать
//независимо от месяца, в котором он запущен.');

function task4() {
    echo date('t');
}
echo ('<br>');
task4();
echo ('<hr>');


echo ('5. Выведите текущую дату-время в форматах
//\'2025-12-31\', \'31.12.2025\', \'31.12.13\', \'12:59:59\', timestamp.');

function task5() {

    echo date('Y-m-d');
    echo date('d.m.Y');
    echo date('d.m.y');
    echo date('H:i.s');
}
echo ('<br>');
task5();
echo ('<hr>');


echo ('6. В переменной $date лежит дата в формате \'2025-12-31\'. Прибавьте к этой
//дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.');

function task6() {

    echo date('Y-m-d');
    echo ('<br>');
    echo date("Y-m-d", time()+(2*24*60*60));
    echo ('<br>');
    echo date("Y-m-d", time()+(31*24*60*60 + 3*24*60*60));
    echo ('<br>');
    echo date("Y-m-d", time()+(365*24*60*60));
}
echo ('<br>');
task6();
echo ('<br>');

echo ('7. Дана строка с буквами и цифрами, например, \'1a2b3c4b5d6e7f8g9h0\'.
//Удалите из нее все цифры. То есть в нашем случае должна получится строка
//\'abcbdefgh\'.');

function task7($str) {
    $pattern = '/[0-9]/';
    $replace = '';
    $str = preg_replace($pattern, $replace, $str);
    echo $str;

}
echo ('<br>');
task7('1a2b3c4b5d6e7f8g9h0');
echo ('<hr>');

echo ('8. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное
//число.');

function task8($arr) {
    echo 'Максимальное число: ' . max($arr);
    echo ('<br>');
    echo 'Минимальное число: ' . min( $arr);
}
echo ('<br>');
task8([4, -2, 5, 19, -130, 0, 10]);
echo ('<hr>');

echo ('9. Выведите на экран случайное число от 1 до 100');

function task9($number) {
    echo rand(1, 100);
}
echo ('<br>');
task9(1);
echo ('<hr>');

echo ('10. Создайте ассоциативный массив дней недели. Ключами в нем должны
//служить номера дней от начала недели (понедельник - должен иметь ключ 1,
//вторник - 2 и т.д.). Выведите на экран текущий день недели.');

function task10() {
    $day = [
        '1' => 'Понедельник',
        '2' => 'Вторник',
        '3' => 'Среда',
        '4' => 'Четверг',
        '5' => 'Пятница',
        '6' => 'Суббота',
        '7' => 'Воскресенье',
    ];
    echo $day[date('w')];
}
echo ('<br>');
task10();
echo ('<hr>');

echo ('11.Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]].
//Найдите сумму элементов этого массива. Массив, конечно же, может быть
//произвольным.');

function arr_11($arr = []) {
    static $sum = 0;

    foreach ($arr as $value) {
        if (!is_array($value)) $sum += +$value;
        else arr_11($value);
    }

    return $sum;

}
echo ('<br>');
echo arr_11([[1, 2, 3], [4, [1, 2]], [6]]);
echo ('<hr>');

echo ('12. Есть массив $array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3, то
//есть вывести без дублей при помощи лишь одного цикла и без использования
//функций PHP.');

function task12($array) {
    $a = [];
    foreach ($array as $value) {
        if (!$a[$value]) {
            $a[$value] = true;
            echo $value . ', ';
        }
    }
}
echo ('<br>');
task12([1,3,6,5,2,1,6,1,1,2,2,2,2,3]);
echo ('<hr>');

echo ('13. Используя ассоциативный массив, добавить на страницу навигационное 
меню вида:
Заполните массив соблюдая сл. условия: название индексов являются именем
файла (без расширения), на который ссылается меню; значения массива явл. 
названиями пунктов меню.
');

function task13() {
$arr = [
    'index' => 'Home',
    'about' => 'About',
    'services' => 'Services',
    'catalog' => 'Catalog',
    'contacts' => 'Contacts',
];

echo "<ul>";
foreach ($arr as $key => $value) {
    echo "<li><a href=\"${key}\">${value}</a></li>";
}
echo "</ul>";
}
echo ('<br>');
task13();
echo ('<hr>');

echo ('14. Вывести на черном фоне n красных квадратов случайного размера в 
случайной позиции в браузере.
');



?>

<div style="height: 100vh; position:relative; background-color:black; overflow:hidden">
    <?php

    function task14($n)
    {
        $color = ' ';
        $color .= dechex(rand(0, 255));
        for ($i = 0; $i < $n; $i++) {
            $box = rand(2,100);

            echo "
      <div style=\"
      position: absolute;
      box-sizing: border-box;
      border: 5px solid " . $color  . ";
      top:" . rand(1, 100) . "vh;" . "
      left:" . rand(1, 100) . "vw;" . "
      background-color: red; 
      height:" . $box . 'px;' . "
      width:" . $box . 'px;' . "\">
      </div>";

        }
    }
    echo ('<br>');
    task14(55);

    ?>
</div>
 <?php

 echo ('15. Дана строка с любыми символами. Для примера пусть будет \'1234567890\'.
Нужно разбить эту строку в массив таким образом: array(\'1\', \'23\', \'456\', \'7890\') 
и так далее пока символы в строке не закончатся.
');


function task15(string $str): array {
    static $arr = [];
    static $i = 1;

    if ($i >= strlen($str)) {
        $arr[] = $str;
        return $arr;
    }
    $arr[] = strpos($str, $str[$i], true);
    $i++;
    return task15(substr($str, $i - 1));

}
 echo ('<br>');
print_r(task15('1234567890'));
 echo ('<hr>');

 echo ('16. Найдите сумму элементов массива между двумя нулями (первым и 
последним нулями в массиве). Если двух нулей нет в массиве, то выведите 
ноль. В массиве может быть более 2х нулей. Пример массива: 
[48,9,0,4,21,2,1,0,8,84,76,8,4,13,2] или [1,8,0,13,76,8,7,0,22,0,2,3,2]
');

function task16($array) {
    for ($i = 0; $i >= $array; $i++) {

    echo "sum(a) = " . array_sum($array[$i]);
    }
}
 echo ('<br>');
task16([48,9,0,4,21,2,1,0,8,84,76,8,4,13,2]);
 echo ('<hr>');

 echo ('17. Сделайте функцию, которая будет генерировать случайный цвет в hex 
(dechex) формате (типа #ffffff).
');

 function hex()
 {
     $color = '#';
     for ($i = 0; $i < 3; $i++) {
         $color .= strtoupper(dechex(rand(0, 255)));
     }
     return $color;
 }

 echo ('<br>');
echo hex();

 echo ('<hr>');

 echo ('18. Дана строка \'332 441 550\'. Найдите все места, где есть два одинаковых 
идущих подряд цифры и замените их на \'!\'. ');

function repetitionSubstitution($str)
{
    $replace = function ($arr) use (&$str) {
        foreach ($arr as $item) {
            $str = str_replace($str[$item], '!', $str);

        }
    };
    for ($i = 0; $i < strlen($str); $i++) {
        if (is_numeric($str[$i]) && is_numeric($str[$i + 1]) && $str[$i] === $str[$i + 1]) {
            $replace([$i, $i + 1]);
        }
    }
    return $str;
 }
    echo ('<br>');
  echo  repetitionSubstitution('332 441 550');






 echo ('<hr>');

 echo ('19. Напишите ф-цию строгой проверки ввода номер телефона в 
международном формате (код страны> код города или сети> номер 
телефона>) и упрощенной проверки ввода простого номера с кодом и без 
него. Функция должна возвращать true или false. 
');

 function validation($number) {
     $a = '/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/';
     if (preg_match($a, $number)) {
         return ' - TRUE';
     } else {
         return ' - FALSE';
     }

 }
 echo '+375291111111' . validation('+375291111111') . '<br>';
 echo '+375 29aaaaaa' . validation('+37529a111111') . '<br><hr>';




 echo ('<hr>');

 echo ('20. Напишите ф-цию, которая должна проверить правильность ввода адреса 
эл. почты. Почта верна при условии: 
a. весь адрес не должен содержать русские буквы и спецсимволы, кроме 
одной «собачки», знака подчеркивания, дефиса и точки, причем они не могут
быть первыми и последними в адресе, и идти подряд, например: «..», «@.», 
«.@» или «@@», «_@», «@-», «--» и т.п. 
b. имя эл. почты (до знака @) должно быть длиной более 2 символов, причем 
имя может содержать только буквы, цифры, но не быть первыми и 
единственными в имени, и точку; 
c. после последней точки и после @, домен верхнего уровня (ru, by, com и 
т.п.) не может быть длиной менее 2 и более 11 символов.');






 echo ('<hr>');
 ?>


























</body>
</html>
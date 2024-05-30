<?php
//Задача 1. Находим во всех влоежныых массивах, елементы с нужным номером
function findElement( array $arr, int $index): array
{   
  $result = [];
    foreach ($arr as $key => $element){
        if (is_array($element)){
            $result = array_merge($result, findElement($element, $index));
        } elseif ($key == $index) {
            $result[] = $element;
        }
    }
  return $result;
}
$index=2;
$array = [1,2,3,4, [6, 7, 8, 9], ['a', 'b' , 'c', 'd'], [1, 2, ['f', 'd', '6', 5]]];
echo "<br>" . "Задача 1" . "<br>";
echo "Массив всех елементов с индексом " . $index . "<br>";
var_dump(findElement($array, $index));
echo "<br>";

//Задача 2. Считаем количество b в строке. Если перелана не строка -  NULL
function countBInString( mixed $string): int | string
{   
    $result = 'false';
    if(is_string($string)){
        $result = substr_count($string, 'b');
    }
    return $result;
}

echo "<br>" . "Задача 2" . "<br>";
echo "Вводные данные Строка = aasdxcvdsfbbbasfasbb, result = " . countBInString('aasdxcvdsfbbbasfasbb') . "<br>";
echo "Вводные данные Массив = [1,2,3,4,5], result = " . countBInString([1,2,3,4,5]) . "<br>";
echo "Вводные данные Числа = 1,2,3,4,5, result = " . countBInString(1,2,3,4,5) . "<br>";

//Задача 3. Считаем сумму значений всех элементов массива произвольной глубины
function sumArray( array $arr): int | float 
{   
  $result = 0;
    foreach ($arr as $element){
        if (!is_array($element) && !is_numeric($element)){
            continue;
        }
        if (is_array($element)){
            $result += sumArray($element);
        } else {
            $result += $element;
        }
    }
  return $result;
}

$array = [1, 2, 3, 4, 5, [5, 5], [10, 10, 10, [10, 10]]];
echo "<br>" . "Задача 3" . "<br>";
echo "Сумма елементов всего массива = " . sumArray($array) . "<br>";

//Задача 4. Считаем сколько квадратор меньшего размера, можно вписать в квадрат большего размера
function countSmallerSqr( float $sizeBiggest, float $sizeSmaller): int
{   
    $result = 0;
    if ($sizeBiggest >= 0 && $sizeSmaller >= 0){
        $floor = floor($sizeBiggest / $sizeSmaller);
        $result = pow($floor, 2);
    }
    
    return $result;
}

echo "<br>" . "Задача 4" . "<br>";
echo "Большой квадрат = 10, маленький 4. Количество вписываний = " . countSmallerSqr(10, 4) . "<br>";

//Задача 4. Если надо вовзаращать не целое число квадратов, а теоретически
function countSmallerSqrFloat( float $sizeBiggest, float $sizeSmaller): float
{   
    $result = 0;
    if ($sizeBiggest >= 0 && $sizeSmaller >= 0){
        $squareBiggest = pow($sizeBiggest, 2);
        $squareSmaller = pow($sizeSmaller, 2);
        $result = $squareBiggest / $squareSmaller;
    }
    
    return $result;
}

echo  "<br>" . "Задача 4. Как вариант" . "<br>";
echo "Большой квадрат = 10, маленький 4. Количество теоретичных вписываний = " . countSmallerSqrFloat(10, 4) . "<br>";
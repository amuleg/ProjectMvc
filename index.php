<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo "Початковий масив: ";
echo var_dump($arr) . "<br>";
$countArray = count($arr);
echo "Довжина масиву = " . $countArray . "<br>";

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$firstFour = array_splice($arr, 0, 4);
$arr = array_merge($arr, $firstFour);
echo "Новий масив, переставили 4 елемента в кінець: ";
echo var_dump($arr) . "<br>";

$sum = $arr[3] + $arr[4] + $arr[5];
echo "Сума 4,5,6 елементів = " . $sum . "<br>";

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

$diff1 = array_diff_key($secondArr, $firstArr);
echo "Елементи які відсутні в першому, але є у другому: ";
echo var_dump($diff1) . "<br>";

$diff2 = array_diff_key($firstArr, $secondArr);
echo "Елементи які відсутні в другому, але є у першому: ";
echo var_dump($diff2) . "<br>";

$similarValue = array_intersect_assoc($firstArr, $secondArr);
echo "Елементи які значення яких однакові: ";
echo var_dump($similarValue) . "<br>";

$similarValue = array_diff_assoc($firstArr, $secondArr);
echo "Елементи які значення яких різні: ";
echo var_dump($similarValue) . "<br>";

$firstArr = [
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

$secondElements = [];
foreach ($firstArr as $value) {
    if (is_array($value)) {
       
        $keys = array_keys($value);
        if (isset($keys[1])) {
            $secondElements[$keys[1]] = $value[$keys[1]];
        }
    }
}
echo "Другий масив: ";
echo var_dump($firstArr) . "<br>";

echo "Всі другі елементі вкладених масивів: ";
echo var_dump($secondElements) . "<br>";

$count = 0;
foreach ($firstArr as $value) {
    if (is_array($value)) {
        $count += count($value);
    } else {
        $count++;
    }
}

echo "Загальна кількість елементів:" . $count . "<br>";

$sum = 0;
foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
        $sum += array_sum($value);
    } else {
        $sum+=$firstArr[$key];
    }
}
echo "Загальна сума елементів:" . $sum . "<br>";
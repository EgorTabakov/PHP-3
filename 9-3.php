<?php
$array = [9, 7, 5, 3, 1, 4, 3, 8, 9, 6, 4, 32, 45, 76, 89];
sort($array);

function linearSearch ($myArray, $num) {

    $arrCount = count($myArray);

    for ($i = 0; $i < $arrCount; $i++) {

        echo "Проверяется число с индексом: $i </br>".PHP_EOL;

        if($myArray[$i] == $num) {
            echo "ЧИСЛО НАЙДЕНО! Индекс $i </br>".PHP_EOL;
            echo "Количество шагов: " . ($i+1) .  "</br>";
            return $i;
        }

        elseif ($myArray[$i] > $num) {
            return null;
        }
    }
}

function binarySearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while ($start <= $end) {
        $n++;

        $base = floor(($start + $end) / 2);


        echo "Проверяется элемент с индексом: $base </br>" . PHP_EOL;

        if ($myArray[$base] == $num) {
            echo "Количество итераций: $n искомого числа $num под индексом $base </br>" . PHP_EOL;
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
    echo "ЧИСЛО НЕ НАЙДЕНО! Количество шагов: $n -- $myArray[$base] -- $num </br>" . PHP_EOL;
    return null;
}

function interpolationSearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while (($start <= $end) && ($num >= $myArray[$start]) && ($num <= $myArray[$end])) {
        $n++;
        $base = floor( $start +
            ($end - $start) / ($myArray[$end] - $myArray[$start])
            * ($num - $myArray[$start])
        );

        echo "Проверяется элемент с индексом: $base </br>" . PHP_EOL;

        if ($myArray[$base] == $num) {
            echo "Количество шагов: $n искомого числа $num под индексом $base </br>" . PHP_EOL;
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
    echo "ЧИСЛО НЕ НАЙДЕНО! Количество итераций: $n" . PHP_EOL;
    return null;

}

echo "Линейный поиск:</br>";
LinearSearch($array,89);
echo "</br>";
echo "Бинарный поиск:</br>";
binarySearch($array,89);
echo "</br>";
echo "Интерполяционный поиск:</br>";
interpolationSearch($array,89);
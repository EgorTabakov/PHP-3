<?php

$sortArr = [2, 6, 8, 4, 8, 9, 7, 4, 3, 2, 56, 87, 654, 43, 4, 66, 44];
$value = 2;

echo "Входной массив:  " . implode(",", $sortArr) . "</br>";
echo "Искомый элемент: $value</br>";

function deleteFromArray($value, $sortArr)
{
    if (in_array($value, $sortArr)) {
        echo "Найден элемент $value </br> ...Удален</br>";
        unset($sortArr[array_search($value, $sortArr)]);
        deleteFromArray($value, $sortArr);

    } else {
        echo "Элемент не найден </br>";
        echo " Выходной массив: " . implode ( ", " , $sortArr );
    }
}
deleteFromArray($value, $sortArr);

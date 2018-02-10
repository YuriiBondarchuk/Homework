<?php
/**
 * Альтернативный синтаксис:  foreach
 * Выполнить предыдущие задания при помощи альтернативного синтаксиса
 * Создать массив из 10 любых числовых значений.
 * При помощи foreach вывести на экран те значения, которые делятся на 3
 */

$arr=array(4,3,6,9,7,12,14,15,21,98);
//var_dump($arr);
foreach($arr as $key => $item):

    if($item%3==0):
        echo "$key => $item <br>";
    endif;
endforeach;
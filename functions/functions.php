<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied');

/* ===–аспечатка массива=== */
function print_arr($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
/* ===–аспечатка массива=== */
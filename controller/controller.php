<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied');

// подключение модели
require_once MODEL;

// подключение библиотеки функций
require_once 'functions/functions.php';

// получение массива страниц
$pages = pages();

// получение массива категорий
$categories = categories();

// получение массива популярных статей
$popular_articles = popular_articles();

// подключение динамической части шаблона
$view = empty($_GET['view']) ? 'latest' : $_GET['view'];

// переключатель видов switch
switch($view){
    case('latest'):
    break;
    
    case('page'):
    // отдельная страница
    $page_id = abs((int)$_GET['page_id']);
    $get_page = get_page($page_id);
    break;
    
    case('category'):
    $category = abs((int)$_GET['cat_id']);
    $articles = articles($category);
    break;

    case('article'):
    // статья
    $article_id = abs((int)$_GET['art_id']);
    $article = article($article_id);
    break;
    
    default:
    $view = 'latest';
}

// подключение вида
require_once TEMPLATE.'index.php';
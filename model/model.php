<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied');

/* ===Страницы - получение массива страниц=== */
function pages(){
    $query = "SELECT pages_id, title FROM pages ORDER BY position";
    $res = mysql_query($query) or die(mysql_error());
    
    $pages = array();
    while($row = mysql_fetch_assoc($res)){
        $pages[] = $row;
    }
    return $pages;
}
/* ===Страницы - получение массива страниц=== */

/* ===Категории - получение массива категорий=== */
function categories(){
    $query = "SELECT * FROM categories ORDER BY cat_name";
    $res = mysql_query($query) or die(mysql_error());
    
    $categories = array();
    while($row = mysql_fetch_assoc($res)){
        $categories[] = $row;
    }
    return $categories;
}
/* ===Категории - получение массива категорий=== */

/* ===Отдельная страница=== */
function get_page($page_id){
    $query = "SELECT title, text FROM pages WHERE pages_id = $page_id";
    $res = mysql_query($query) or die(mysql_error());
    
    $get_page = array();
    $get_page = mysql_fetch_assoc($res);
    return $get_page;
}
/* ===Отдельная страница=== */

/* ===Популярные статьи=== */
function popular_articles(){
    $query = "(SELECT * FROM articles
                INNER JOIN categories ON
                articles.art_catid = categories.cat_id
                ORDER BY date DESC LIMIT 3) ORDER BY views DESC";
    $res = mysql_query($query) or die(mysql_error());
    
    $popular_articles = array();
    while($row = mysql_fetch_assoc($res)){
        $popular_articles[] = $row;
    }
    return $popular_articles;
}
/* ===Популярные статьи=== */

/* ===Получение статей по категориям=== */
function articles($category){
    $query = "SELECT * FROM articles
                INNER JOIN categories ON
                articles.art_catid = categories.cat_id WHERE art_catid = $category ORDER BY date DESC";
    $res = mysql_query($query) or die(mysql_error());
    
    $articles = array();
    while($row = mysql_fetch_assoc($res)){
        $articles[] = $row;   
    }

    return $articles;
}
/* ===Получение статей по категориям=== */

/* ===Статья=== */
function article($article_id){
    $query = "SELECT * FROM articles 
    INNER JOIN categories ON
    articles.art_catid = categories.cat_id WHERE art_id = $article_id";
    $res = mysql_query($query) or die(mysql_error());

    $article = array();
    $article = mysql_fetch_assoc($res);
    return $article;
}
/* ===Статья=== */
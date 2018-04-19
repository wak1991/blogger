<?php
// запрет прямого обращения
define('BLOGGER', TRUE);

// старт сессии
session_start();

// подключение файла конфигурации
require_once '../config.php';

// подключение функций админки
require_once '../functions/functions.php';

// подключение функций админки
require_once 'functions/functions.php';

// получение динамической части шаблона
$view = empty($_GET['view']) ? 'pages' : $_GET['view'];

// получение массива каталога
$categories = categories();

switch($view){
	case('pages'):
		// страницы
	$pages = pages();
	break;

	case('edit_page'):
	// редактирование страницы
	$page_id = (int)$_GET['page_id'];
	$get_page = get_page($page_id);

	if($_POST){
		if(edit_page($page_id)) redirect('?view=pages');
		else redirect();
	}
	break;

	case('add_page'):
	if($_POST){
		if(add_page()) redirect('?view=pages');
		else redirect();
	}
	break;

	case('del_page'):
	$page_id = (int)$_GET['page_id'];
	del_page($page_id);
	redirect();
	break;

	case('categories'):
	break;

	case('add_categorie'):
		if($_POST){
			if(add_categorie()) redirect('?view=categories');
				else redirect();
	}
	break;

	case('edit_categorie'):
	$cat_id = (int)$_GET['cat_id'];
	$categor = categor($cat_id);
	if($_POST){
		if(edit_categorie($cat_id)) redirect('?view=categories');
		else redirect();
	}
	break;

	case('del_categorie'):
	$cat_id = (int)$_GET['cat_id'];
	del_categorie($cat_id);
	redirect();
	break;

	case('articles'):
	$cat_id = (int)$_GET['cat_id'];
	$articles = articles($cat_id);
	break;

	case('add_article'):
	$new_art_id = (int)$_GET['cat_id'];
		if($_POST){
			if(add_article()) redirect("?view=articles&cat_id=$new_art_id");
			else redirect();
		}
	break;

	default:
	$view = 'pages';
}

// HEADER
include ADMIN_TEMPLATE.'header.php';

// LEFTBAR
include ADMIN_TEMPLATE.'leftbar.php';

// CONTENT
include ADMIN_TEMPLATE.$view.'.php';

?>
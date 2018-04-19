<?php defined('BLOGGER') or die('Access denied');

/* =====Фильтрация входящих данных из админки===== */
function clear_admin($var){
	$var = mysql_escape_string($var);
	return $var;
}
/* =====Фильтрация входящих данных из админки===== */

/* =====Редирект===== */
function redirect($http = false){
	if($http) $redirect = $http;
	else $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
		header("Location: $redirect");
		exit;
}
/* =====Редирект===== */

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

/* =====Страницы получение массива===== */
function pages(){
	$query = "SELECT pages_id, title, position FROM pages ORDER BY position";
	$res = mysql_query($query) or die(mysql_error());

	$pages = array();
	while($row = mysql_fetch_assoc($res)){
		$pages[] = $row;
	}
	return $pages;

}
/* =====Страницы получение массива===== */

/* =====Отдельная страница===== */
function get_page($page_id){
	$query = "SELECT * FROM pages WHERE pages_id = $page_id";
	$res = mysql_query($query) or die(mysql_error());

	$page = array();
	$page = mysql_fetch_assoc($res);
	return $page;
}
/* =====Отдельная страница===== */

/* =====Редактирование страницы===== */
function edit_page($page_id){
	$title = trim($_POST['title']);
	$keywords = trim($_POST['keywords']);
	$description = trim($_POST['description']);
	$position = (int)trim($_POST['position']);
	$text = trim($_POST['text']);

	if(empty($title)){
		// если нет названия
		$_SESSION['edit_page']['res'] = "<div class='error'>Должно быть название страницы</div>";
		return false;
	}else{
		$title = clear_admin($title);
		$keywords = clear_admin($keywords);
		$description = clear_admin($description);
		$text = clear_admin($text);

		$query = "UPDATE pages SET
					title = '$title',
					keywords = '$keywords',
					description = '$description',
					position = $position,
					text = '$text'
						WHERE pages_id = $page_id";
		$res = mysql_query($query) or die(mysql_error());

		if(mysql_affected_rows() > 0){
			$_SESSION['answer'] = "<div class='success'>Страница обновлена</div>";
			return true;
		}else{
			$_SESSION['edit_page']['res'] = "<div class='error'>Ошибка или Вы ничего не меняли!</div>";
			return false;
		}
	}
}
/* =====Редактирование страницы===== */

/* =====Добавление страницы===== */
function add_page(){
	$title = trim($_POST['title']);
	$keywords = trim($_POST['keywords']);
	$description = trim($_POST['description']);
	$position = (int)trim($_POST['position']);
	$text = trim($_POST['text']);

	if(empty($title)){
		$_SESSION['add_page']['res'] = "<div class='error'>Должно быть название страницы</div>";
		$_SESSION['add_page']['keywords'] = $keywords;
        $_SESSION['add_page']['description'] = $description;
        $_SESSION['add_page']['position'] = $position;
        $_SESSION['add_page']['text'] = $text;
		return false;
	}else{
		$title = clear_admin($title);
		$keywords = clear_admin($keywords);
		$description = clear_admin($description);
		$text = clear_admin($text);

		$query = "INSERT INTO pages (title, keywords, description, position, text)
					VALUES ('$title', '$keywords', '$description', $position, '$text')";

		$res = mysql_query($query) or die(mysql_error());

		if(mysql_affected_rows() > 0){
			$_SESSION['answer'] = "<div class='success'>Страница добавлена!</div>";
			return true;
		}else{
			$_SESSION['add_page']['res'] = "<div class='error'>Ошибка добавления страницы!</div>";
			return false;
		}
	}
}
/* =====Добавление страницы===== */

/* =====Удаление страницы===== */
function del_page($page_id){
	$query = "DELETE FROM pages WHERE pages_id = $page_id";
	$res = mysql_query($query) or die(mysql_error());

	if(mysql_affected_rows() > 0){
		$_SESSION['answer'] = "<div class='success'>Страница удалена!</div>";
		return true;
	}else{
		$_SESSION['answer'] = "<div class='error'>Ошибка удаления страницы!</div>";
		return false;
	}
}
/* =====Удаление страницы===== */

/* =====Добавление категории===== */
function add_categorie(){
	$cat_name = clear_admin(trim($_POST['cat_name']));

	if(empty($cat_name)){
		$_SESSION['add_categorie']['res'] = "<div class='error'>Вы не указали название категории!</div>";
		return false;
	}else{
		// проверим есть ли категория 1 таким же названием
		$query = "SELECT cat_id FROM categories WHERE cat_name = '$cat_name'";
		$res = mysql_query($query);
		if(mysql_num_rows($res) > 0){
			$_SESSION['add_categorie']['res'] = "<div class='error'>Категория с таким название уже существует!</div>";
			return false;
		}else{
			$query = "INSERT INTO categories (cat_name)
						VALUES ('$cat_name')";
		$res = mysql_query($query);

		if(mysql_affected_rows() > 0){
			$_SESSION['answer'] = "<div class='success'>Категория добавлена!</div>";
			return true;
		}else{
			$_SESSION['add_categorie']['res'] = "<div class='error'>Ошибка при добавлении категории!</div>";
			return false;
		}
		}
	}
}
/* =====Добавление категории===== */

/* =====Отдельная категория===== */
function categor($cat_id){
	$query = "SELECT cat_name FROM categories WHERE cat_id = $cat_id";
	$res = mysql_query($query) or die(mysql_error());

	$categor = array();
	$categor = mysql_fetch_assoc($res);
	return $categor;
}
/* =====Отдельная категория===== */

/* =====Редактирование категории===== */
function edit_categorie($cat_id){
	$cat_name = trim($_POST['cat_name']);

	if(empty($cat_name)){
		// если нет названия
		$_SESSION['edit_categorie']['res'] = "<div class='error'>Должно быть название страницы</div>";
		return false;
	}else{
		$cat_name = clear_admin($cat_name);

		$query = "UPDATE categories SET
					cat_name = '$cat_name'
						WHERE cat_id = $cat_id";
		$res = mysql_query($query) or die(mysql_error());

		if(mysql_affected_rows() > 0){
			$_SESSION['answer'] = "<div class='success'>Страница обновлена</div>";
			return true;
		}else{
			$_SESSION['edit_categorie']['res'] = "<div class='error'>Ошибка или Вы ничего не меняли!</div>";
			return false;
		}
	}
}
/* =====Редактирование категории===== */

/* =====Удаление категории===== */
function del_categorie($cat_id){
	mysql_query("DELETE FROM articles WHERE art_catid = $cat_id");
	mysql_query("DELETE FROM categories WHERE cat_id = $cat_id");
	$_SESSION['answer'] = "<div class='success'>Категория удалена!</div>";
}
/* =====Удаление категории===== */

/* =====Получение статей по категориям===== */
function articles($cat_id){
	$query = "SELECT * FROM articles WHERE art_catid = $cat_id";
	$res = mysql_query($query) or die(mysql_error());
	$articles = array();
	while($row = mysql_fetch_assoc($res)){
		$articles[] = $row;
	}	
	return $articles;
}
/* =====Получение статей по категориям===== */

/* =====Добавление статьи=====*/
function add_article(){
	$name = trim($_POST['name']);
	$keywords = trim($_POST['keywords']);
	$description = trim($_POST['description']);
	$art_catid = trim($_POST['category']);
	$anons = trim($_POST['anons']);
	$content = trim($_POST['content']);
    $visible = (int)$_POST['visible'];
    $date = date("Y-m-d");


        if(empty($name)){
        $_SESSION['add_article']['res'] = "<div class='error'>У статьи должно быть название!</div>";
        $_SESSION['add_article']['keywords'] = $keywords;
        $_SESSION['add_article']['description'] = $description;
        $_SESSION['add_article']['anons'] = $anons;
        $_SESSION['add_article']['content'] = $content;
        return false;
    }else{
        $name = clear_admin($name);
        $keywords = clear_admin($keywords);
        $description = clear_admin($description);
        $anons = clear_admin($anons);
        $content = clear_admin($content);
        
        $query = "INSERT INTO articles (name, keywords, description, art_catid, anons, content, date, visible)
                    VALUES ('$name', '$keywords', '$description', $art_catid, '$anons', '$content', '$date', '$visible')";
        $res = mysql_query($query) or die(mysql_error());

                if(mysql_affected_rows() > 0){

            $_SESSION['answer'] .= "<div class='success'>Статья добавлена!</div>";
            return true;
        }else{
           $_SESSION['add_article']['res'] = "<div class='error'>Ошибка при добавлении статьи!</div>"; 
           return false;
        }
}
}
/* =====Добавление статьи=====*/

?>
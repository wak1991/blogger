<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clean Blog Template</title>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />
<link href="<?=TEMPLATE?>templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="<?=TEMPLATE?>s3slider.css" rel="stylesheet" type="text/css" />
<!-- JavaScripts-->
<script type="text/javascript" src="<?=TEMPLATE?>js/jquery.js"></script>
<script type="text/javascript" src="<?=TEMPLATE?>js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 1600
        });
    });
</script>

</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_menu">
                
        <ul>
            <li><a href="<?=PATH?>" class="current">Главная</a></li>
            <?php if($pages): ?>
            <?php foreach($pages as $item): ?>
            <li><a href="?view=page&amp;page_id=<?=$item['pages_id']?>"><?=$item['title']?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>	
    
    </div> <!-- end of templatemo_menu -->
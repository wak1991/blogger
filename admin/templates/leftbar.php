<?php 

// проверка константы запрет на доступ 

defined('BLOGGER') or die('Access denied'); ?> 

    <div class="content-main"> 

        <div class="leftBar"> 

            <ul class="nav-left"> 

                <li><a href="/admin/" class="nav-activ">Основные страницы</a></li> 
                <li><a href="?view=categories">Категории:</a></li>
<?php foreach ($categories as $item): ?>
                <ul>
                <li><a href="?view=articles&amp;cat_id=<?=$item['cat_id']?>"><?=$item['cat_name']?></a></li>
                </ul>
<?php endforeach; ?>
            </ul> 

        </div> <!-- .leftBar --> 
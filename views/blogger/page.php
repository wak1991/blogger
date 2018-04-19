<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied'); ?>
        
        <div id="templatemo_main">
        
        <?php if($get_page): ?>
        <h2><?=$get_page['title']?></h2>
        <?=$get_page['text']?>
        <?php else: ?>
        <p>Такой страницы нету</p>
        <?php endif;?>
        
		</div>
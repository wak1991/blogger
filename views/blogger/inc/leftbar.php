<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied'); ?>
    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="<?=PATH?>" target="_parent">Блог <strong>Дрозд</strong><span>Free Layout and Printing</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header --> 
        
                <div id="templatemo_sidebar">
            
            <h4>Категории</h4>
            <ul class="templatemo_list">
            <?php if($categories): ?>
            <?php foreach($categories as $item): ?>
                <li><a href="?view=category&amp;cat_id=<?=$item['cat_id']?>" target="_parent"><?=$item['cat_name']?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>
            </ul>
            
            <div class="cleaner_h40"></div>
            
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
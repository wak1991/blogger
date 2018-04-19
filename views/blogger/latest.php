<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied'); ?>

        
        <div id="templatemo_main">
        
            <?php if($popular_articles): ?>
                <?php foreach ($popular_articles as $item): ?>
            <div class="post_section">
                <span class="comment"><a href="?view=article&amp;art_id=<?=$item['art_id']?>"><?=$item['views']?></a></span>
            
                <h2><a href="?view=article&amp;art_id=<?=$item['art_id']?>"><?=$item[name]?></a></h2>
                
    
            	<?=$item['date']?> | <strong>Категория:</strong> <a href="?view=category&cat_id=<?=$item['cat_id']?>"><?=$item['cat_name']?></a>
                
                <img src="<?=TEMPLATE?>images/<?=$item['img']?>" alt="" />
                
                <p><?=$item['anons']?></p>
              <a href="?view=article&amp;art_id=<?=$item['art_id']?>">Подробнее...</a>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>    
                
            
		</div>
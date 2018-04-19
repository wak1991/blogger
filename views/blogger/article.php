<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied'); ?>

        
        <div id="templatemo_main">
        
            <?php if($article): ?>
            <div class="post_section">
            
                <span class="comment"><?=$article['views']?></span>
            
                <h2><?=$article['name']?></h2>
    
                <?=$article['date']?> | <strong>Категория:</strong> <a href="?view=category&cat_id=<?=$article['cat_id']?>"><?=$article['cat_name']?></a>
                
                <img src="<?=TEMPLATE?>images/<?=$article['img']?>" alt="image" />
                
              <?=$article['content']?>
                
          </div>
            <?php else: ?>
            <p>Здесь пока нет статей!</p>
            <?php endif; ?>    
                
            
		</div>
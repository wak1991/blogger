<?php
// проверка константы запрет на доступ
defined('BLOGGER') or die('Access denied'); ?>
  <div class="cleaner_h20"></div>
  
  	<div id="templatemo_footer">
    
		Copyright © <?php echo date(Y); ?> <a href="<?=PATH?>">Главная</a>
        <?php if($pages): ?>
        <?php foreach($pages as $item): ?>
        | <a href="?view=page&amp;page_id=<?=$item['pages_id']?>"><?=$item['title']?></a>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
  
    <div class="cleaner"></div>
</div> <!-- end of warpper -->

</body>
</html>